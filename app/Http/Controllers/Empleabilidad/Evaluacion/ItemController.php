<?php

namespace App\Http\Controllers\Empleabilidad\Evaluacion;

use App\Http\Controllers\Controller;
use App\Models\Empleabilidad\Evaluacion\Item;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use stdClass;

class ItemController extends Controller
{

    public function __construct() {
        $this->middleware(['role:empleabilidad_evaluacion_item']);
    }

    public function index(Request $request)
    {
        $user_id = Auth::user()->id;
        $item = new Item();
        if ($request->ajax()){
            return Datatables($item->dataTablesFiltrado($user_id))->toJson();
        }

        $data = new stdClass();
        $data->page_title = 'Empleabilidad - Evaluación';
        $data->page_description = 'Empleabilidad - Evaluación';
        return view('pages.empleabilidad.evaluacion.index')->with('data', $data);

    }

    public function tab(Request $request)
    {
        $data = new stdClass();
        $data->page_title = 'Empleabilidad - Evaluación';
        $data->page_description = 'Empleabilidad - Evaluación';
        $data->pid = $request->param1;
        $data->tipo = $request->param2;
        return view('pages.empleabilidad.evaluacion.tab')->with('data', $data);
    }

    public function fichaPdf($id){
        $item = new Item();
        $data['data'] = $item->obtenerData($id);
        $pdf = PDF::loadView('pages.empleabilidad.evaluacion.pdf', $data);
        return $pdf->download('ficha_evaluacion.pdf');
    }

}
