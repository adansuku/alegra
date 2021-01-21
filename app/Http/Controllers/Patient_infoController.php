<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePatient_infoRequest;
use App\Http\Requests\UpdatePatient_infoRequest;
use App\Repositories\Patient_infoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Patient_infoController extends AppBaseController
{
    /** @var  Patient_infoRepository */
    private $patientInfoRepository;

    public function __construct(Patient_infoRepository $patientInfoRepo)
    {
        $this->patientInfoRepository = $patientInfoRepo;
    }

    /**
     * Display a listing of the Patient_info.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $patientInfos = $this->patientInfoRepository->all();

        return view('patient_infos.index')
            ->with('patientInfos', $patientInfos);
    }

    /**
     * Show the form for creating a new Patient_info.
     *
     * @return Response
     */
    public function create()
    {
        return view('patient_infos.create');
    }

    /**
     * Store a newly created Patient_info in storage.
     *
     * @param CreatePatient_infoRequest $request
     *
     * @return Response
     */
    public function store(CreatePatient_infoRequest $request)
    {
        $input = $request->all();

        $patientInfo = $this->patientInfoRepository->create($input);

        Flash::success('Patient Info saved successfully.');

        return redirect(route('patientInfos.index'));
    }

    /**
     * Display the specified Patient_info.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $patientInfo = $this->patientInfoRepository->find($id);

        if (empty($patientInfo)) {
            Flash::error('Patient Info not found');

            return redirect(route('patientInfos.index'));
        }

        return view('patient_infos.show')->with('patientInfo', $patientInfo);
    }

    /**
     * Show the form for editing the specified Patient_info.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $patientInfo = $this->patientInfoRepository->find($id);

        if (empty($patientInfo)) {
            Flash::error('Patient Info not found');

            return redirect(route('patientInfos.index'));
        }

        return view('patient_infos.edit')->with('patientInfo', $patientInfo);
    }

    /**
     * Update the specified Patient_info in storage.
     *
     * @param int $id
     * @param UpdatePatient_infoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePatient_infoRequest $request)
    {
        $patientInfo = $this->patientInfoRepository->find($id);

        if (empty($patientInfo)) {
            Flash::error('Patient Info not found');

            return redirect(route('patientInfos.index'));
        }

        $patientInfo = $this->patientInfoRepository->update($request->all(), $id);

        Flash::success('Patient Info updated successfully.');

        return redirect(route('patientInfos.index'));
    }

    /**
     * Remove the specified Patient_info from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $patientInfo = $this->patientInfoRepository->find($id);

        if (empty($patientInfo)) {
            Flash::error('Patient Info not found');

            return redirect(route('patientInfos.index'));
        }

        $this->patientInfoRepository->delete($id);

        Flash::success('Patient Info deleted successfully.');

        return redirect(route('patientInfos.index'));
    }
}
