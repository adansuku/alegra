<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePatient_pastRequest;
use App\Http\Requests\UpdatePatient_pastRequest;
use App\Repositories\Patient_pastRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Patient_pastController extends AppBaseController
{
    /** @var  Patient_pastRepository */
    private $patientPastRepository;

    public function __construct(Patient_pastRepository $patientPastRepo)
    {
        $this->patientPastRepository = $patientPastRepo;
    }

    /**
     * Display a listing of the Patient_past.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $patientPasts = $this->patientPastRepository->all();

        return view('patient_pasts.index')
            ->with('patientPasts', $patientPasts);
    }

    /**
     * Show the form for creating a new Patient_past.
     *
     * @return Response
     */
    public function create()
    {
        return view('patient_pasts.create');
    }

    /**
     * Store a newly created Patient_past in storage.
     *
     * @param CreatePatient_pastRequest $request
     *
     * @return Response
     */
    public function store(CreatePatient_pastRequest $request)
    {
        $input = $request->all();

        $patientPast = $this->patientPastRepository->create($input);

        Flash::success('Patient Past saved successfully.');

        return redirect()->to(url()->route('patients.edit', $patientPast->patient) . '#diagnostic');    

    }

    /**
     * Display the specified Patient_past.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $patientPast = $this->patientPastRepository->find($id);

        if (empty($patientPast)) {
            Flash::error('Patient Past not found');

            return redirect(route('patientPasts.index'));
        }

        return view('patient_pasts.show')->with('patientPast', $patientPast);
    }

    /**
     * Show the form for editing the specified Patient_past.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $patientPast = $this->patientPastRepository->find($id);

        if (empty($patientPast)) {
            Flash::error('Patient Past not found');

            return redirect(route('patientPasts.index'));
        }

        return view('patient_pasts.edit')->with('patientPast', $patientPast);
    }

    /**
     * Update the specified Patient_past in storage.
     *
     * @param int $id
     * @param UpdatePatient_pastRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePatient_pastRequest $request)
    {
        $patientPast = $this->patientPastRepository->find($id);

        if (empty($patientPast)) {
            Flash::error('Patient Past not found');

            return redirect(route('patientPasts.index'));
        }

        $patientPast = $this->patientPastRepository->update($request->all(), $id);

        Flash::success('Patient Past updated successfully.');

        return redirect(route('patientPasts.index'));
    }

    /**
     * Remove the specified Patient_past from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $patientPast = $this->patientPastRepository->find($id);

        if (empty($patientPast)) {
            Flash::error('Patient Past not found');

            return redirect(route('patientPasts.index'));
        }

        $this->patientPastRepository->delete($id);

        Flash::success('Patient Past deleted successfully.');

        return redirect()->to(url()->previous() . '#diagnostic');
    }
}
