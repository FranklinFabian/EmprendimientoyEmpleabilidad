<?php

namespace App\Models\Emprendedurismo\Elevador;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Item extends Model
{
    protected $guarded = [];

    protected  $table = 'elevador';

    public function dataTablesFiltrado($id){
        return DB::table('elevador as e')
            ->select('e.id as id',
                DB::raw('DATE_FORMAT( e.fecha, "%d-%m-%Y") as fecha')
            )
            ->orderBy('e.id', 'DESC');
    }

    public function obtenerData($id){
        return DB::table('elevador as e')
            ->leftJoin('negocio as n', 'n.id', '=', 'e.id_negocio')
            ->leftJoin('users as u', 'u.id', '=', 'e.id_usuario')
            ->select('e.fecha as fecha',
                'u.name as usuario',
                'n.nombre as idea',
                'e.necesidad as necesidad',
                'e.problematica as problematica',
                'e.solucion as solucion',
                'e.diferencia as diferencia',
                'e.recursos as recursos',
                'e.equipo as equipo',
                'e.experiencia as experiencia',
                'e.caso as caso',
                DB::raw('DATE_FORMAT( e.fecha, "%d-%m-%Y") as fecha')
            )
            ->where('e.id','=',$id)
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


