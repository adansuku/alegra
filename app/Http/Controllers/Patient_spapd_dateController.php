<?php

namespace App\Http\Controllers;

use App\Repositories\Patient_spapd_dateRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Patient_spapd_date;

class Patient_spapd_dateController extends AppBaseController
{
    /** @var  Patient_spapdRepository */
    private $patientSpapdDateRepository;

    public function __construct(Patient_spapd_dateRepository $patientSpapdDateRepo)
    {
        $this->patientSpapdDateRepository = $patientSpapdDateRepo;
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
            $patient_spapd_id = (int)$postData['patient_spapd_id'];
            Patient_spapd_date::where('patient_spapd_id',$patient_spapd_id)->delete();
            $fecha_entrada = explode("-",$postData['fecha_entrada']);
            $fecha_salida = explode("-",$postData['fecha_salida']);
            $input = [
                'fecha_entrada' => $fecha_entrada[2] . "/" . $fecha_entrada[1] . "/" .$fecha_entrada[0],
                'fecha_salida' => $fecha_salida[2] . "/" . $fecha_salida[1] . "/" .$fecha_salida[0],
                'patient_spapd_id' => $patient_spapd_id
            ];
            $patientSpapdDate = $this->patientSpapdDateRepository->create($input);

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
        $patientSpapdDate = $this->patientSpapdDateRepository->find($id);

        if (empty($patientSpapdDate)) {
            Flash::error('Patient Spapd not found');

            return redirect(route('patientSpapds.index'));
        }

        $this->patientSpapdDateRepository->delete($id);

        Flash::success('SPAPD Eliminado correctament.');

        return redirect()->to(url()->previous() . '#services');
    }
}
