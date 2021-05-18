<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePatient_centro_diadRequest;
use App\Repositories\Patient_centro_diaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Patient_centro_dia;

class Patient_centro_diaController extends AppBaseController
{
    /** @var  Patient_spapdRepository */
    private $patientCentroDiaRepository;

    public function __construct(Patient_centro_diaRepository $patientCentroDiaRepo)
    {
        $this->patientCentroDiaRepository = $patientCentroDiaRepo;
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
            $patient_centro_id = (int)$request->patient_centro_id;
            foreach($request->dias as $key=> $value){
                
                $exists = Patient_centro_dia::where('dia_centro',$value)->where('patient_centro_id',$patient_centro_id);
                if($exists->count()>0){
                    $exists->delete();
                }
                $input = [
                    'dia_centro' => $value,
                    'horario' => $postData['horario_centro'][$key],
                    'patient_centro_id' => $patient_centro_id,
                ];
                $patientCentroDia = $this->patientCentroDiaRepository->create($input);
                
            }
            Flash::success('Patient Center days saved successfully.');
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
        $patientCentroDia = $this->patientCentroDiaRepository->find($id);

        if (empty($patientCentroDia)) {
            Flash::error('Patient Center not found');

            return redirect(route('patientCentro.index'));
        }

        $this->patientCentroDiaRepository->delete($id);

        Flash::success('Centro Eliminado correctamente.');

        return redirect()->to(url()->previous() . '#services');
    }
}
