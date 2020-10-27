<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePatient_allergyRequest;
use App\Http\Requests\UpdatePatient_allergyRequest;
use App\Repositories\Patient_allergyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Patient;
use Flash;
use Response;

class Patient_allergyController extends AppBaseController
{
    /** @var  Patient_allergyRepository */
    private $patientAllergyRepository;

    public function __construct(Patient_allergyRepository $patientAllergyRepo)
    {
        $this->patientAllergyRepository = $patientAllergyRepo;
    }

    /**
     * Display a listing of the Patient_allergy.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $patientAllergies = $this->patientAllergyRepository->all();

        return view('patient_allergies.index')
            ->with('patientAllergies', $patientAllergies);
    }

    /**
     * Show the form for creating a new Patient_allergy.
     *
     * @return Response
     */
    public function create()
    {
        return view('patient_allergies.create');
    }

    /**
     * Store a newly created Patient_allergy in storage.
     *
     * @param CreatePatient_allergyRequest $request
     *
     * @return Response
     */
    public function store(CreatePatient_allergyRequest $request)
    {
        $input = $request->all();

        $patientAllergy = $this->patientAllergyRepository->create($input);

        Flash::success('Patient Allergy saved successfully.');

        return redirect()->to(url()->previous() . '#diagnostic');
    }

    /**
     * Display the specified Patient_allergy.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $patientAllergy = $this->patientAllergyRepository->find($id);

        if (empty($patientAllergy)) {
            Flash::error('Patient Allergy not found');

            return redirect(route('patientAllergies.index'));
        }

        return view('patient_allergies.show')->with('patientAllergy', $patientAllergy);
    }

    /**
     * Show the form for editing the specified Patient_allergy.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $patientAllergy = $this->patientAllergyRepository->find($id);

        if (empty($patientAllergy)) {
            Flash::error('Patient Allergy not found');

            return redirect(route('patientAllergies.index'));
        }

        return view('patient_allergies.edit')->with('patientAllergy', $patientAllergy);
    }

    /**
     * Update the specified Patient_allergy in storage.
     *
     * @param int $id
     * @param UpdatePatient_allergyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePatient_allergyRequest $request)
    {
        $patientAllergy = $this->patientAllergyRepository->find($id);

        if (empty($patientAllergy)) {
            Flash::error('Patient Allergy not found');

            return redirect(route('patientAllergies.index'));
        }

        $patientAllergy = $this->patientAllergyRepository->update($request->all(), $id);

        Flash::success('Patient Allergy updated successfully.');

        return redirect(route('patientAllergies.index'));
    }

    /**
     * Remove the specified Patient_allergy from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $patientAllergy = $this->patientAllergyRepository->find($id);

        if (empty($patientAllergy)) {
            Flash::error('Patient Allergy not found');

            return redirect(route('patientAllergies.index'));
        }

        $this->patientAllergyRepository->delete($id);

        Flash::success('Patient Allergy deleted successfully.');

        // return redirect(route('patientAllergies.index'));
        return redirect()->to(url()->previous() . '#diagnostic');
    }
}
