<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePatient_Services_DateRequest;
use App\Http\Requests\UpdatePatient_Services_DateRequest;
use App\Repositories\Patient_Services_DateRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Patient_Services_DateController extends AppBaseController
{
    /** @var  Patient_Services_DateRepository */
    private $patientServicesDateRepository;

    public function __construct(Patient_Services_DateRepository $patientServicesDateRepo)
    {
        $this->patientServicesDateRepository = $patientServicesDateRepo;
    }

    /**
     * Display a listing of the Patient_Services_Date.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $patientServicesDates = $this->patientServicesDateRepository->all();

        return view('patient__services__dates.index')
            ->with('patientServicesDates', $patientServicesDates);
    }

    /**
     * Show the form for creating a new Patient_Services_Date.
     *
     * @return Response
     */
    public function create()
    {
        return view('patient__services__dates.create');
    }

    /**
     * Store a newly created Patient_Services_Date in storage.
     *
     * @param CreatePatient_Services_DateRequest $request
     *
     * @return Response
     */
    public function store(CreatePatient_Services_DateRequest $request)
    {
        // dd($request->patient_service_id);
        $input = $request->all();

        $patientServicesDate = $this->patientServicesDateRepository->create($input);

        Flash::success('Patient  Services  Date saved successfully.');

        // return redirect(route('patientServicesDates.index'));
        return redirect()->to(url()->previous() . '#services');
    }

    /**
     * Display the specified Patient_Services_Date.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $patientServicesDate = $this->patientServicesDateRepository->find($id);

        if (empty($patientServicesDate)) {
            Flash::error('Patient  Services  Date not found');

            return redirect(route('patientServicesDates.index'));
        }

        return view('patient__services__dates.show')->with('patientServicesDate', $patientServicesDate);
    }

    /**
     * Show the form for editing the specified Patient_Services_Date.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $patientServicesDate = $this->patientServicesDateRepository->find($id);

        if (empty($patientServicesDate)) {
            Flash::error('Patient  Services  Date not found');

            return redirect(route('patientServicesDates.index'));
        }

        return view('patient__services__dates.edit')->with('patientServicesDate', $patientServicesDate);
    }

    /**
     * Update the specified Patient_Services_Date in storage.
     *
     * @param int $id
     * @param UpdatePatient_Services_DateRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePatient_Services_DateRequest $request)
    {
        $patientServicesDate = $this->patientServicesDateRepository->find($id);

        if (empty($patientServicesDate)) {
            Flash::error('Patient  Services  Date not found');

            return redirect(route('patientServicesDates.index'));
        }

        $patientServicesDate = $this->patientServicesDateRepository->update($request->all(), $id);

        Flash::success('Patient  Services  Date updated successfully.');

        return redirect(route('patientServicesDates.index'));
    }

    /**
     * Remove the specified Patient_Services_Date from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $patientServicesDate = $this->patientServicesDateRepository->find($id);

        if (empty($patientServicesDate)) {
            Flash::error('Patient  Services  Date not found');

            return redirect(route('patientServicesDates.index'));
        }

        $this->patientServicesDateRepository->delete($id);

        Flash::success('Patient  Services  Date deleted successfully.');

        return redirect()->to(url()->previous() . '#services');
    }
}