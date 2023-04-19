<?php

namespace App\Models\Emprendedurismo\Negocio;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Item extends Model
{
    protected $guarded = [];

    protected  $table = 'negocio';

    public function dataTablesFiltrado($id){
        return DB::table('negocio as n')
            ->select('n.id as id',
                DB::raw('DATE_FORMAT( n.fecha, "%d-%m-%Y") as fecha')
            )
            ->orderBy('n.id', 'DESC');
    }

    public function obtenerData($id){
        return DB::table('negocio as n')
            ->leftJoin('users as u', 'u.id', '=', 'n.id_usuario')
            ->leftJoin('catalogo_idea_negocio as cin', 'cin.id', '=', 'n.id_idea_negocio')
            ->leftJoin('catalogo_costoso as cc', 'cc.id', '=', 'n.id_costoso')
            ->leftJoin('catalogo_hacer_idea as chi', 'chi.id', '=', 'n.id_hacer_idea')
            ->leftJoin('catalogo_gusta_idea as cg', 'cg.id', '=', 'n.id_gusta_idea')
            ->leftJoin('catalogo_conocer_proceso as ccp', 'ccp.id', '=', 'n.id_conocer_proceso')
            ->leftJoin('catalogo_dinero as cd', 'cd.id', '=', 'n.id_dinero')
            ->leftJoin('catalogo_apoyo as ca', 'ca.id', '=', 'n.id_apoyo')
            ->leftJoin('catalogo_proveedores_compradores as cpc', 'cpc.id', '=', 'n.id_proveedores_compradores')
            ->select('n.id as id',
                'u.name as usuario',
                'n.nombre as nombre',
                'cin.nombre as idea_negocio',
                'cc.nombre as costoso',
                'chi.nombre as hacer_idea',
                'cg.nombre as gusta_idea',
                'ccp.nombre as conocer_proceso',
                'cd.nombre as dinero',
                'ca.nombre as apoyo',
                'cpc.nombre as proveedores_compradores',

                DB::raw('DATE_FORMAT( n.fecha, "%d-%m-%Y") as fecha')
            )
            ->where('n.id','=',$id)
            ->first();
    }

}


