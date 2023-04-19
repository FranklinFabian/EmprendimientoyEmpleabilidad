<?php

namespace App\Http\Controllers\Autodiagnostico\Test;
use App\Http\Controllers\Controller;
use App\Models\Autodiagnostico\Test\CatalogoAutodiagnostico;
use App\Models\Autodiagnostico\Test\Item;
use Illuminate\Http\Request;
use stdClass;

class ProyectoController extends Controller
{

    public function __construct() {
        $this->middleware(['role:autodiagnostico_test_item']);
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

        $data->autodiagnosticos = CatalogoAutodiagnostico::all();
        return view('pages.autodiagnostico.test.proyecto.index')->with('data', $data);
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
