<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePatient_documentRequest;
use App\Http\Requests\UpdatePatient_documentRequest;
use App\Repositories\Patient_documentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use File;
use Response;
use Illuminate\Support\Facades\Storage;

class Patient_documentController extends AppBaseController
{
    /** @var  Patient_documentRepository */
    private $patientDocumentRepository;

    public function __construct(Patient_documentRepository $patientDocumentRepo)
    {
        $this->patientDocumentRepository = $patientDocumentRepo;
    }

    /**
     * Display a listing of the Patient_document.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $patientDocuments = $this->patientDocumentRepository->all();

        return view('patient_documents.index')
            ->with('patientDocuments', $patientDocuments);
    }

    /**
     * Show the form for creating a new Patient_document.
     *
     * @return Response
     */
    public function create()
    {
        return view('patient_documents.create');
    }

    /**
     * Store a newly created Patient_document in storage.
     *
     * @param CreatePatient_documentRequest $request
     *
     * @return Response
     */
    public function store(CreatePatient_documentRequest $request)
    {
        $input = $request->all();
        $patientDocument = $this->patientDocumentRepository->create($input);
        $patientDocument->url = $request->file('url')->store($patientDocument->patient_id . '/patient_documents/documents');
        
        //dd($request->file('url'));
        //$patientDocument->url = $request->file('url')->store($patientDocument);

        //dd($patientDocument->url);

        $patientDocument->update();

        Flash::success('Patient Document saved successfully.');
        return redirect()->to(url()->previous() . '#documents');    
    }

    /**
     * Display the specified Patient_document.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $patientDocument = $this->patientDocumentRepository->find($id);

        if (empty($patientDocument)) {
            Flash::error('Patient Document not found');

            return redirect(route('patientDocuments.index'));
        }

        return view('patient_documents.show')->with('patientDocument', $patientDocument);
    }

    /**
     * Show the form for editing the specified Patient_document.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $patientDocument = $this->patientDocumentRepository->find($id);

        if (empty($patientDocument)) {
            Flash::error('Patient Document not found');

            return redirect(route('patientDocuments.index'));
        }

        return view('patient_documents.edit')->with('patientDocument', $patientDocument);
    }

    /**
     * Update the specified Patient_document in storage.
     *
     * @param int $id
     * @param UpdatePatient_documentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePatient_documentRequest $request)
    {
        $patientDocument = $this->patientDocumentRepository->find($id);

        if (empty($patientDocument)) {
            Flash::error('Patient Document not found');

            return redirect(route('patientDocuments.index'));
        }

        $patientDocument = $this->patientDocumentRepository->update($request->all(), $id);

        Flash::success('Patient Document updated successfully.');

        return redirect()->to(url()->previous() . '#documents');    }

    /**
     * Remove the specified Patient_document from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $patientDocument = $this->patientDocumentRepository->find($id);
        
        //dd(Storage::delete('/app/public/' . $patientDocument->url));
        //$file =   public_path('storage/') . $patientDocument->url ;

        $file =  public_path('storage/') . $patientDocument->url;
        unlink($file);
        Storage::delete($file);
        $this->patientDocumentRepository->delete($id);
    
        if (empty($patientDocument)) {
            Flash::error('Patient Document not found');
            return redirect(route('patientDocuments.index'));
        }

        Flash::success('Patient Document deleted successfully.');
        return redirect()->to(url()->previous() . '#documents');    }
}
