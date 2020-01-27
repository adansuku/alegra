<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWorkerRequest;
use App\Http\Requests\UpdateWorkerRequest;
use App\Repositories\WorkerRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Worker;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\User;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Hash;

class WorkerController extends AppBaseController
{
    /** @var  WorkerRepository */
    private $workerRepository;

    public function __construct(WorkerRepository $workerRepo)
    {
        $this->workerRepository = $workerRepo;
        $this->middleware('auth');
    }


    /**
     * Display a listing of the Workers.
     *
     * @param Request $request
     *
     * @return Response
     */

    public function allWorkers()
    {
        $workers = $this->workerRepository->all();

        // dd($workers);
        return datatables()->of($workers)
            ->addColumn('accion', function ($workers) {
                return '
                <a href="/workers/' . $workers->id . '/edit" class="btn btn-xs ">
                <i class="far fa-edit"></i></a>

                <a href="/workers/' . $workers->id . '" class="btn btn-xs ">
                <i class="far fa-eye"></i></a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->rawColumns(['accion'])
            ->removeColumn('password')
            ->make(true);
    }


    public function index(Request $request)
    {
        // $workers = $this->workerRepository->all();
        // dd($workers);
        return view('workers.index');
            // ->with('workers', $workers);
    }


    public function create()
    {
        return view('workers.create');
    }

    

    public function store(CreateWorkerRequest $request)
    {
        
        $worker = Worker::create([
            'nombre' => $request['nombre'],
            'apellido' => $request['apellido'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        

        Flash::success('Trabajador/a almacenado correctamente.');
        return redirect()->route('workers.edit', $worker->id);
        // return redirect(route('workers.index'));
    }


    public function show($id)
    {
        $worker = $this->workerRepository->find($id);

        if (empty($worker)) {
            Flash::error('Trabajador/a no encontrado');

            return redirect(route('workers.index'));
        }

        return view('workers.show')->with('worker', $worker);
    }


    public function edit($id)
    {
        $worker = $this->workerRepository->find($id);

        if (empty($worker)) {
            Flash::error('Worker not found');
            return redirect(route('workers.index'));
        }
        return view('workers.edit')->with('worker', $worker);
    }


    public function update($id, UpdateWorkerRequest $request)
    {
        $worker = $this->workerRepository->find($id);

        $user = new User;
        $user = User::where('email', $worker->email )->first();
        //dd($request);

        // if($worker->email != $request->email){
        //     $user->email = $request->email;
        //     $user->save();
        // }

        // if($request->password != "00000000"){
        //     $user->password = Hash::make($request->password);
        //     $user->save();
        // }

        if (empty($worker)) {
            Flash::error('Trabajador/a no encontrado');
            return redirect(route('workers.index'));
        }

        $worker = $this->workerRepository->update($request->all(), $id);

        if ($request->file('avatar') != null){
            $worker->avatar = $request->file('avatar')->store('avatar/' . $worker->id);
            $user = User::where('email', $worker->email )->update(['avatar'=>$worker->avatar]);
            $worker->save();
        }
        Flash::success('Campos actualizados correctamente.');

        if ($request->get('action') == 'Guardar') {
            return redirect()->route('workers.edit', $worker->id);
        } elseif ($request->get('action') == 'Guardar y salir') {
            return redirect(route('workers.index'));
        }

    }

    public function destroy($id)
    {
        $worker = $this->workerRepository->find($id);
        if (empty($worker)) {
            Flash::error('Worker not found');

            return redirect(route('workers.index'));
        }

        $this->workerRepository->delete($id);
        Flash::success('Elemento eliminado correctamente.');
        return redirect(route('workers.index'));
    }
}
