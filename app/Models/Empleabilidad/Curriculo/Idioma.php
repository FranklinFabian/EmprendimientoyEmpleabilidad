<?php

namespace App\Models\Empleabilidad\Curriculo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Idioma extends Model
{
    protected $guarded = [];

    protected  $table = 'idioma';

    public function dataTables($id){
        return DB::table('idioma as i')
            ->select('i.id as id',
                'i.descripcion as descripcion'
            )
            ->where('i.id_curriculo','=',$id)
            ->orderBy('i.id', 'DESC');
    }

}
