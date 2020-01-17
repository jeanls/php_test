<?php

namespace App\Http\Controllers;

use App\Http\Requests\IncidentRequest;
use App\Repositories\IncidentRepository;

class IncidentController extends Controller
{
    private $incidentRepository;

    public function __construct(IncidentRepository $incidentRepository)
    {
        $this->incidentRepository = $incidentRepository;
    }

    public function get($id){
        return $this->incidentRepository->get($id);
    }

    public function index(){
        return $this->incidentRepository->index();
    }

    public function save(IncidentRequest $request){
        return $this->incidentRepository->save($request);
    }

    public function update($id, IncidentRequest $request){
        return $this->incidentRepository->update($id, $request);
    }

    public function delete($id){
        return $this->incidentRepository->remove($id);
    }
}
