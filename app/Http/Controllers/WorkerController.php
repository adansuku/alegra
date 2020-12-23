<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWorkerRequest;
use App\Http\Requests\UpdateWorkerRequest;
use App\Repositories\WorkerRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Worker;
use App\Models\Patient;
use App\Models\Worker_patient_served;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\User;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Hash;
use App\Repositories\PatientRepository;
use Auth;
use App\Models\Worker_role;

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



    public function updatePassword($id, Request $request){

        $password_size = strlen($request->user_password);
        $worker = $this->workerRepository->find($id);


        if ($request->user_password == null) {
            Flash::error('Error al cambiar la contraseña, asegurate que el campo no está vacio');
            return redirect(route('workers.index'));
        }else if( $password_size < 8 )  {
            Flash::error('El password debe tener al menos 8 Caracteres');
            return redirect(route('workers.index'));
        } else {
            $worker->password = Hash::make($request->user_password);
            $worker->save();
            
            Flash::success('Constraseña Actualizada correctamente para el usuario ' . $worker->email);
            return redirect('workers/' . $id . "/edit");
        }
    }




    public function allWorkers()
    {
        $workers = $this->workerRepository->all();

        // dd($workers);
        return datatables()->of($workers)
            ->addColumn('accion', function ($workers) {
                if(Auth::user()->role_id == 1){
                    return '
                    
                    <a href="/workers/' . $workers->id . '/edit" class="btn btn-xs ">
                    <i class="far fa-edit"></i></a>

                    <a href="/workers/' . $workers->id . '" class="btn btn-xs ">
                    <i class="far fa-eye"></i></a>

                 
                    <button class="btn btn-xs btn-danger btn-delete" data-remote="/workers/' . 
                    $workers->id . '"><i class="far fa-trash-alt"></i> </button>

                    ';
                }
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->rawColumns(['accion'])
            ->removeColumn('password')
            ->make(true);
    }


    public function index(Request $request)
    {
        if(Auth::user()->role_id == 1){
            return view('workers.index');
        }else{
            return redirect("/");
        }
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
        $patients = Patient::all();
        $roles = Worker_role::all();
        $wps = Worker_patient_served::where('worker_id',$id)->pluck('patient_id')->toArray();
        return view('workers.edit')->with('worker', $worker)->with('patients',$patients)->with('wps',$wps)->with('roles',$roles);
    }


    public function update($id, UpdateWorkerRequest $request)
    {
        $worker = $this->workerRepository->find($id);

        $user = new Worker;
        $user = Worker::where('id', $worker->id )->first();

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

        if($request->has('patient_served') && $request->patient_served!=''){
            Worker_patient_served::where('worker_id',$worker->id)->delete();
            foreach($request->patient_served as $p){
                $wps = new Worker_patient_served();
                $wps->worker_id = $worker->id;
                $wps->patient_id = $p;
                $wps->save();
            }
            
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


    public function patients()
    {
        return view('workers.patients');
    }

    public function worker_patients()
    {
        $ids = Worker_patient_served::where('worker_id',Auth::user()->id)->pluck('patient_id')->toArray();
        $patients = Patient::whereIn('id',$ids)->get();
        
        // dd($workers);
        return datatables()->of($patients)
           ->addColumn('accion', function ($patient) {
                if(Auth::user()->role_id == 1){
                    return '
                    <a href="/patients/' . $patient->id . '/edit" class="btn btn-xs ">
                    <i class="far fa-edit"></i> </a>
        
                    <a href="/patients/' . $patient->id . '" class="btn btn-xs ">
                    <i class="far fa-eye"></i> </a>
                    ';
                }elseif( in_array(Auth::user()->role_id,[2,3])  ){
                    return '
                    <a href="/patients/' . $patient->id . '/edit" class="btn btn-xs ">
                    <i class="far fa-edit"></i> </a>

                    <a href="/patients/' . $patient->id . '" class="btn btn-xs ">
                    <i class="far fa-eye"></i> </a>
                    ';
                }
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->rawColumns(['accion'])
            ->removeColumn('password')
            ->make(true);
    }
}

