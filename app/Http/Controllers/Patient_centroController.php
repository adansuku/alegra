<?php

namespace App\Http\Controllers;


use App\Http\Requests\CreatePatient_centroRequest;
use App\Http\Requests\UpdatePatient_centroRequest;
use App\Repositories\Patient_centroRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Patient_centroController extends AppBaseController
{
    /** @var  Patient_centroRepository */
    private $patientCentroRepository;

    public function __construct(Patient_centroRepository $patientCentroRepo)
    {
        $this->patientCentroRepository = $patientCentroRepo;
    }

    /**
     * Display a listing of the Patient_centro.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $patientCentros = $this->patientCentroRepository->all();

        return view('patient_centros.index')->with('patientCentros', $patientCentros);
    }

    /**
     * Show the form for creating a new Patient_centro.
     *
     * @return Response
     */
    public function create()
    {
        return view('patient_centros.create');
    }

    /**
     * Store a newly created Patient_centro in storage.
     *
     * @param CreatePatient_centroRequest $request
     *
     * @return Response
     */
    public function store(CreatePatient_centroRequest $request)
    {
        $input = $request->all();

        $patientCentro = $this->patientCentroRepository->create($input);

        Flash::success('Patient Centro saved successfully.');

        $url= '/patients/' . $patientCentro->patient_id . '/edit#services' ;
        return redirect($url);
    }

    /**
     * Display the specified Patient_centro.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $patientCentro = $this->patientCentroRepository->find($id);

        if (empty($patientCentro)) {
            Flash::error('Patient Centro not found');

            return redirect(route('patientCentro.index'));
        }

        return view('patient_centros.show')->with('patientCentro', $patientCentro);
    }

    /**
     * Show the form for editing the specified Patient_centro.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $patientCentro = $this->patientCentroRepository->find($id);

        if (empty($patientCentro)) {
            Flash::error('Patient Centro not found');

            return redirect(route('patientCentros.index'));
        }

        return view('patient_centros.edit')->with('patientCentro', $patientCentro);
    }

    /**
     * Update the specified Patient_centro in storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function update($id, UpdatePatient_centroRequest $request)
    {
        $patientCentro = $this->patientCentroRepository->find($id);

        if (empty($patientCentro)) {
            Flash::error('Patient Centro not found');

            return redirect(route('patientCentro.index'));
        }

        $patientCentro = $this->patientCentroRepository->update($request->all(), $id);

        Flash::success('Patient Centro updated successfully.');

        return redirect(route('patientCentro.index'));
    }

    /**
     * Remove the specified Patient_centro from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $patientCentro = $this->patientCentroRepository->find($id);

        if (empty($patientCentro)) {
            Flash::error('Patient Centro not found');

            return redirect(route('patientCentro.index'));
        }

        $this->patientCentroRepository->delete($id);

        Flash::success('Centro Eliminado correctamente.');

        return redirect()->to(url()->previous() . '#services');
    }
}