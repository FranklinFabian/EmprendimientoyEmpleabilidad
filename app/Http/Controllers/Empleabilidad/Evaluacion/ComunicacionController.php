<?php

namespace App\Http\Controllers\Empleabilidad\Evaluacion;
use App\Http\Controllers\Controller;
use App\Models\Empleabilidad\Evaluacion\Item;
use Illuminate\Http\Request;
use stdClass;

class ComunicacionController extends Controller
{

    public function __construct() {
        $this->middleware(['role:empleabilidad_evaluacion_item']);
    }

    public function index(Request $request)
    {
        $data = new stdClass();
        if($request->param2 == 'update'){
            $data->pid = $request->param1;
            $data->tipo = $request->param2;
            $data->item = Item::find($data->pid);
        }else{
            $data->tipo = 'new';
        }

        //$data->autodiagnosticos = CatalogoAutodiagnostico::all();
        return view('pages.empleabilidad.evaluacion.comunicacion.index')->with('data', $data);
    }

    public function store(Request $request)
    {
        $res = new stdClass();
        $data = $request->item;

        try {
            Item::updateOrCreate(['id' => $request->id], $data);
            $res->id = 1;
        } catch (\Exception $e) {
            $res->id = 0;
        }
        $res->tipo = $request->tipo;

        return response()->json($res);
    }

}
