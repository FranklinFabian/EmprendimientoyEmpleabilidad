<?php

namespace App\Http\Controllers\Emprendedurismo\Evaluacion;
use App\Http\Controllers\Controller;
use App\Models\Emprendedurismo\Evaluacion\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use stdClass;

class GeneralController extends Controller
{

    public function __construct() {
        $this->middleware(['role:emprendedurismo_evaluacion_item']);
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

        return view('pages.emprendedurismo.evaluacion.general.index')->with('data', $data);
    }

    public function store(Request $request)
    {
        $res = new stdClass();
        $data = $request->item;


        $data['fecha'] = date('Y-m-d h:i:s');
        $data['id_usuario'] = Auth::user()->id;

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
