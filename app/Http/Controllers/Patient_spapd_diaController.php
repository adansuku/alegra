<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePatient_spap_diadRequest;
use App\Repositories\Patient_spapd_diaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Patient_spapd_dia;

class Patient_spapd_diaController extends AppBaseController
{
    /** @var  Patient_spapdRepository */
    private $patientSpapdDiaRepository;

    public function __construct(Patient_spapd_diaRepository $patientSpapdDiaRepo)
    {
        $this->patientSpapdDiaRepository = $patientSpapdDiaRepo;
    }

    public function index()
    {

    }   

    public function create()
    {

    }

    public function store(Request $request)
    {
        try{
            $input = [];
            $postData = $request->all();
            $patient_spapd_id = (int)$request->patient_spapd_id;
            foreach($request->dias as $value){
                if(trim($postData[$value])!=""){
                    $exists = Patient_spapd_dia::where('dia_spapd',$value)->where('patient_spapd_id',$patient_spapd_id);
                    if($exists->count()>0){
                        $exists->delete();
                    }
                    $input = [
                        'dia_spapd' => $value,
                        'fecha_inicio' => $postData[$value],
                        'patient_spapd_id' => $patient_spapd_id
                    ];
                    $patientSpapdDia = $this->patientSpapdDiaRepository->create($input);
                }
            }
            Flash::success('Patient Spapd days saved successfully.');
            $response['success'] = true;
            
        }catch (Exception $e) {
            $response['success'] = false;
        }
        return response()->json($response);
    }

    /**
     * Display the specified Patient_spapd.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
        
    }

    /**
     * Update the specified Patient_spapd in storage.
     *
     * @param int $id
     * @param UpdatePatient_spapdRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        
    }

    /**
     * Remove the specified Patient_spapd from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $patientSpapdDia = $this->patientSpapdDiaRepository->find($id);

        if (empty($patientSpapdDia)) {
            Flash::error('Patient Spapd not found');

            return redirect(route('patientSpapds.index'));
        }

        $this->patientSpapdDiaRepository->delete($id);

        Flash::success('SPAPD Eliminado correctament.');

        return redirect()->to(url()->previous() . '#services');
    }
}
