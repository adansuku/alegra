<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePatient_transportRequest;
use App\Http\Requests\UpdatePatient_transportRequest;
use App\Repositories\Patient_transportRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Patient_transportController extends AppBaseController
{
    /** @var  Patient_transportRepository */
    private $patientTransportRepository;

    public function __construct(Patient_transportRepository $patientTransportRepo)
    {
        $this->patientTransportRepository = $patientTransportRepo;
    }

    /**
     * Display a listing of the Patient_transport.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $patientTransports = $this->patientTransportRepository->all();

        return view('patient_transports.index')
            ->with('patientTransports', $patientTransports);
    }

    /**
     * Show the form for creating a new Patient_transport.
     *
     * @return Response
     */
    public function create()
    {
        return view('patient_transports.create');
    }

    /**
     * Store a newly created Patient_transport in storage.
     *
     * @param CreatePatient_transportRequest $request
     *
     * @return Response
     */
    public function store(CreatePatient_transportRequest $request)
    {
        $input = $request->all();

        $patientTransport = $this->patientTransportRepository->create($input);

        Flash::success('Patient Transport saved successfully.');

        $url= '/patients/' . $patientTransport->patient_id . '/edit#services' ;
        return redirect($url);
    }

    /**
     * Display the specified Patient_transport.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $patientTransport = $this->patientTransportRepository->find($id);

        if (empty($patientTransport)) {
            Flash::error('Patient Transport not found');

            return redirect(route('patientTransports.index'));
        }

        return view('patient_transports.show')->with('patientTransport', $patientTransport);
    }

    /**
     * Show the form for editing the specified Patient_transport.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $patientTransport = $this->patientTransportRepository->find($id);

        if (empty($patientTransport)) {
            Flash::error('Patient Transport not found');

            return redirect(route('patientTransports.index'));
        }

        return view('patient_transports.edit')->with('patientTransport', $patientTransport);
    }

    /**
     * Update the specified Patient_transport in storage.
     *
     * @param int $id
     * @param UpdatePatient_transportRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePatient_transportRequest $request)
    {
        $patientTransport = $this->patientTransportRepository->find($id);

        if (empty($patientTransport)) {
            Flash::error('Patient Transport not found');

            return redirect(route('patientTransports.index'));
        }

        $patientTransport = $this->patientTransportRepository->update($request->all(), $id);

        Flash::success('Patient Transport updated successfully.');

        return redirect(route('patientTransports.index'));
    }

    /**
     * Remove the specified Patient_transport from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $patientTransport = $this->patientTransportRepository->find($id);

        if (empty($patientTransport)) {
            Flash::error('Patient Transport not found');

            return redirect(route('patientTransports.index'));
        }

        $this->patientTransportRepository->delete($id);

        Flash::success('Transporte Eliminado correctamente.');

        return redirect()->to(url()->previous() . '#services');
    }
}
