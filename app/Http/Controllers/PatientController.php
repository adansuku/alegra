<?php

namespace App\Http\Controllers;



use App\Models\Patient_info;
use App\Models\Patient_other;
use App\Models\Patient_health;

use App\Http\Requests\CreatePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use App\Repositories\PatientRepository;
use App\Models\Worker_patient_served;
//use App\Repositories\Patient_infoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Patient_hour;
use App\Models\Patient_service;
use App\Models\Patient_Services_Date;
use App\Models\Worker;
use Auth;
use Carbon\Carbon;
use App\Models\Support_product;
use App\Models\Patient_support_product;
use App\Models\Health_indicator_group;
use App\Models\Patient_health_option;

class PatientController extends AppBaseController
{
    /** @var  PatientRepository */
    private $patientRepository;

    public function __construct(PatientRepository $patientRepo)
    {
        $this->patientRepository = $patientRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the Patient.
     *
     * @param Request $request
     *
     * @return Response
     */

    public function allPatients()

    {
        $patients = $this->patientRepository->all();

        return datatables()->of($patients)
            ->addColumn('accion', function ($patient) {
                if(Auth::user()->role_id == 1){
                    return '
                    <a href="/patientHistory/' . $patient->id . '" class="btn btn-xs btn-light">
                    <i class="fas fa-history"></i> Historial </a>

                    <a href="/patients/' . $patient->id . '/edit" class="btn btn-xs btn-light btn-icon">
                    <i class="far fa-edit"></i> </a>
        
                    <a href="/patients/' . $patient->id . '" class="btn btn-xs btn-light btn-icon">
                    <i class="far fa-eye"></i> </a>
                    
                    <button class="btn btn-xs btn-danger btn-delete btn-icon" data-remote="/patients/' . 
                    $patient->id . '"><i class="far fa-trash-alt"></i> </button>
                    ';
                }elseif( in_array(Auth::user()->role_id,[2,3])  ){
                    return '
                    <a href="/patientHistory/' . $patient->id . '" class="btn btn-xs btn-light">
                    <i class="fas fa-history"></i> Historial </a>
                    
                    <a href="/patients/' . $patient->id . '/edit" class="btn btn-xs ">
                    <i class="far fa-edit"></i> </a>

                    <a href="/patients/' . $patient->id . '" class="btn btn-xs ">
                    <i class="far fa-eye"></i> </a>
                    ';
                }
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->rawColumns(['accion'])
            ->removeColumn('password')
            ->make(true);
    }

    public function index(Request $request)
    {
        if(Auth::user()->role_id == 1){
            return view('patients.index');
        }else{
            return redirect("/");
        }
    }

    /**
     * Show the form for creating a new Patient.
     *
     * @return Response
     */
    public function create()
    {
        $workers = Worker::all();

        $last = $this->patientRepository->all()->last();
        if ($last === null) {
            $numero_expediente = 0;
        } else {
            $numero_expediente = $last->numero_expediente;
        }

        return view('patients.create')
            ->with('workers', $workers)
            ->with('numero_expediente', str_pad($numero_expediente + 1, 5, "0", STR_PAD_LEFT));
    }

    /**
     * Store a newly created Patient in storage.
     *
     * @param CreatePatientRequest $request
     *
     * @return Response
     */
    public function store(CreatePatientRequest $request)
    {

        $request->request->add(['convive_con' => ['']]); //add request
       
        $request->request->add(['estado' => '1']);
        $input = $request->all();

        $patient = $this->patientRepository->create($input);
        $patient->patientOther()->create(['patient_id' => $patient->id]);
        $patient->patientInfo()->create(['patient_id' => $patient->id, 'ayuda_soc' => [''], 'tipo_disc' => ['']]);


        $patient->patientHealth()->create(['patient_id' => $patient->id]);

        $today = Carbon::parse($request->fecha_alta_paciente);
        $patient->patientPia()->create([
            'fecha_limite' => $today->addMonths(3),
            'fecha_Real' => '',
            'tipo_pia' => 'Inicial',
            'url_pia' => '',
            'obs_pia' => '',
            'patient_id' => $patient->id,
        ]);

        $today = Carbon::parse($request->fecha_alta_paciente);
        $patient->patientPia()->create([
            'fecha_limite' => $today->addMonths(9),
            'fecha_Real' => '',
            'tipo_pia' => 'Seguimiento',
            'url_pia' => '',
            'obs_pia' => '',
            'patient_id' => $patient->id,
        ]);

        if($request->has('producto_apoyo') && count($request->input('producto_apoyo')) > 0){
            Patient_support_product::where('patient_id',$id)->delete();
            foreach($request->input('producto_apoyo') as $sp){
                $psp = new Patient_support_product();
                $psp->patient_id = $id;
                $psp->support_product_id = $sp;
                $psp->save();
            }
        }

        if($request->has('health_options') && count($request->input('health_options')) > 0){
            Patient_health_option::where('patient_id',$id)->delete();
            foreach($request->input('health_options') as $ho){
                $pho = new Patient_health_option();
                $pho->patient_id = $id;
                $pho->health_indicator_options_id = $ho;
                $pho->save();
            }
        }

        Flash::success('Persona atendida guardada correctamente.');
        return redirect()->route('patients.edit', $patient->id);
    }

    /**
     * Display the specified Patient.
     * @param int $id
     * @return Response
     */

    public function show($id)
    {
        $patient = $this->patientRepository->find($id);
        $worker = Worker::find($patient->worker_id);
        //find if user is autorized to view patient with GET 
        $worker_patient = Worker_patient_served::where('worker_id',Auth::user()->id )->pluck('patient_id')->toArray();; //130

        if (  in_array(Auth::user()->role_id , [1,3]) || in_array($patient->id , $worker_patient) ) {
            if (empty($patient)) {
                Flash::error('Patient not found');
                return redirect(route('patients.index'));
            }
            return view('patients.show')
                ->with('worker', $worker)
                ->with('patient', $patient);
        } else {
            return redirect(route('patients.index'));
        }
    }

    /**
     * Show the form for editing the specified Patient.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $patient = $this->patientRepository->find($id);
        $workers = Worker::all();
        $services = Patient_service::where('patient_id', $id)->get();
        $support_products = Support_product::all();
        $patient_sp = Patient_support_product::where('patient_id',$id)->pluck('support_product_id')->toArray();
        $health_groups = Health_indicator_group::all();
        $patient_health_options = Patient_health_option::where('patient_id',$id)->pluck('health_indicator_options_id')->toArray();

        if (empty($patient)) {
            Flash::error('Patient not found');
            return redirect(route('patients.index'));
        }
        return view('patients.edit')
            ->with('workers', $workers)
            ->with('patient', $patient)
            ->with('services', $services)
            ->with('support_products', $support_products)
            ->with('patient_sp', $patient_sp)
            ->with('health_groups',$health_groups)
            ->with('patient_health_options',$patient_health_options);
    }

    /**
     * Update the specified Patient in storage.
     *
     * @param int $id
     * @param UpdatePatientRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePatientRequest $request)
    {

        $patient = $this->patientRepository->find($id);
        $new_patient_id = $request->worker_id;

        $patient->patientOther()->first()->update($request->all());
        $patient->patientInfo()->first()->update($request->all());
        $patient->patientHealth()->first()->update($request->all());
        $patient = $this->patientRepository->update($request->all(), $id);

        if ($request->file('foto_paciente') != null) {
            $patient->foto_paciente = $request->file('foto_paciente')->store('foto_paciente/' . $patient->id);
            $patient->save();
        }

        if($request->has('producto_apoyo') && count($request->input('producto_apoyo')) > 0){
            Patient_support_product::where('patient_id',$id)->delete();
            foreach($request->input('producto_apoyo') as $sp){
                $psp = new Patient_support_product();
                $psp->patient_id = $id;
                $psp->support_product_id = $sp;
                $psp->save();
            }
        }

        if($request->has('health_options') && count($request->input('health_options')) > 0){
            Patient_health_option::where('patient_id',$id)->delete();
            foreach($request->input('health_options') as $ho){
                $pho = new Patient_health_option();
                $pho->patient_id = $id;
                $pho->health_indicator_options_id = $ho;
                $pho->save();
            }
        }

        if (empty($patient)) {
            Flash::error('Persona no encontrada');
            return redirect(route('patients.index'));
        }

        Flash::success('Persona actualizada correctamente.');

        if ($request->get('action') == 'Guardar') {
            return redirect()->route('patients.edit', $patient->id);
        } elseif ($request->get('action') == 'Guardar y salir') {
            return redirect(route('patients.index'));
        }
    }

    /**
     * Remove the specified Patient from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */

    public function destroy($id)
    {
        if(Auth::user()->role_id != 1){
            $id = null;
        }

        $patient = $this->patientRepository->find($id);

        if (empty($patient)) {
            Flash::error('Persona no encontrada');
            return redirect(route('patients.index'));
        }

        $this->patientRepository->delete($id);
        $patient->patientInfo()->delete();
        $patient->patientOther()->delete();
        $patient->patientHealth()->delete();
        $patient->patientDiagnostics()->delete();
        $patient->patientPatologies()->delete();
        $patient->patientAllergies()->delete();
        $patient->patientCarers()->delete();
        $patient->patientHistory()->delete();
        $patient->patientDocuments()->delete();
        $patient->patientServices()->delete();
        $patient->patientPia()->delete();
        $patient->patientSpapd()->delete();
        $patient->patientTransport()->delete();
        $patient->patientDates()->delete();
        $patient->patientDoctors()->delete();
        $patient->patientMedications()->delete();
        $patient->patientPasts()->delete();

        Flash::success('Persona eliminada correctamente.');
        return redirect(route('patients.index'));
    }
}
