<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWorker_laborRequest;
use App\Http\Requests\UpdateWorker_laborRequest;
use App\Repositories\Worker_laborRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Worker_laborController extends AppBaseController
{
    /** @var  Worker_laborRepository */
    private $workerLaborRepository;

    public function __construct(Worker_laborRepository $workerLaborRepo)
    {
        $this->workerLaborRepository = $workerLaborRepo;
    }

    /**
     * Display a listing of the Worker_labor.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $workerLabors = $this->workerLaborRepository->all();

        return view('worker_labors.index')
            ->with('workerLabors', $workerLabors);
    }

    /**
     * Show the form for creating a new Worker_labor.
     *
     * @return Response
     */
    public function create()
    {
        return view('worker_labors.create');
    }

    /**
     * Store a newly created Worker_labor in storage.
     *
     * @param CreateWorker_laborRequest $request
     *
     * @return Response
     */
    public function store(CreateWorker_laborRequest $request)
    {
        $input = $request->all();
        $workerLabor = $this->workerLaborRepository->create($input);
        Flash::success('Worker Labor saved successfully.');
        // return redirect()->route('workers.edit', $request->worker_id);
        return redirect()->to(url()->previous() . '#laboral');

    }

    /**
     * Display the specified Worker_labor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $workerLabor = $this->workerLaborRepository->find($id);

        if (empty($workerLabor)) {
            Flash::error('Worker Labor not found');

            return redirect(route('workerLabors.index'));
        }

        return view('worker_labors.show')->with('workerLabor', $workerLabor);
    }

    /**
     * Show the form for editing the specified Worker_labor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $workerLabor = $this->workerLaborRepository->find($id);

        if (empty($workerLabor)) {
            Flash::error('Worker Labor not found');

            return redirect(route('workerLabors.index'));
        }

        return view('worker_labors.edit')->with('workerLabor', $workerLabor);
    }

    /**
     * Update the specified Worker_labor in storage.
     *
     * @param int $id
     * @param UpdateWorker_laborRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWorker_laborRequest $request)
    {
        $workerLabor = $this->workerLaborRepository->find($id);

        if (empty($workerLabor)) {
            Flash::error('Worker Labor not found');

            return redirect(route('workerLabors.index'));
        }

        $workerLabor = $this->workerLaborRepository->update($request->all(), $id);

        Flash::success('Worker Labor updated successfully.');

        return redirect(route('workerLabors.index'));
    }

    /**
     * Remove the specified Worker_labor from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $workerLabor = $this->workerLaborRepository->find($id);

        if (empty($workerLabor)) {
            Flash::error('Worker Labor not found');

            return redirect(route('workerLabors.index'));
        }

        $this->workerLaborRepository->delete($id);

        Flash::success('Worker Labor deleted successfully.');

        return redirect(route('workerLabors.index'));
    }
}
