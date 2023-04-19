<?php

namespace App\Http\Controllers\Emprendedurismo\Problematica;

use App\Http\Controllers\Controller;
use App\Models\Emprendedurismo\Problematica\Item;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use stdClass;

class ItemController extends Controller
{

    public function __construct() {
        $this->middleware(['role:emprendedurismo_problematica_item']);
    }

    public function index(Request $request)
    {
        $user_id = Auth::user()->id;
        $item = new Item();
        if ($request->ajax()){
            return Datatables($item->dataTablesFiltrado($user_id))->toJson();
        }

        $data = new stdClass();
        $data->page_title = 'Emprendedurismo - Problematica';
        $data->page_description = 'Emprendedurismo - Problematica';
        return view('pages.emprendedurismo.problematica.index')->with('data', $data);

    }

    public function tab(Request $request)
    {
        $data = new stdClass();
        $data->page_title = 'Emprendedurismo - Problematica';
        $data->page_description = 'Emprendedurismo - Problematica';
        $data->pid = $request->param1;
        $data->tipo = $request->param2;
        return view('pages.emprendedurismo.problematica.tab')->with('data', $data);
    }

    public function fichaPdf(){
        $user_id = Auth::user()->id;
        $item = new Item();
        $data['datas'] = $item->obtenerData($user_id);
        $pdf = PDF::loadView('pages.Emprendedurismo.Problematica.pdf', $data);
        return $pdf->download('problematica_general.pdf');
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
