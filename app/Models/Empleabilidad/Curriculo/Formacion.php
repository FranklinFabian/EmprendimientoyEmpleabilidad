<?php

namespace App\Models\Empleabilidad\Curriculo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Formacion extends Model
{
    protected $guarded = [];

    protected  $table = 'formacion';

    public function dataTables($id){
        return DB::table('formacion as f')
            ->select('f.id as id',
                'f.descripcion as descripcion'
            )
            ->where('f.id_curriculo','=',$id)
            ->orderBy('f.id', 'DESC');
    }

}
