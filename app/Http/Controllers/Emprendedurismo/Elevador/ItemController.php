<?php

namespace App\Http\Controllers\Emprendedurismo\Elevador;

use App\Http\Controllers\Controller;
use App\Models\Emprendedurismo\Elevador\Item;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use stdClass;

class ItemController extends Controller
{

    public function __construct() {
        $this->middleware(['role:emprendedurismo_elevador_item']);
    }

    public function index(Request $request)
    {
        $user_id = Auth::user()->id;
        $item = new Item();
        if ($request->ajax()){
            return Datatables($item->dataTablesFiltrado($user_id))->toJson();
        }
        $data = new stdClass();
        $data->page_title = 'Emprendedurismo - Elevador';
        $data->page_description = 'Emprendedurismo - Elevador';
        return view('pages.emprendedurismo.elevador.index')->with('data', $data);

    }

    public function tab(Request $request)
    {
        $data = new stdClass();
        $data->page_title = 'Emprendedurismo - Elevador';
        $data->page_description = 'Emprendedurismo - Elevador';
        $data->pid = $request->param1;
        $data->tipo = $request->param2;
        return view('pages.emprendedurismo.elevador.tab')->with('data', $data);
    }

    public function fichaPdf($id){

        $item = new Item();
        $data['data'] = $item->obtenerData($id);
        $pdf = PDF::loadView('pages.emprendedurismo.elevador.pdf', $data);
        return $pdf->download('elevador_general.pdf');
    }

    public function destroy($id)
    {
        try {
            Item::destroy($id);
            $res = 1;
        } catch (\Exception $e) {
            $res = 0;
        }

        return response()->json($res);
    }

}
