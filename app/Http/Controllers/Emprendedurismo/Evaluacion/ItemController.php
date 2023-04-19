<?php

namespace App\Http\Controllers\Emprendedurismo\Evaluacion;

use App\Http\Controllers\Controller;
use App\Models\Emprendedurismo\Evaluacion\Item;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use stdClass;

class ItemController extends Controller
{

    public function __construct() {
        $this->middleware(['role:emprendedurismo_evaluacion_item']);
    }

    public function index(Request $request)
    {
        $user_id = Auth::user()->id;
        $item = new Item();
        if ($request->ajax()){
            return Datatables($item->dataTablesFiltrado($user_id))->toJson();
        }
        $data = new stdClass();
        $data->page_title = 'Emprendedurismo - Evaluación';
        $data->page_description = 'Emprendedurismo - Evaluación';
        return view('pages.emprendedurismo.evaluacion.index')->with('data', $data);

    }

    public function tab(Request $request)
    {
        $data = new stdClass();
        $data->page_title = 'Emprendedurismo - Evaluación';
        $data->page_description = 'Emprendedurismo - Evaluación';
        $data->pid = $request->param1;
        $data->tipo = $request->param2;
        return view('pages.emprendedurismo.evaluacion.tab')->with('data', $data);
    }

    public function fichaPdf($id){
        $item = new Item();
        $data['data'] = $item->obtenerData($id);
        $pdf = PDF::loadView('pages.emprendedurismo.evaluacion.pdf', $data);
        return $pdf->download('ficha_evaluacion.pdf');
    }

}
