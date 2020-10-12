<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePatient_piaRequest;
use App\Http\Requests\UpdatePatient_piaRequest;
use App\Repositories\Patient_piaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Patient;
use App\Models\Patient_pia;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;


class Patient_piaController extends AppBaseController
{
    /** @var  Patient_piaRepository */
    private $patientPiaRepository;

    public function __construct(Patient_piaRepository $patientPiaRepo)
    {
        $this->patientPiaRepository = $patientPiaRepo;
    }

    /**
     * Display a listing of the Patient_pia.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $patientPias = $this->patientPiaRepository->all();

        return view('patient_pias.index')
            ->with('patientPias', $patientPias);
    }

    /**
     * Show the form for creating a new Patient_pia.
     *
     * @return Response
     */
    public function create()
    {
        return view('patient_pias.create');
    }

    /**
     * Store a newly created Patient_pia in storage.
     *
     * @param CreatePatient_piaRequest $request
     *
     * @return Response
     */
    public function store(CreatePatient_piaRequest $request)
    {
     
        $today = Carbon::parse($request->fecha_alta_paciente);

        $patientPia = new Patient_pia;
    
        $patientPia->create([
            'fecha_limite' => $today->addMonths(3),
            'fecha_Real' => '',
            'tipo_pia' => 'Inicial',
            'url_pia' => '',
            'obs_pia' => $request->obs_pia,
            'patient_id'=> $request->id,
        ]);

         $patientPia->create([
            'fecha_limite' => $today->addMonths(6),
            'fecha_Real' => '',
            'tipo_pia' => 'Seguimiento',
            'url_pia' => '',
            'obs_pia' => $request->obs_pia,
            'patient_id'=> $request->id,
        ]);

        if ($patientPia->url_pia != null) {
            $patientPia->url_pia = $request->file('url_pia')->store($patientPia->patient_id . '/patient_documents/pia_documents_');
            $patientPia->fecha_real = date('d-m-Y');
        }

        $patientPia->update();

        Flash::success('Pia guardado correctamente');
        return redirect()->to(url()->route('patients.edit', $request->id) . '#pias');
        
       
 
    }




    public function pia_seguimiento(CreatePatient_piaRequest $request)
    {
      
        
        if ($request->tipo_pia == 'Seguimiento') {
            $patientPiaLast = Patient_pia::where('patient_id', $request->id)
                ->orderBy('created_at', 'desc')->first();

            $today = Carbon::parse($patientPiaLast->fecha_limite);

            $patientPia =  $this->patientPiaRepository->create([
                'fecha_limite' => $today->addMonths(6),
                'fecha_Real' => '',
                'tipo_pia' => 'Seguimiento',
                'url_pia' => $request->url_pia,
                'obs_pia' => $request->obs_pia,
                'patient_id' => $request->id,
            ]);

            if ($request->url_pia != null) {
                $patientPia->url_pia = $request->file('url_pia')->store($request->id .'/patient_documents/pia_documents_');
                $patientPia->update();
            }
        }

        if ($request->tipo_pia == 'Inicial') { 
            $this->store($request);
        }

        Flash::success('Pia guardado correctamente');
        return redirect()->to(url()->route('patients.edit', $request->id) . '#pias');
    }



    public function show($id)
    {
        $patientPia = $this->patientPiaRepository->find($id);

        if (empty($patientPia)) {
            Flash::error('Patient Pia not found');
            return redirect(route('patientPias.index'));
        }

        return view('patient_pias.show')->with('patientPia', $patientPia);
    }

    public function edit($id)
    {
        $patientPia = $this->patientPiaRepository->find($id);

        if (empty($patientPia)) {
            Flash::error('Patient Pia not found');

            return redirect(route('patientPias.index'));
        }

        return view('patient_pias.edit')->with('patientPia', $patientPia);
    }

    /**
     * Update the specified Patient_pia in storage.
     *
     * @param int $id
     * @param UpdatePatient_piaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePatient_piaRequest $request)
    {
        $patientPia = $this->patientPiaRepository->find($id);

        //dd($patientPia->pia_url);

        if (empty($patientPia)) {
            Flash::error('Patient Pia not found');
            return redirect(route('patientPias.index'));
        }

        $patientPia = $this->patientPiaRepository->update($request->all(), $id);


        if ($request->url_pia != "" || $request->url_pia != null) {
            $patientPia->url_pia = $request->file('url_pia')->store($patientPia->patient_id .'/patient_documents/pia_documents_');
        }

        if ($request->url_recepcion != "" || $request->url_recepcion != null) {
            $patientPia->url_recepcion = $request->file('url_recepcion')->store($patientPia->patient_id .'/patient_documents/pia_documents_');
        }

    

        $today = Carbon::now();
        $patientPia->fecha_real = $today->toDateString();
        $patientPia->update();

        Flash::success('Pia actulizado correctamente.');
        return redirect()->to(url()->route('patients.edit', $patientPia->patient) . '#pias');
    }

    /**
     * Remove the specified Patient_pia from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $patientPia = $this->patientPiaRepository->find($id);
        
        $file = "";
        
        if ($patientPia->url_pia != "" || $patientPia->url_pia != null) {
	    	$file =  public_path('storage/') . $patientPia->url_pia;
	    }   
	    
	    if ($patientPia->url_recepcion != "" || $patientPia->url_recepcion != null) {
		    $file =  public_path('storage/') . $patientPia->url_recepcion;
		}
        
        if($file != ""){
            unlink($file);
            Storage::delete($file);
        }     


        if (empty($patientPia)) {
            Flash::error('Patient Pia not found');

            return redirect(route('patientPias.index'));
        }

        $this->patientPiaRepository->delete($id);

        Flash::success('Patient Pia deleted successfully.');

        return redirect()->to(url()->route('patients.edit', $patientPia->patient) . '#pias');
        
        
        
        
        
    }
}
