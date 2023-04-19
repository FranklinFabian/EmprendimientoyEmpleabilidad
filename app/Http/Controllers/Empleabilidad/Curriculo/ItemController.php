<?php

namespace App\Http\Controllers\Empleabilidad\Curriculo;

use App\Http\Controllers\Controller;
use App\Models\Empleabilidad\Curriculo\Item;
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
        $data = new stdClass();
        $id_user = Auth::user()->id;
        $item = Item::where('id_usuario', '=', $id_user)->first();

        if($item == null){
            $data->tipo = 'new';
        }else{
            $data->tipo = 'update';
        }

        $data->page_title = 'Empleabilidad - Curriculo';
        $data->page_description = 'Empleabilidad - Curriculo';
        return view('pages.empleabilidad.curriculo.index')->with('data', $data);
    }

    public function fichaPdf(){
        $id = Auth::user()->id;

        $item = new Item();

        $data['principal'] = $item->obtenerPrincipal($id);
        $data['formaciones'] = $item->obtenerFormacion($data['principal']->id);
        $data['formacioncomplementarias'] = $item->obtenerFormacionComplementaria($data['principal']->id);
        $data['experiencias'] = $item->obtenerExperiencia($data['principal']->id);
        $data['idiomas'] = $item->obtenerIdioma($data['principal']->id);
        $data['competencias'] = $item->obtenerCompetencia($data['principal']->id);
        $data['referencias'] = $item->obtenerReferencia($data['principal']->id);

        //dd($data);

        $pdf = PDF::loadView('pages.empleabilidad.curriculo.pdf', $data);

        return $pdf->download('ficha_curriculo.pdf');
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
