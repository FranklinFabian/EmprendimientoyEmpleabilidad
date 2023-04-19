<?php

namespace App\Http\Controllers\Empleabilidad\Ficha;
use App\Http\Controllers\Controller;
use App\Models\Empleabilidad\Ficha\CatalogoExperiencia;
use App\Models\Empleabilidad\Ficha\CatalogoHorario;
use App\Models\Empleabilidad\Ficha\Item;
use Illuminate\Http\Request;
use stdClass;

class LaboralController extends Controller
{

    public function __construct() {
        $this->middleware(['role:empleabilidad_ficha_item']);
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

        $data->horarios = CatalogoHorario::all();
        $data->experiencias = CatalogoExperiencia::all();
        return view('pages.empleabilidad.ficha.laboral.index')->with('data', $data);
    }

    public function store(Request $request)
    {
        $res = new stdClass();
        $data = $request->item;

        try {
            $item = Item::updateOrCreate(['id' => $request->id], $data);
            $res->id = $item->id;
        } catch (\Exception $e) {
            $res->id = 0;
        }
        $res->tipo = $request->tipo;

        return response()->json($res);
    }
}
