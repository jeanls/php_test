<?php


namespace App\Repositories;


use App\Incident;
use Illuminate\Http\Request;

class IncidentRepository
{
    public function index()
    {
        return Incident::all();
    }

    public function get($id){
        $incident = Incident::find($id);
        if(!isset($incident)){
            return response('', 404);
        }
        return $incident;
    }

    public function save(Request $request)
    {
        return Incident::create($request->all());
    }

    public function update($id, Request $request)
    {
        $incident = Incident::where('id', $id)->first();
        if (!isset($incident->id)) {
            return response('', 404);
        }
        return Incident::where('id', $id)->update($request->all());
    }

    public function remove($id)
    {
        $incident = Incident::where('id', $id)->first();
        if (!isset($incident->id)) {
            return response('', 404);
        }
        $incident->delete();
        return response('', 200);
    }
}
