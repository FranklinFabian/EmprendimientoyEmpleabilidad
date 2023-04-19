<?php

namespace App\Models\Emprendedurismo\Canva;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Item extends Model
{
    protected $guarded = [];

    protected  $table = 'canva';

    public function dataTablesFiltrado($id){
        return DB::table('canva as c')
            ->select('c.id as id',
                DB::raw('DATE_FORMAT( c.fecha, "%d-%m-%Y") as fecha')
            )
            ->orderBy('c.id', 'DESC');
    }

    public function obtenerData($id){
        return DB::table('canva as c')
            ->leftJoin('negocio as n', 'n.id', '=', 'c.id_negocio')
            ->leftJoin('users as u', 'u.id', '=', 'c.id_usuario')
            ->select('c.fecha as fecha',
                'u.name as usuario',
                'n.nombre as idea',
                'c.publico_objetivo as publico_objetivo',
                'c.propuesta_valor as propuesta_valor',
                'c.canal as canal',
                'c.relacion_cliente as relacion_cliente',
                'c.fuente_ingreso as fuente_ingreso',
                'c.recurso_clave as recurso_clave',
                'c.actividad_clave as actividad_clave',
                'c.socio_clave as socio_clave',
                DB::raw('DATE_FORMAT( c.fecha, "%d-%m-%Y") as fecha')
            )
            ->where('c.id','=',$id)
            ->first();
    }

    public function ideasFiltradas($id){
        return DB::table('negocio as n')
            ->select('n.id as id',
                'n.nombre as nombre'
            )
            ->where('n.id_usuario','=',$id)
            ->get();
    }

}


