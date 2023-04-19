<?php

namespace App\Http\Controllers\Autodiagnostico\Test;

use App\Http\Controllers\Controller;
use App\Models\Autodiagnostico\Test\Item;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use stdClass;

class ItemController extends Controller
{

    public function __construct() {
        $this->middleware(['role:autodiagnostico_test_item']);
    }

    public function index(Request $request)
    {
        $user_id = Auth::user()->id;
        $item = new Item();
        if ($request->ajax()){
            return Datatables($item->dataTablesFiltrado($user_id))->toJson();
        }

        $data = new stdClass();
        $data->page_title = 'Autodiagnostico - Test';
        $data->page_description = 'Autodiagnostico - Test';
        return view('pages.autodiagnostico.test.index')->with('data', $data);

    }

    public function tab(Request $request)
    {
        $data = new stdClass();
        $data->page_title = 'Autodiagnostico - Test';
        $data->page_description = 'Autodiagnostico - Test';
        $data->pid = $request->param1;
        $data->tipo = $request->param2;
        return view('pages.autodiagnostico.test.tab')->with('data', $data);
    }

    public function fichaPdf($id){
        $item = new Item();

        $data['data'] = $item->obtenerData($id);

        $pdf = PDF::loadView('pages.autodiagnostico.test.pdf', $data);

        return $pdf->download('ficha_autodiagnostico.pdf');
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
