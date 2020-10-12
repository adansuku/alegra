<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePatient_medicationRequest;
use App\Http\Requests\UpdatePatient_medicationRequest;
use App\Repositories\Patient_medicationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Patient_medicationController extends AppBaseController
{
    /** @var  Patient_medicationRepository */
    private $patientMedicationRepository;

    public function __construct(Patient_medicationRepository $patientMedicationRepo)
    {
        $this->patientMedicationRepository = $patientMedicationRepo;
    }

    /**
     * Display a listing of the Patient_medication.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $patientMedications = $this->patientMedicationRepository->all();

        return view('patient_medications.index')
            ->with('patientMedications', $patientMedications);
    }

    /**
     * Show the form for creating a new Patient_medication.
     *
     * @return Response
     */
    public function create()
    {
        return view('patient_medications.create');
    }

    /**
     * Store a newly created Patient_medication in storage.
     *
     * @param CreatePatient_medicationRequest $request
     *
     * @return Response
     */
    public function store(CreatePatient_medicationRequest $request)
    {
    //    dd($request);
        $input = $request->all();
        $patientMedication = $this->patientMedicationRepository->create($input);
        
        Flash::success('Patient Medication saved successfully.');
        return redirect()->to(url()->route('patients.edit', $patientMedication->patient) . '#diagnostic');    
        // return redirect(route('patientMedications.index'));
    }

    /**
     * Display the specified Patient_medication.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $patientMedication = $this->patientMedicationRepository->find($id);

        if (empty($patientMedication)) {
            Flash::error('Patient Medication not found');

            return redirect(route('patientMedications.index'));
        }

        return view('patient_medications.show')->with('patientMedication', $patientMedication);
    }

    /**
     * Show the form for editing the specified Patient_medication.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $patientMedication = $this->patientMedicationRepository->find($id);

        if (empty($patientMedication)) {
            Flash::error('Patient Medication not found');

            return redirect(route('patientMedications.index'));
        }

        return view('patient_medications.edit')->with('patientMedication', $patientMedication);
    }

    /**
     * Update the specified Patient_medication in storage.
     *
     * @param int $id
     * @param UpdatePatient_medicationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePatient_medicationRequest $request)
    {
        $patientMedication = $this->patientMedicationRepository->find($id);

        if (empty($patientMedication)) {
            Flash::error('Patient Medication not found');

            return redirect(route('patientMedications.index'));
        }

        $patientMedication = $this->patientMedicationRepository->update($request->all(), $id);

        Flash::success('Patient Medication updated successfully.');

        return redirect(route('patientMedications.index'));
    }

    /**
     * Remove the specified Patient_medication from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $patientMedication = $this->patientMedicationRepository->find($id);

        if (empty($patientMedication)) {
            Flash::error('Patient Medication not found');

            return redirect(route('patientMedications.index'));
        }

        $this->patientMedicationRepository->delete($id);

        Flash::success('Patient Medication deleted successfully.');

        return redirect()->to(url()->previous() . '#diagnostic');
    }
}
