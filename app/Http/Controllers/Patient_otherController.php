<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePatient_otherRequest;
use App\Http\Requests\UpdatePatient_otherRequest;
use App\Repositories\Patient_otherRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Patient_otherController extends AppBaseController
{
    /** @var  Patient_otherRepository */
    private $patientOtherRepository;

    public function __construct(Patient_otherRepository $patientOtherRepo)
    {
        $this->patientOtherRepository = $patientOtherRepo;
    }

    /**
     * Display a listing of the Patient_other.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $patientOthers = $this->patientOtherRepository->all();

        return view('patient_others.index')
            ->with('patientOthers', $patientOthers);
    }

    /**
     * Show the form for creating a new Patient_other.
     *
     * @return Response
     */
    public function create()
    {
        return view('patient_others.create');
    }

    /**
     * Store a newly created Patient_other in storage.
     *
     * @param CreatePatient_otherRequest $request
     *
     * @return Response
     */
    public function store(CreatePatient_otherRequest $request)
    {
        $input = $request->all();

        $patientOther = $this->patientOtherRepository->create($input);

        Flash::success('Patient Other saved successfully.');

        return redirect(route('patientOthers.index'));
    }

    /**
     * Display the specified Patient_other.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $patientOther = $this->patientOtherRepository->find($id);

        if (empty($patientOther)) {
            Flash::error('Patient Other not found');

            return redirect(route('patientOthers.index'));
        }

        return view('patient_others.show')->with('patientOther', $patientOther);
    }

    /**
     * Show the form for editing the specified Patient_other.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $patientOther = $this->patientOtherRepository->find($id);

        if (empty($patientOther)) {
            Flash::error('Patient Other not found');

            return redirect(route('patientOthers.index'));
        }

        return view('patient_others.edit')->with('patientOther', $patientOther);
    }

    /**
     * Update the specified Patient_other in storage.
     *
     * @param int $id
     * @param UpdatePatient_otherRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePatient_otherRequest $request)
    {
        $patientOther = $this->patientOtherRepository->find($id);

        if (empty($patientOther)) {
            Flash::error('Patient Other not found');

            return redirect(route('patientOthers.index'));
        }

        $patientOther = $this->patientOtherRepository->update($request->all(), $id);

        Flash::success('Patient Other updated successfully.');

        return redirect(route('patientOthers.index'));
    }

    /**
     * Remove the specified Patient_other from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $patientOther = $this->patientOtherRepository->find($id);

        if (empty($patientOther)) {
            Flash::error('Patient Other not found');

            return redirect(route('patientOthers.index'));
        }

        $this->patientOtherRepository->delete($id);

        Flash::success('Patient Other deleted successfully.');

        return redirect(route('patientOthers.index'));
    }
}
