<?php

namespace App\Models\Empleabilidad\Curriculo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Item extends Model
{
    protected $guarded = [];

    protected  $table = 'curriculo';

    public function obtenerPrincipal($id){
        return DB::table('curriculo as c')
            ->select('c.id as id',
                DB::raw('DATE_FORMAT( c.fecha, "%d-%m-%Y") as fecha'),
                'c.descripcion as descripcion'
            )
            ->where('c.id_usuario','=',$id)
            ->first();
    }

    public function obtenerFormacion($id){
        return DB::table('formacion as f')
            ->select('f.id as id',
                'f.descripcion as descripcion'
            )
            ->where('f.id_curriculo','=',$id)
            ->get();
    }

    public function obtenerFormacionComplementaria($id){
        return DB::table('complementaria as c')
            ->select('c.id as id',
                'c.descripcion as descripcion'
            )
            ->where('c.id_curriculo','=',$id)
            ->get();
    }

    public function obtenerExperiencia($id){
        return DB::table('experiencia as e')
            ->select('e.id as id',
                'e.descripcion as descripcion'
            )
            ->where('e.id_curriculo','=',$id)
            ->get();
    }

    public function obtenerIdioma($id){
        return DB::table('idioma as i')
            ->select('i.id as id',
                'i.descripcion as descripcion'
            )
            ->where('i.id_curriculo','=',$id)
            ->get();
    }

    public function obtenerCompetencia($id){
        return DB::table('competencia as c')
            ->select('c.id as id',
                'c.descripcion as descripcion'
            )
            ->where('c.id_curriculo','=',$id)
            ->get();
    }

    public function obtenerReferencia($id){
        return DB::table('referencia as r')
            ->select('r.id as id',
                'r.descripcion as descripcion'
            )
            ->where('r.id_curriculo','=',$id)
            ->get();
    }




}
