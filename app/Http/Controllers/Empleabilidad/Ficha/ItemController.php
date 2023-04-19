<?php

namespace App\Http\Controllers\Empleabilidad\Ficha;

use App\Http\Controllers\Controller;
use App\Models\Empleabilidad\Ficha\Item;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use stdClass;

class ItemController extends Controller
{

    public function __construct() {
        $this->middleware(['role:empleabilidad_ficha_item']);
    }

    public function index(Request $request)
    {
        $user_id = Auth::user()->id;
        $item = new Item();
        if ($request->ajax()){
            return Datatables($item->dataTablesFiltrado($user_id))->toJson();
        }

        $data = new stdClass();
        $data->page_title = 'Empleabilidad - Ficha Social';
        $data->page_description = 'Empleabilidad - Ficha Social';
        return view('pages.empleabilidad.ficha.index')->with('data', $data);

    }

    public function tab(Request $request)
    {
        $data = new stdClass();
        $data->page_title = 'Empleabilidad - Ficha Social';
        $data->page_description = 'Empleabilidad - Ficha Social';
        $data->pid = $request->param1;
        $data->tipo = $request->param2;
        return view('pages.empleabilidad.ficha.tab')->with('data', $data);
    }

    public function fichaPdf($id){
        $item = new Item();
        $data['data'] = $item->obtenerData($id);
        $pdf = PDF::loadView('pages.empleabilidad.ficha.pdf', $data);
        return $pdf->download('ficha_ficha_social.pdf');
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
