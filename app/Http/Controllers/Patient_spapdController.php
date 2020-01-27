<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePatient_spapdRequest;
use App\Http\Requests\UpdatePatient_spapdRequest;
use App\Repositories\Patient_spapdRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Patient_spapdController extends AppBaseController
{
    /** @var  Patient_spapdRepository */
    private $patientSpapdRepository;

    public function __construct(Patient_spapdRepository $patientSpapdRepo)
    {
        $this->patientSpapdRepository = $patientSpapdRepo;
    }

    /**
     * Display a listing of the Patient_spapd.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $patientSpapds = $this->patientSpapdRepository->all();

        return view('patient_spapds.index')
            ->with('patientSpapds', $patientSpapds);
    }

    /**
     * Show the form for creating a new Patient_spapd.
     *
     * @return Response
     */
    public function create()
    {
        return view('patient_spapds.create');
    }

    /**
     * Store a newly created Patient_spapd in storage.
     *
     * @param CreatePatient_spapdRequest $request
     *
     * @return Response
     */
    public function store(CreatePatient_spapdRequest $request)
    {
        $input = $request->all();
        //dd($input);

        $patientSpapd = $this->patientSpapdRepository->create($input);

        Flash::success('Patient Spapd saved successfully.');

        $url= '/patients/' . $patientSpapd->patient_id . '/edit#services' ;
        return redirect($url);
    }

    /**
     * Display the specified Patient_spapd.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $patientSpapd = $this->patientSpapdRepository->find($id);

        if (empty($patientSpapd)) {
            Flash::error('Patient Spapd not found');

            return redirect(route('patientSpapds.index'));
        }

        return view('patient_spapds.show')->with('patientSpapd', $patientSpapd);
    }

    /**
     * Show the form for editing the specified Patient_spapd.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $patientSpapd = $this->patientSpapdRepository->find($id);

        if (empty($patientSpapd)) {
            Flash::error('Patient Spapd not found');

            return redirect(route('patientSpapds.index'));
        }

        return view('patient_spapds.edit')->with('patientSpapd', $patientSpapd);
    }

    /**
     * Update the specified Patient_spapd in storage.
     *
     * @param int $id
     * @param UpdatePatient_spapdRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePatient_spapdRequest $request)
    {
        $patientSpapd = $this->patientSpapdRepository->find($id);

        if (empty($patientSpapd)) {
            Flash::error('Patient Spapd not found');

            return redirect(route('patientSpapds.index'));
        }

        $patientSpapd = $this->patientSpapdRepository->update($request->all(), $id);

        Flash::success('Patient Spapd updated successfully.');

        return redirect(route('patientSpapds.index'));
    }

    /**
     * Remove the specified Patient_spapd from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $patientSpapd = $this->patientSpapdRepository->find($id);

        if (empty($patientSpapd)) {
            Flash::error('Patient Spapd not found');

            return redirect(route('patientSpapds.index'));
        }

        $this->patientSpapdRepository->delete($id);

        Flash::success('SPAPD Eliminado correctament.');

        return redirect()->to(url()->previous() . '#services');
    }
}
