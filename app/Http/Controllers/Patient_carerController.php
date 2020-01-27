<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePatient_carerRequest;
use App\Http\Requests\UpdatePatient_carerRequest;
use App\Repositories\Patient_carerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Patient_carerController extends AppBaseController
{
    /** @var  Patient_carerRepository */
    private $patientCarerRepository;

    public function __construct(Patient_carerRepository $patientCarerRepo)
    {
        $this->patientCarerRepository = $patientCarerRepo;
    }

    /**
     * Display a listing of the Patient_carer.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $patientCarers = $this->patientCarerRepository->all();

        return view('patient_carers.index')
            ->with('patientCarers', $patientCarers);
    }

    /**
     * Show the form for creating a new Patient_carer.
     *
     * @return Response
     */
    public function create()
    {
        return view('patient_carers.create');
    }

    /**
     * Store a newly created Patient_carer in storage.
     *
     * @param CreatePatient_carerRequest $request
     *
     * @return Response
     */
    public function store(CreatePatient_carerRequest $request)
    {
        $input = $request->all();

        $patientCarer = $this->patientCarerRepository->create($input);

        Flash::success('Patient Carer saved successfully.');

        return redirect()->to(url()->route('patients.edit', $patientCarer->patient) . '#carer');    
    }

    /**
     * Display the specified Patient_carer.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $patientCarer = $this->patientCarerRepository->find($id);

        if (empty($patientCarer)) {
            Flash::error('Patient Carer not found');

            return redirect(route('patientCarers.index'));
        }

        return view('patient_carers.show')->with('patientCarer', $patientCarer);
    }

    /**
     * Show the form for editing the specified Patient_carer.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $patientCarer = $this->patientCarerRepository->find($id);

        if (empty($patientCarer)) {
            Flash::error('Patient Carer not found');

            return redirect(route('patientCarers.index'));
        }

        return view('patient_carers.edit')->with('patientCarer', $patientCarer);
    }

    /**
     * Update the specified Patient_carer in storage.
     *
     * @param int $id
     * @param UpdatePatient_carerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePatient_carerRequest $request)
    {
        $patientCarer = $this->patientCarerRepository->find($id);

        if (empty($patientCarer)) {
            Flash::error('Patient Carer not found');

            return redirect(route('patientCarers.index'));
        }

        $patientCarer = $this->patientCarerRepository->update($request->all(), $id);

        Flash::success('Patient Carer updated successfully.');

        return redirect()->to(url()->route('patients.edit', $patientCarer->patient) . '#carer');    
    }

    /**
     * Remove the specified Patient_carer from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $patientCarer = $this->patientCarerRepository->find($id);

        if (empty($patientCarer)) {
            Flash::error('Patient Carer not found');

            return redirect(route('patientCarers.index'));
        }

        $this->patientCarerRepository->delete($id);

        Flash::success('Patient Carer deleted successfully.');

        return redirect()->to(url()->route('patients.edit', $patientCarer->patient) . '#carer'); 
    }
}
