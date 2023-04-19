<?php

namespace App\Models\Emprendedurismo\Evaluacion;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Item extends Model
{
    protected $guarded = [];

    protected  $table = 'emprendedurismo_evaluacion';

    public function dataTablesFiltrado($id){
        return DB::table('emprendedurismo_evaluacion as ee')
            ->select('ee.id as id',
                DB::raw('DATE_FORMAT( ee.fecha, "%d-%m-%Y") as fecha')
            )
            ->orderBy('ee.id', 'DESC');
    }

    public function obtenerData($id){
        return DB::table('emprendedurismo_evaluacion as ee')
            ->leftJoin('users as u', 'u.id', '=', 'ee.id_usuario')

            ->select('ee.id as id',
                'u.name as usuario',
                'ee.monitoreo_global as monitoreo_global',
                'ee.tipo_emprendimientos as tipo_emprendimientos',
                'ee.piramide_maslow as piramide_maslow',
                'ee.afirmaciones as afirmaciones',
                'ee.modelo_canvas as modelo_canvas',
                'ee.segmentacion_clientes as segmentacion_clientes',
                'ee.tipos_costos as tipos_costos',
                'ee.costos_fijos as costos_fijos',
                'ee.depreciacion as depreciacion',
                'ee.productos_servicios as productos_servicios',

                DB::raw('DATE_FORMAT( ee.fecha, "%d-%m-%Y") as fecha')
            )
            ->where('ee.id','=',$id)
            ->first();
    }



}
