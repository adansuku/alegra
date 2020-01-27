<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePatient_healthRequest;
use App\Http\Requests\UpdatePatient_healthRequest;
use App\Repositories\Patient_healthRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Patient_healthController extends AppBaseController
{
    /** @var  Patient_healthRepository */
    private $patientHealthRepository;

    public function __construct(Patient_healthRepository $patientHealthRepo)
    {
        $this->patientHealthRepository = $patientHealthRepo;
    }

    /**
     * Display a listing of the Patient_health.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $patientHealths = $this->patientHealthRepository->all();

        return view('patient_healths.index')
            ->with('patientHealths', $patientHealths);
    }

    /**
     * Show the form for creating a new Patient_health.
     *
     * @return Response
     */
    public function create()
    {
        return view('patient_healths.create');
    }

    /**
     * Store a newly created Patient_health in storage.
     *
     * @param CreatePatient_healthRequest $request
     *
     * @return Response
     */
    public function store(CreatePatient_healthRequest $request)
    {
        $input = $request->all();

        $patientHealth = $this->patientHealthRepository->create($input);

        Flash::success('Patient Health saved successfully.');

        return redirect(route('patientHealths.index'));
    }

    /**
     * Display the specified Patient_health.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $patientHealth = $this->patientHealthRepository->find($id);

        if (empty($patientHealth)) {
            Flash::error('Patient Health not found');

            return redirect(route('patientHealths.index'));
        }

        return view('patient_healths.show')->with('patientHealth', $patientHealth);
    }

    /**
     * Show the form for editing the specified Patient_health.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $patientHealth = $this->patientHealthRepository->find($id);

        if (empty($patientHealth)) {
            Flash::error('Patient Health not found');

            return redirect(route('patientHealths.index'));
        }

        return view('patient_healths.edit')->with('patientHealth', $patientHealth);
    }

    /**
     * Update the specified Patient_health in storage.
     *
     * @param int $id
     * @param UpdatePatient_healthRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePatient_healthRequest $request)
    {
        $patientHealth = $this->patientHealthRepository->find($id);

        if (empty($patientHealth)) {
            Flash::error('Patient Health not found');

            return redirect(route('patientHealths.index'));
        }

        $patientHealth = $this->patientHealthRepository->update($request->all(), $id);

        Flash::success('Patient Health updated successfully.');

        return redirect(route('patientHealths.index'));
    }

    /**
     * Remove the specified Patient_health from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $patientHealth = $this->patientHealthRepository->find($id);

        if (empty($patientHealth)) {
            Flash::error('Patient Health not found');

            return redirect(route('patientHealths.index'));
        }

        $this->patientHealthRepository->delete($id);

        Flash::success('Patient Health deleted successfully.');

        return redirect(route('patientHealths.index'));
    }
}
