<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWorker_documentRequest;
use App\Http\Requests\UpdateWorker_documentRequest;
use App\Repositories\Worker_documentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Worker;

class Worker_documentController extends AppBaseController
{
    /** @var  Worker_documentRepository */
    private $workerDocumentRepository;

    public function __construct(Worker_documentRepository $workerDocumentRepo)
    {
        $this->workerDocumentRepository = $workerDocumentRepo;
    }

    /**
     * Display a listing of the Worker_document.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $workerDocuments = $this->workerDocumentRepository->all();

        return view('worker_documents.index')
            ->with('workerDocuments', $workerDocuments);
    }

    /**
     * Show the form for creating a new Worker_document.
     *
     * @return Response
     */
    public function create()
    {
        return view('worker_documents.create');
    }

    /**
     * Store a newly created Worker_document in storage.
     *
     * @param CreateWorker_documentRequest $request
     *
     * @return Response
     */
    public function store(CreateWorker_documentRequest $request)
    {
        $data = $request->all();
        $workerDocument = $this->workerDocumentRepository->create($data);

        $workerDocument->url = $request->file('url')->store('worker_documents/' . $workerDocument->worker_id);
        $workerDocument->update();
        
        Flash::success('Worker Document saved successfully.');
        // return redirect()->route('workers.edit', $request->worker_id);
        return redirect()->to(url()->previous() . '#documentation');
    }
    /**
     * Display the specified Worker_document.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $workerDocument = $this->workerDocumentRepository->find($id);

        if (empty($workerDocument)) {
            Flash::error('Worker Document not found');

            return redirect(route('workerDocuments.index'));
        }

        return view('worker_documents.show')->with('workerDocument', $workerDocument);
        
    }

    /**
     * Show the form for editing the specified Worker_document.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $workerDocument = $this->workerDocumentRepository->find($id);

        if (empty($workerDocument)) {
            Flash::error('Worker Document not found');

            return redirect(route('workerDocuments.index'));
        }

        return view('worker_documents.edit')->with('workerDocument', $workerDocument);
    }

    /**
     * Update the specified Worker_document in storage.
     *
     * @param int $id
     * @param UpdateWorker_documentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWorker_documentRequest $request)
    {
        $workerDocument = $this->workerDocumentRepository->find($id);

        if (empty($workerDocument)) {
            Flash::error('Worker Document not found');

            return redirect(route('workerDocuments.index'));
        }

        $workerDocument = $this->workerDocumentRepository->update($request->all(), $id);

        Flash::success('Worker Document updated successfully.');

        return redirect(route('workerDocuments.index'));
    }

    /**
     * Remove the specified Worker_document from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $workerDocument = $this->workerDocumentRepository->find($id);

        if (empty($workerDocument)) {
            Flash::error('Worker Document not found');
            return redirect(route('workerDocuments.index'));
        }

        $this->workerDocumentRepository->delete($id);
        Flash::success('Worker Document deleted successfully.');

        return redirect()->to(url()->previous() . '#documentation');
    }
}
