<?php

namespace App\Http\Controllers\Empleabilidad\Curriculo;
use App\Http\Controllers\Controller;
use App\Models\Empleabilidad\Curriculo\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use stdClass;

class DescripcionController extends Controller
{

    public function __construct() {
        $this->middleware(['role:empleabilidad_ficha_item']);
    }

    public function index(Request $request)
    {
        $data = new stdClass();
        $id_user = Auth::user()->id;
        $item = Item::where('id_usuario', '=', $id_user)->first();

        if($item == null){
            $data->tipo = 'new';
        }else{
            $data->pid = $id_user;
            $data->tipo = 'update';
            $data->item = $item;
        }
        return view('pages.empleabilidad.curriculo.descripcion.index')->with('data', $data);
    }

    public function store(Request $request)
    {
        $res = new stdClass();
        $data = $request->item;

        $data['fecha'] = date('Y-m-d h:i:s');
        $data['id_usuario'] = Auth::user()->id;

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
