<?php

namespace App\Http\Controllers;



use App\Models\Patient_info;
use App\Models\Patient_other;
use App\Models\Patient_health;

use App\Http\Requests\CreatePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use App\Repositories\PatientRepository;
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
                return '
                <a href="/patients/' . $patient->id . '/edit" class="btn btn-xs ">
                <i class="far fa-edit"></i> Editar</a>

                <a href="/patients/' . $patient->id . '" class="btn btn-xs ">
                <i class="far fa-eye"></i> Ver</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->rawColumns(['accion'])
            ->removeColumn('password')
            ->make(true);
    }

    public function index(Request $request)
    {
        // $patients = $this->patientRepository->all();
        return view('patients.index');
        
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
        // $patient->patientOther()->create(['patient_id' => $patient->id, 'tipo_sub' => ['']]);
        $patient->patientOther()->create(['patient_id' => $patient->id]);
        $patient->patientInfo()->create(['patient_id' => $patient->id]);
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
            'fecha_limite' => $today->addMonths(6),
            'fecha_Real' => '',
            'tipo_pia' => 'Seguimiento',
            'url_pia' => '',
            'obs_pia' => '',
            'patient_id' => $patient->id,
        ]);
        
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

        if (empty($patient)) {
            Flash::error('Patient not found');
            return redirect(route('patients.index'));
        }
        return view('patients.show')
            ->with('worker', $worker)
            ->with('patient', $patient);
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
    
        if (empty($patient)) {
            Flash::error('Patient not found');
            return redirect(route('patients.index'));
        }
        return view('patients.edit')
            ->with('workers', $workers)
            ->with('patient', $patient)
            ->with('services', $services);
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
        $old_patient_id = $patient->worker_id;
        $worker = Worker::find($new_patient_id);

        // if ($new_patient_id != $old_patient_id) {
        //     $patient->patientHistory()->create([
        //         'patient_id' => $patient->id,
        //         'accion' => 'Cambio',
        //         'tipo_accion' => 'Cambio de trabajadora social',
        //         'des_accion' => '<b>Cambio realizado por:</b><br>' . $user->name . " " . $user->lastname,
        //         'reg_accion' => date('d-m-Y'),
        //         'rea_accion' => date('d-m-Y'),
        //         'woker_accion' => $user->name . " " . $user->lastname,
        //         'observaciones' => '<b>Anterior</b>: ' . $patient->worker->nombre . " " .  $patient->worker->apellido . '<br>
        //         <b>Nueva</b>: ' . $worker->nombre . " " . $worker->apellido
        //     ]);
        // }

        $patient->patientOther()->first()->update($request->all());
        $patient->patientInfo()->first()->update($request->all());
        $patient->patientHealth()->first()->update($request->all());
        $patient = $this->patientRepository->update($request->all(), $id);

        if ($request->file('foto_paciente') != null) {
            $patient->foto_paciente = $request->file('foto_paciente')->store('foto_paciente/' . $patient->id);
            $patient->save();
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



        // return redirect(route('patients.edit'));
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

    // public function destroy($id)
    // {
    //     $patient = $this->patientRepository->find($id);

    //     if (empty($patient)) {
    //         Flash::error('Persona no encontrada');
    //         return redirect(route('patients.index'));
    //     }

    //     $this->patientRepository->delete($id);
    //     $patient->patientInfo()->delete();
    //     $patient->patientOther()->delete();
    //     $patient->patientHealth()->delete();
    //     $patient->patientDiagnostics()->delete();
    //     $patient->patientPatologies()->delete();
    //     $patient->patientAllergies()->delete();
    //     $patient->patientCarers()->delete();

    //     Flash::success('Persona eliminada correctamente.');
    //     return redirect(route('patients.index'));
    // }
}
