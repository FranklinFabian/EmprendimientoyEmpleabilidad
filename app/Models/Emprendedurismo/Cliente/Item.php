<?php

namespace App\Models\Emprendedurismo\Cliente;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Item extends Model
{
    protected $guarded = [];

    protected  $table = 'cliente';

    public function dataTablesFiltrado($id){
        return DB::table('cliente as c')
            ->select('c.id as id',
                DB::raw('DATE_FORMAT( c.fecha, "%d-%m-%Y") as fecha')
            )
            ->orderBy('c.id', 'DESC');
    }

    public function obtenerData($id){
        return DB::table('cliente as c')
            ->leftJoin('users as u', 'u.id', '=', 'c.id_usuario')
            ->select('c.id as id',
                'u.name as usuario',
                'c.nombre as nombre',
                'c.rango_edad as rango_edad',
                'c.sexo as sexo',
                'c.nivel_social as nivel_social',
                'c.ubicacion as ubicacion',

                DB::raw('DATE_FORMAT( c.fecha, "%d-%m-%Y") as fecha')
            )
            ->where('c.id_usuario','=',$id)
            ->get();
    }

}
