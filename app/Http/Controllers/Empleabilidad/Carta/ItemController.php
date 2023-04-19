<?php

namespace App\Http\Controllers\Empleabilidad\Carta;

use App\Http\Controllers\Controller;
use App\Models\Empleabilidad\Carta\Item;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use stdClass;

class ItemController extends Controller
{

    public function __construct() {
        $this->middleware(['role:empleabilidad_carta_item']);
    }

    public function index(Request $request)
    {
        $data = new stdClass();
        $id_user = Auth::user()->id;
        $item = Item::where('id_usuario', '=', $id_user)->first();

        if($item == null){
            $data->tipo = 'new';
        }else{
            $data->tipo = 'update';
        }

        $data->page_title = 'Empleabilidad - Carta';
        $data->page_description = 'Empleabilidad - Carta';
        return view('pages.empleabilidad.carta.index')->with('data', $data);
    }

    public function fichaPdf(){
        $id = Auth::user()->id;
        $item = new Item();

        $data['data'] = $item->obtenerData($id);

        $pdf = PDF::loadView('pages.empleabilidad.carta.pdf', $data);

        return $pdf->download('ficha_empleabilidad_carta.pdf');
    }
}
