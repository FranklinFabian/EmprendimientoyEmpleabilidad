<?php

namespace App\Http\Controllers\Administracion;

use App\Http\Controllers\Controller;
use App\Models\Administracion\General;
use App\Models\Administracion\User;
use App\Models\CatalogoEstado;
use Illuminate\Http\Request;
use stdClass;

class GeneralController extends Controller
{

    public function __construct() {
        $this->middleware(['role:administracion_usuarios']);
    }

    public function index(Request $request)
    {
        $data = new stdClass();
        if($request->param2 == 'update'){
            $data->pid = $request->param1;
            $data->tipo = $request->param2;
            $data->item = User::find($data->pid);
        }else{
            $data->tipo = 'new';
        }

        $data->estados = CatalogoEstado::all();
        return view('pages.administracion.item.general.index')->with('data', $data);
    }

    public function store(Request $request)
    {
        $res = new stdClass();
        $data = $request->item;
        if (isset($data['password'])){
            $data['password'] = bcrypt($request->item['password']);
        }else{
            unset($data['password']);
        }

        try {
            $general = General::updateOrCreate(['id' => $request->id], $data);
            $res->id = $general->id;

        } catch (\Exception $e) {
            dd($e->getMessage());
            $res->id = 0;
        }
        $res->type = $request->type;
        return response()->json($res);
    }

    public function destroy($id)
    {
        try {
            General::destroy($id);
            $res = 1;
        } catch (\Exception $e) {
            $res = 0;
        }
        return response()->json($res);
    }


}
