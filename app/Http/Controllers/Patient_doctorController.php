<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePatient_doctorRequest;
use App\Http\Requests\UpdatePatient_doctorRequest;
use App\Repositories\Patient_doctorRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Patient_doctorController extends AppBaseController
{
    /** @var  Patient_doctorRepository */
    private $patientDoctorRepository;

    public function __construct(Patient_doctorRepository $patientDoctorRepo)
    {
        $this->patientDoctorRepository = $patientDoctorRepo;
    }

    /**
     * Display a listing of the Patient_doctor.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $patientDoctors = $this->patientDoctorRepository->all();

        return view('patient_doctors.index')
            ->with('patientDoctors', $patientDoctors);
    }

    /**
     * Show the form for creating a new Patient_doctor.
     *
     * @return Response
     */
    public function create()
    {
        return view('patient_doctors.create');
    }

    /**
     * Store a newly created Patient_doctor in storage.
     *
     * @param CreatePatient_doctorRequest $request
     *
     * @return Response
     */
    public function store(CreatePatient_doctorRequest $request)
    {
        $input = $request->all();

        $patientDoctor = $this->patientDoctorRepository->create($input);

        Flash::success('Patient Doctor saved successfully.');

        return redirect()->to(url()->previous() . '#diagnostic');
    }

    /**
     * Display the specified Patient_doctor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $patientDoctor = $this->patientDoctorRepository->find($id);

        if (empty($patientDoctor)) {
            Flash::error('Patient Doctor not found');

            return redirect(route('patientDoctors.index'));
        }

        return view('patient_doctors.show')->with('patientDoctor', $patientDoctor);
    }

    /**
     * Show the form for editing the specified Patient_doctor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $patientDoctor = $this->patientDoctorRepository->find($id);

        if (empty($patientDoctor)) {
            Flash::error('Patient Doctor not found');

            return redirect(route('patientDoctors.index'));
        }

        return view('patient_doctors.edit')->with('patientDoctor', $patientDoctor);
    }

    /**
     * Update the specified Patient_doctor in storage.
     *
     * @param int $id
     * @param UpdatePatient_doctorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePatient_doctorRequest $request)
    {
        $patientDoctor = $this->patientDoctorRepository->find($id);

        if (empty($patientDoctor)) {
            Flash::error('Patient Doctor not found');

            return redirect(route('patientDoctors.index'));
        }

        $patientDoctor = $this->patientDoctorRepository->update($request->all(), $id);

        Flash::success('Patient Doctor updated successfully.');

        return redirect(route('patientDoctors.index'));
    }

    /**
     * Remove the specified Patient_doctor from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $patientDoctor = $this->patientDoctorRepository->find($id);

        if (empty($patientDoctor)) {
            Flash::error('Patient Doctor not found');

            return redirect(route('patientDoctors.index'));
        }

        $this->patientDoctorRepository->delete($id);

        Flash::success('Patient Doctor deleted successfully.');

        return redirect(route('patientDoctors.index'));
    }
}
