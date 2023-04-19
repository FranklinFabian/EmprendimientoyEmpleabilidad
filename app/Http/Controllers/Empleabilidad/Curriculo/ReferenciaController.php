<?php

namespace App\Http\Controllers\Empleabilidad\Curriculo;
use App\Http\Controllers\Controller;
use App\Models\Empleabilidad\Curriculo\CatalogoTipoReferencia;
use App\Models\Empleabilidad\Curriculo\Item;
use App\Models\Empleabilidad\Curriculo\Referencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use stdClass;

class ReferenciaController extends Controller
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
        return view('pages.empleabilidad.curriculo.referencia.index')->with('data', $data);
    }

    public function dataTable($id){
        $item = new Referencia();
        return Datatables($item->dataTables($id))->toJson();
    }

    public function edit($id, $type, $pid)
    {
        $data = new stdClass();

        if($type == 'update'){
            $data->id = $id;
            $data->tipo = $type;
            $data->item = Referencia::find($id);
        }else{
            $data->tipo = 'new';
        }
        $data->pid = $pid;
        $data->tiposreferencia = CatalogoTipoReferencia::all();
        return view('pages.empleabilidad.curriculo.referencia.modal')->with('data', $data);
    }

    public function store(Request $request)
    {
        $res = new stdClass();
        $data = $request->item;

        try {
            Referencia::updateOrCreate(['id' => $request->id], $data);
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
            Referencia::destroy($id);
            $res = 1;
        } catch (\Exception $e) {
            $res = 0;
        }

        return response()->json($res);
    }
}
