<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePatient_historyRequest;
use App\Http\Requests\UpdatePatient_historyRequest;
use App\Repositories\Patient_historyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Patient_historyController extends AppBaseController
{
    /** @var  Patient_historyRepository */
    private $patientHistoryRepository;

    public function __construct(Patient_historyRepository $patientHistoryRepo)
    {
        $this->patientHistoryRepository = $patientHistoryRepo;
    }

    /**
     * Display a listing of the Patient_history.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $patientHistories = $this->patientHistoryRepository->all();

        return redirect()->to(url()->previous() . '#history');  
    }

    /**
     * Show the form for creating a new Patient_history.
     *
     * @return Response
     */
    public function create()
    {
        return view('patient_histories.create');
    }

    /**
     * Store a newly created Patient_history in storage.
     *
     * @param CreatePatient_historyRequest $request
     *
     * @return Response
     */
    public function store(CreatePatient_historyRequest $request)
    {
        //dd($request);
        $input = $request->all();
       

        $patientHistory = $this->patientHistoryRepository->create($input);

        Flash::success('Patient History saved successfully.');

        return redirect(route('patientHistories.index'));
    }

    /**
     * Display the specified Patient_history.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $patientHistory = $this->patientHistoryRepository->find($id);

        if (empty($patientHistory)) {
            Flash::error('Patient History not found');

            return redirect(route('patientHistories.index'));
        }

        return view('patient_histories.show')->with('patientHistory', $patientHistory);
    }

    /**
     * Show the form for editing the specified Patient_history.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $patientHistory = $this->patientHistoryRepository->find($id);

        if (empty($patientHistory)) {
            Flash::error('Patient History not found');

            return redirect(route('patientHistories.index'));
        }

        return view('patients.create.history')->with('patientHistory', $patientHistory);
    }

    /**
     * Update the specified Patient_history in storage.
     *
     * @param int $id
     * @param UpdatePatient_historyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePatient_historyRequest $request)
    {
        $patientHistory = $this->patientHistoryRepository->find($id);

        if (empty($patientHistory)) {
            Flash::error('Patient History not found');

            return redirect(route('patientHistories.index'));
        }

        $patientHistory = $this->patientHistoryRepository->update($request->all(), $id);

        Flash::success('Patient History updated successfully.');

        return redirect()->to(url()->previous() . '#history');
    }

    /**
     * Remove the specified Patient_history from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $patientHistory = $this->patientHistoryRepository->find($id);

        if (empty($patientHistory)) {
            Flash::error('Patient History not found');

            return redirect(route('patientHistories.index'));
        }

        $this->patientHistoryRepository->delete($id);

        Flash::success('Patient History deleted successfully.');

        return redirect(route('patientHistories.index'));
    }
}
