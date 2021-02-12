<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePatient_historyRequest;
use App\Http\Requests\UpdatePatient_historyRequest;
use App\Repositories\Patient_historyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Patient;
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
        return view('patients.index');
        //return redirect()->to(url()->previous() . '#history');  
    }

    /**
     * Display a listing of the Patient_history wid patient id.
     *
     * @param Request $request
     *
     * @return Response
     */

    public function get_all_history_by_patient(Request $request)
    {

        $patient = Patient::find($request->id);
        
        // $patientHistory = $this::where('patient_id', Auth::user()->id)->get();
        // $patientHistory = $this->patientHistoryRepository->find($request->id);
        return view('patient_histories.show')->with('patient', $patient) ;

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
        $input = $request->all();
        $patientHistory = $this->patientHistoryRepository->create($input);

        Flash::success('Patient History saved successfully.');

        // $html = view('patients.index', compact('view'))->render();
        //return response()->json(compact('html'));
        return redirect()->to('patientHistory/' . $patientHistory->patient_id);

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

            return redirect(route('patient_histories.index'));
        }


        return view('patient_histories.edit')->with('patientHistory', $patientHistory);
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

        return redirect()->to('patients/' . $patientHistory->patient_id . '/edit/#history');
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
        Flash::success('Historial borrado correctamente.');
        return redirect(route('patientHistories.index'));
    }
}