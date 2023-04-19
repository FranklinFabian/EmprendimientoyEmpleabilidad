<?php

namespace App\Models\Empleabilidad\Carta;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Item extends Model
{
    protected $guarded = [];

    protected  $table = 'carta';

    public function obtenerData($id){
        return DB::table('carta as c')
            ->select('c.id as id',
                DB::raw('DATE_FORMAT( c.fecha, "%d-%m-%Y") as fecha'),
                'c.institucion as institucion',
                'c.nombre as nombre',
                'c.cargo as cargo',
                'c.referencia as referencia',
                'c.parrafo_motivo as parrafo_motivo',
                'c.parrafo_puesto as parrafo_puesto',
                'c.parrafo_interes as parrafo_interes',
                'c.parrafo_despedida as parrafo_despedida'
            )
            ->where('c.id','=',$id)
            ->first();
    }



}
