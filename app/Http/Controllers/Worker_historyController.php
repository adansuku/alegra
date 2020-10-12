<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWorker_historyRequest;
use App\Http\Requests\UpdateWorker_historyRequest;
use App\Repositories\Worker_historyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Worker_historyController extends AppBaseController
{
    /** @var  Worker_historyRepository */
    private $workerHistoryRepository;

    public function __construct(Worker_historyRepository $workerHistoryRepo)
    {
        $this->workerHistoryRepository = $workerHistoryRepo;
    }

    /**
     * Display a listing of the Worker_history.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $workerHistories = $this->workerHistoryRepository->all();

        return view('worker_histories.index')
            ->with('workerHistories', $workerHistories);
    }

    /**
     * Show the form for creating a new Worker_history.
     *
     * @return Response
     */
    public function create()
    {
        return view('worker_histories.create');
    }

    /**
     * Store a newly created Worker_history in storage.
     *
     * @param CreateWorker_historyRequest $request
     *
     * @return Response
     */
    public function store(CreateWorker_historyRequest $request)
    {
        $input = $request->all();

        $workerHistory = $this->workerHistoryRepository->create($input);

        Flash::success('Worker History saved successfully.');

        return redirect()->to(url()->previous() . '#history');
    }

    /**
     * Display the specified Worker_history.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $workerHistory = $this->workerHistoryRepository->find($id);

        if (empty($workerHistory)) {
            Flash::error('Worker History not found');

            return redirect(route('workerHistories.index'));
        }

        return view('worker_histories.show')->with('workerHistory', $workerHistory);
    }

    /**
     * Show the form for editing the specified Worker_history.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $workerHistory = $this->workerHistoryRepository->find($id);

        if (empty($workerHistory)) {
            Flash::error('Worker History not found');

            return redirect(route('workerHistories.index'));
        }

        return view('worker_histories.edit')->with('workerHistory', $workerHistory);
    }

    /**
     * Update the specified Worker_history in storage.
     *
     * @param int $id
     * @param UpdateWorker_historyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWorker_historyRequest $request)
    {
        $workerHistory = $this->workerHistoryRepository->find($id);

        if (empty($workerHistory)) {
            Flash::error('Worker History not found');

            return redirect(route('workerHistories.index'));
        }

        $workerHistory = $this->workerHistoryRepository->update($request->all(), $id);

        Flash::success('Worker History updated successfully.');

        return redirect()->to(url()->previous() . '#history');
    }

    /**
     * Remove the specified Worker_history from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $workerHistory = $this->workerHistoryRepository->find($id);

        if (empty($workerHistory)) {
            Flash::error('Worker History not found');

            return redirect(route('workerHistories.index'));
        }

        $this->workerHistoryRepository->delete($id);

        Flash::success('Worker History deleted successfully.');

        return redirect(route('workerHistories.index'));
    }
}
