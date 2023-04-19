<?php

namespace App\Http\Controllers\Autenticacion;

use App\Http\Controllers\Controller;
use App\Models\Administracion\Modulo;
use Illuminate\Http\Request;
use stdClass;

class RegistroController extends Controller
{

    public function store(Request $request)
    {
        dd($request->item);
        $res = new stdClass();
        $data = $request->item;
        $data['model_type'] = 'App\Models\Administracion\User';

        try {
            Modulo::updateOrCreate(['id' => $request->id], $data);
            $res->id = 1;
        } catch (\Exception $e) {
            $res->id = 0;
        }
        $res->type = $request->type;

        return response()->json($res);
    }



}
