<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePatient_dateRequest;
use App\Http\Requests\UpdatePatient_dateRequest;
use App\Repositories\Patient_dateRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Patient_dateController extends AppBaseController
{
    /** @var  Patient_dateRepository */
    private $patientDateRepository;

    public function __construct(Patient_dateRepository $patientDateRepo)
    {
        $this->patientDateRepository = $patientDateRepo;
    }

    /**
     * Display a listing of the Patient_date.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $patientDates = $this->patientDateRepository->all();

        return view('patient_dates.index')
            ->with('patientDates', $patientDates);
    }

    /**
     * Show the form for creating a new Patient_date.
     *
     * @return Response
     */
    public function create()
    {
        return view('patient_dates.create');
    }

    /**
     * Store a newly created Patient_date in storage.
     *
     * @param CreatePatient_dateRequest $request
     *
     * @return Response
     */
    public function store(CreatePatient_dateRequest $request)
    {
        $input = $request->all();

        $patientDate = $this->patientDateRepository->create($input);

        Flash::success('Fecha guardada correctamente');
        return redirect()->to(url()->previous() . '#social_info');    
    }

    /**
     * Display the specified Patient_date.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $patientDate = $this->patientDateRepository->find($id);

        if (empty($patientDate)) {
            Flash::error('Patient Date not found');

            return redirect(route('patientDates.index'));
        }

        return view('patient_dates.show')->with('patientDate', $patientDate);
    }

    /**
     * Show the form for editing the specified Patient_date.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $patientDate = $this->patientDateRepository->find($id);

        if (empty($patientDate)) {
            Flash::error('Patient Date not found');

            return redirect(route('patientDates.index'));
        }

        return view('patient_dates.edit')->with('patientDate', $patientDate);
    }

    /**
     * Update the specified Patient_date in storage.
     *
     * @param int $id
     * @param UpdatePatient_dateRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePatient_dateRequest $request)
    {
        $patientDate = $this->patientDateRepository->find($id);

        if (empty($patientDate)) {
            Flash::error('Patient Date not found');

            return redirect(route('patientDates.index'));
        }

        $patientDate = $this->patientDateRepository->update($request->all(), $id);

        Flash::success('Patient Date updated successfully.');

        return redirect(route('patientDates.index'));
    }

    /**
     * Remove the specified Patient_date from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $patientDate = $this->patientDateRepository->find($id);

        if (empty($patientDate)) {
            Flash::error('Patient Date not found');

            return redirect(route('patientDates.index'));
        }

        $this->patientDateRepository->delete($id);

        Flash::success('Patient Date deleted successfully.');

        return redirect(route('patientDates.index'));
    }
}
