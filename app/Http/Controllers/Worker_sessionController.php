<?php

namespace App\Http\Controllers;

use App\Repositories\Worker_sessionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Auth;

class Worker_sessionController extends AppBaseController
{
    private $workerSessionRepository;

    public function __construct(Worker_sessionRepository $workerSessionRepo)
    {
        $this->workerSessionRepository = $workerSessionRepo;
    }

    public function index(Request $request)
    {
        $workerSessions = $this->workerSessionRepository->all();
        return view('worker_session.index')->with('workerSessions', $workerSessions);
    }


    public function store(Request $request){
        $this->saveLocation($request->all());
        return response()->json(array('status'=>true));
    }

    public function destroy($id)
    {
        $workerSession = $this->workerSessionRepository->find($id);

        if (empty($workerSession)) {
            Flash::error('Worker Time not found');

            return redirect(route('workerSessions.index'));
        }

        $this->workerSessionRepository->delete($id);

        Flash::success('Worker Session deleted successfully.');

        return redirect(route('workerSessions.index'));
    }

    private function saveLocation($data){
        $address = $this->getAddressFromLatLng($data['latitud'],$data['longitud']);
        $input = [
            'action' => $data['action'],
            'latitud' => $data['latitud'],
            'longitud' => $data['longitud'],
            'direccion' => $address,
            'worker_id' => Auth::user()->id
        ];
        $workerSession = $this->workerSessionRepository->create($input);
    }

    private function getAddressFromLatLng($lat,$lng){
        $endpoint = "https://reverse.geocoder.ls.hereapi.com/6.2/reversegeocode.json?prox=".$lat.",".$lng."&mode=retrieveAddresses&maxresults=1&gen=9&apiKey=kP79fcZPJGISk6v6zLcgJSQcuG9gHkoJi8y71ra6ZhE";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL,$endpoint);
        $result=curl_exec($ch);
        curl_close($ch);
        $result = json_decode($result, true);
        try{
            $addr = $result['Response']['View'][0]['Result'][0]['Location']['Address']['Label'];
        }catch(\Exception $e) {
            $adrr = "";
        }
        return $addr;
        
    }

  
}