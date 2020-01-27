<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWorker_timeRequest;
use App\Http\Requests\UpdateWorker_timeRequest;
use App\Repositories\Worker_timeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Worker_timeController extends AppBaseController
{
    /** @var  Worker_timeRepository */
    private $workerTimeRepository;

    public function __construct(Worker_timeRepository $workerTimeRepo)
    {
        $this->workerTimeRepository = $workerTimeRepo;
    }

    /**
     * Display a listing of the Worker_time.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $workerTimes = $this->workerTimeRepository->all();

        return view('worker_times.index')
            ->with('workerTimes', $workerTimes);
    }

    /**
     * Show the form for creating a new Worker_time.
     *
     * @return Response
     */
    public function create()
    {
        return view('worker_times.create');
    }

    /**
     * Store a newly created Worker_time in storage.
     *
     * @param CreateWorker_timeRequest $request
     *
     * @return Response
     */
    public function store(CreateWorker_timeRequest $request)
    {
        $input = $request->all();

        $workerTime = $this->workerTimeRepository->create($input);

        Flash::success('Worker Time saved successfully.');

        return redirect(route('workerTimes.index'));
    }

    /**
     * Display the specified Worker_time.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $workerTime = $this->workerTimeRepository->find($id);

        if (empty($workerTime)) {
            Flash::error('Worker Time not found');

            return redirect(route('workerTimes.index'));
        }

        return view('worker_times.show')->with('workerTime', $workerTime);
    }

    /**
     * Show the form for editing the specified Worker_time.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $workerTime = $this->workerTimeRepository->find($id);

        if (empty($workerTime)) {
            Flash::error('Worker Time not found');

            return redirect(route('workerTimes.index'));
        }

        return view('worker_times.edit')->with('workerTime', $workerTime);
    }

    /**
     * Update the specified Worker_time in storage.
     *
     * @param int $id
     * @param UpdateWorker_timeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWorker_timeRequest $request)
    {
        $workerTime = $this->workerTimeRepository->find($id);

        if (empty($workerTime)) {
            Flash::error('Worker Time not found');

            return redirect(route('workerTimes.index'));
        }

        $workerTime = $this->workerTimeRepository->update($request->all(), $id);

        Flash::success('Worker Time updated successfully.');

        return redirect(route('workerTimes.index'));
    }

    /**
     * Remove the specified Worker_time from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $workerTime = $this->workerTimeRepository->find($id);

        if (empty($workerTime)) {
            Flash::error('Worker Time not found');

            return redirect(route('workerTimes.index'));
        }

        $this->workerTimeRepository->delete($id);

        Flash::success('Worker Time deleted successfully.');

        return redirect(route('workerTimes.index'));
    }
}
