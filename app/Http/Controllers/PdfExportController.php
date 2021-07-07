<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Auth;
use Carbon\Carbon;

use App\Repositories\PatientRepository;
use App\Models\Worker_patient_served;
use App\Models\Worker;

class PdfExportController extends AppBaseController{


    public function __construct(PatientRepository $patientRepo)
    {
        set_time_limit(8000000);
        $this->patientRepository = $patientRepo;
        $this->middleware('auth');
    }
    
    public function piaSimple($id){
        set_time_limit(0);
        $patient = $this->patientRepository->find($id);
        $worker = Worker::find($patient->worker_id);

        $worker_patient = Worker_patient_served::where('worker_id',Auth::user()->id )->pluck('patient_id')->toArray();; //130

        if (in_array(Auth::user()->role_id , [1,3]) || in_array($patient->id , $worker_patient) ) {

            if (empty($patient)) {
                Flash::error('Patient not found');
                return redirect(route('patients.index'));
            }
            $fnacimiento = explode(" ",$patient->fecha_nacimiento);
     
            $tmp = explode("-", $fnacimiento[0]);
            $edad = (int)date('Y') - (int)$tmp[0];
            
            $edad = (int)date('Y') > (int)$tmp[1] ? $edad + 1 : $edad;
            $fec_nac = $tmp[2] . "/" . $tmp[1] . "/" . $tmp[0];

            $data = [
                'worker' => $worker,
                'patient' => $patient,
                'age' => $edad,
                'fecha_nac' => $fec_nac
            ];
            
            $pdf = \PDF::loadView('pdf.pia_simple', $data);
            return $pdf->download('piaSimple.pdf');
        } else {
            return redirect(route('patients.index'));
        }


        
    }

}