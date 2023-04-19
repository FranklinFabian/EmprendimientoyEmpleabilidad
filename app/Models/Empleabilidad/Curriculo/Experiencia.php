<?php

namespace App\Models\Empleabilidad\Curriculo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Experiencia extends Model
{
    protected $guarded = [];

    protected  $table = 'experiencia';

    public function dataTables($id){
        return DB::table('experiencia as e')
            ->select('e.id as id',
                'e.descripcion as descripcion'
            )
            ->where('e.id_curriculo','=',$id)
            ->orderBy('e.id', 'DESC');
    }

}
