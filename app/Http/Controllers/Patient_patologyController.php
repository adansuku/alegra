<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePatient_patologyRequest;
use App\Http\Requests\UpdatePatient_patologyRequest;
use App\Repositories\Patient_patologyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Patient;
use Flash;
use Response;

class Patient_patologyController extends AppBaseController
{
    /** @var  Patient_patologyRepository */
    private $patientPatologyRepository;

    public function __construct(Patient_patologyRepository $patientPatologyRepo)
    {
        $this->patientPatologyRepository = $patientPatologyRepo;
    }

    /**
     * Display a listing of the Patient_patology.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $patientPatologies = $this->patientPatologyRepository->all();

        return view('patient_patologies.index')
            ->with('patientPatologies', $patientPatologies);
    }

    /**
     * Show the form for creating a new Patient_patology.
     *
     * @return Response
     */
    public function create()
    {
        return view('patient_patologies.create');
    }

    /**
     * Store a newly created Patient_patology in storage.
     *
     * @param CreatePatient_patologyRequest $request
     *
     * @return Response
     */
    public function store(CreatePatient_patologyRequest $request)
    {
        $input = $request->all();

        $patientPatology = $this->patientPatologyRepository->create($input);

        Flash::success('Patient Patology saved successfully.');

        return redirect()->to(url()->previous() . '#diagnostic');
    }

    /**
     * Display the specified Patient_patology.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $patientPatology = $this->patientPatologyRepository->find($id);

        if (empty($patientPatology)) {
            Flash::error('Patient Patology not found');

            return redirect(route('patientPatologies.index'));
        }

        return view('patient_patologies.show')->with('patientPatology', $patientPatology);
    }

    /**
     * Show the form for editing the specified Patient_patology.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $patientPatology = $this->patientPatologyRepository->find($id);

        if (empty($patientPatology)) {
            Flash::error('Patient Patology not found');

            return redirect(route('patientPatologies.index'));
        }

        return view('patient_patologies.edit')->with('patientPatology', $patientPatology);
    }

    /**
     * Update the specified Patient_patology in storage.
     *
     * @param int $id
     * @param UpdatePatient_patologyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePatient_patologyRequest $request)
    {
        $patientPatology = $this->patientPatologyRepository->find($id);

        if (empty($patientPatology)) {
            Flash::error('Patient Patology not found');

            return redirect(route('patientPatologies.index'));
        }

        $patientPatology = $this->patientPatologyRepository->update($request->all(), $id);

        Flash::success('Patient Patology updated successfully.');

        return redirect(route('patientPatologies.index'));
    }

    /**
     * Remove the specified Patient_patology from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $patientPatology = $this->patientPatologyRepository->find($id);

        if (empty($patientPatology)) {
            Flash::error('Patient Patology not found');

            return redirect(route('patientPatologies.index'));
        }

        $this->patientPatologyRepository->delete($id);

        Flash::success('Patient Patology deleted successfully.');

        // return redirect(route('patientPatologies.index'));
        return redirect()->to(url()->previous() . '#diagnostic');
    }
}
