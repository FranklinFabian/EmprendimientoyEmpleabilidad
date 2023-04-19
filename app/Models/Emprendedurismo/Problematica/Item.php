<?php

namespace App\Models\Emprendedurismo\Problematica;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Item extends Model
{
    protected $guarded = [];

    protected  $table = 'problematica';

    public function dataTablesFiltrado($id){
        return DB::table('problematica as p')
            ->select('p.id as id',
                DB::raw('DATE_FORMAT( p.fecha, "%d-%m-%Y") as fecha')
            )
            ->orderBy('p.id', 'DESC');
    }

    public function obtenerData($id){
        return DB::table('problematica as p')
            ->leftJoin('users as u', 'u.id', '=', 'p.id_usuario')
            ->select('p.id as id',
                'u.name as usuario',
                'p.problema as problema',
                'p.solucion as solucion',
                'p.resuelve as resuelve',

                DB::raw('DATE_FORMAT( p.fecha, "%d-%m-%Y") as fecha')
            )
            ->where('p.id_usuario','=',$id)
            ->get();
    }



}
