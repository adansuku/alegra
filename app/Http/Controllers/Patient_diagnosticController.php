<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePatient_diagnosticRequest;
use App\Http\Requests\UpdatePatient_diagnosticRequest;
use App\Repositories\Patient_diagnosticRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Patient_diagnosticController extends AppBaseController
{
    /** @var  Patient_diagnosticRepository */
    private $patientDiagnosticRepository;

    public function __construct(Patient_diagnosticRepository $patientDiagnosticRepo)
    {
        $this->patientDiagnosticRepository = $patientDiagnosticRepo;
    }

    /**
     * Display a listing of the Patient_diagnostic.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $patientDiagnostics = $this->patientDiagnosticRepository->all();

        return view('patient.index')
            ->with('patientDiagnostics', $patientDiagnostics);
    }

    /**
     * Show the form for creating a new Patient_diagnostic.
     *
     * @return Response
     */
    public function create()
    {
        return view('patient_diagnostics.create');
    }

    /**
     * Store a newly created Patient_diagnostic in storage.
     *
     * @param CreatePatient_diagnosticRequest $request
     *
     * @return Response
     */
    public function store(CreatePatient_diagnosticRequest $request)
    {
        $input = $request->all();

        $patientDiagnostic = $this->patientDiagnosticRepository->create($input);

        Flash::success('Patient Diagnostic saved successfully.');

        return redirect()->to(url()->previous() . '#diagnostic');
    }

    /**
     * Display the specified Patient_diagnostic.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $patientDiagnostic = $this->patientDiagnosticRepository->find($id);

        if (empty($patientDiagnostic)) {
            Flash::error('Patient Diagnostic not found');
            return redirect(route('patientDiagnostics.index'));
        }

        return view('patient_diagnostics.show')->with('patientDiagnostic', $patientDiagnostic);
    }

    /**
     * Show the form for editing the specified Patient_diagnostic.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $patientDiagnostic = $this->patientDiagnosticRepository->find($id);

        if (empty($patientDiagnostic)) {
            Flash::error('Patient Diagnostic not found');

            return redirect(route('patientDiagnostics.index'));
        }

        return view('patient_diagnostics.edit')->with('patientDiagnostic', $patientDiagnostic);
    }

    /**
     * Update the specified Patient_diagnostic in storage.
     *
     * @param int $id
     * @param UpdatePatient_diagnosticRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePatient_diagnosticRequest $request)
    {
        $patientDiagnostic = $this->patientDiagnosticRepository->find($id);

        if (empty($patientDiagnostic)) {
            Flash::error('Patient Diagnostic not found');

            return redirect(route('patientDiagnostics.index'));
        }

        $patientDiagnostic = $this->patientDiagnosticRepository->update($request->all(), $id);

        Flash::success('Patient Diagnostic updated successfully.');

        return redirect(route('patientDiagnostics.index'));
    }

    /**
     * Remove the specified Patient_diagnostic from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $patientDiagnostic = $this->patientDiagnosticRepository->find($id);

        if (empty($patientDiagnostic)) {
            Flash::error('Patient Diagnostic not found');

            return redirect(route('patientDiagnostics.index'));
        }

        $this->patientDiagnosticRepository->delete($id);

        Flash::success('Patient Diagnostic deleted successfully.');

        // return redirect(route('patientDiagnostics.index'));
        return redirect()->to(url()->previous() . '#diagnostic');
    }
}
