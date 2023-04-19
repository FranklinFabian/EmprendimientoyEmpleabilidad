<?php

namespace App\Http\Controllers\Empleabilidad\Curriculo;
use App\Http\Controllers\Controller;
use App\Models\Empleabilidad\Curriculo\Experiencia;
use App\Models\Empleabilidad\Curriculo\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use stdClass;

class ExperienciaController extends Controller
{

    public function __construct() {
        $this->middleware(['role:empleabilidad_curriculo_item']);
    }

    public function index(Request $request)
    {
        $data = new stdClass();
        $id_user = Auth::user()->id;
        $pid = Item::where('id_usuario', '=', $id_user)->first()->id;
        $data->pid = $pid;
        return view('pages.empleabilidad.curriculo.experiencia.index')->with('data', $data);
    }

    public function dataTable($id){
        $item = new Experiencia();
        return Datatables($item->dataTables($id))->toJson();
    }

    public function edit($id, $type, $pid)
    {
        $data = new stdClass();

        if($type == 'update'){
            $data->id = $id;
            $data->tipo = $type;
            $data->item = Experiencia::find($id);
        }else{
            $data->tipo = 'new';
        }
        $data->pid = $pid;
        return view('pages.empleabilidad.curriculo.experiencia.modal')->with('data', $data);
    }

    public function store(Request $request)
    {
        $res = new stdClass();
        $data = $request->item;

        try {
            Experiencia::updateOrCreate(['id' => $request->id], $data);
            $res->id = 1;
        } catch (\Exception $e) {
            $res->id = 0;
        }
        $res->tipo = $request->tipo;

        return response()->json($res);
    }

    public function destroy($id)
    {
        try {
            Experiencia::destroy($id);
            $res = 1;
        } catch (\Exception $e) {
            $res = 0;
        }

        return response()->json($res);
    }
}
