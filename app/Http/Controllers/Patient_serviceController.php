<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePatient_serviceRequest;
use App\Http\Requests\UpdatePatient_serviceRequest;
use App\Repositories\Patient_serviceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Worker;
use Flash;
use Response;

class Patient_serviceController extends AppBaseController
{
    /** @var  Patient_serviceRepository */
    private $patientServiceRepository;

    public function __construct(Patient_serviceRepository $patientServiceRepo)
    {
        $this->patientServiceRepository = $patientServiceRepo;
    }

    /**
     * Display a listing of the Patient_service.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {

        $patientServices = $this->patientServiceRepository->all();

        return view('patient_services.index')
            ->with('patientServices', $patientServices);
    }

    /**
     * Show the form for creating a new Patient_service.
     *
     * @return Response
     */
    public function create()
    {
        return view('patient_services.create');
    }

    /**
     * Store a newly created Patient_service in storage.
     *
     * @param CreatePatient_serviceRequest $request
     *
     * @return Response
     */
    public function store(CreatePatient_serviceRequest $request)

    {

        $input = $request->all();

        $patientService = $this->patientServiceRepository->create($input);

        Flash::success('Patient Service saved successfully.');

        return redirect()->to(url()->previous() . '#services');
    }

    /**
     * Display the specified Patient_service.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $patientService = $this->patientServiceRepository->find($id);

        if (empty($patientService)) {
            Flash::error('Patient Service not found');

            return redirect(route('patientServices.index'));
        }

        return view('patient_services.show')->with('patientService', $patientService);
    }

    /**
     * Show the form for editing the specified Patient_service.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $patientService = $this->patientServiceRepository->find($id);

        $workers = Worker::all();

        if (empty($patientService)) {
            Flash::error('Patient Service not found');

            return redirect(route('patientServices.index'));
        }

        return view('patient_services.edit')
            ->with('patientService', $patientService)
            ->with('workers', $workers);
    }

    /**
     * Update the specified Patient_service in storage.
     *
     * @param int $id
     * @param UpdatePatient_serviceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePatient_serviceRequest $request)
    {

        $patientService = $this->patientServiceRepository->find($id);

        if (empty($patientService)) {
            Flash::error('Patient Service not found');

            return redirect(route('patientServices.index'));
        }

        $patientService = $this->patientServiceRepository->update($request->all(), $id);

        Flash::success('Patient Service updated successfully.');

        return redirect()->to('patients/' . $patientService->patient->id . '/edit#services');
    }

    /**
     * Remove the specified Patient_service from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $patientService = $this->patientServiceRepository->find($id);
        $patientService->serviceDates()->delete();

        if (empty($patientService)) {
            Flash::error('Patient Service not found');

            return redirect(route('patientServices.index'));
        }

        $this->patientServiceRepository->delete($id);

        Flash::success('Patient Service deleted successfully.');

        return redirect()->to(url()->previous() . '#services');
    }
}