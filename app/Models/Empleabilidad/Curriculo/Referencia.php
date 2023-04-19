<?php

namespace App\Models\Empleabilidad\Curriculo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Referencia extends Model
{
    protected $guarded = [];

    protected  $table = 'referencia';

    public function dataTables($id){
        return DB::table('referencia as r')
            ->join('catalogo_tipo_referencia as ctr', 'ctr.id', '=', 'r.id_tipo_referencia')
            ->select('r.id as id',
                'ctr.nombre as tipo_referencia',
                'r.descripcion as descripcion'
            )
            ->where('r.id_curriculo','=',$id)
            ->orderBy('r.id', 'DESC');
    }

}
