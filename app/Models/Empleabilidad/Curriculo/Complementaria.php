<?php

namespace App\Models\Empleabilidad\Curriculo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Complementaria extends Model
{
    protected $guarded = [];

    protected  $table = 'complementaria';

    public function dataTables($id){
        return DB::table('complementaria as c')
            ->select('c.id as id',
                'c.descripcion as descripcion'
            )
            ->where('c.id_curriculo','=',$id)
            ->orderBy('c.id', 'DESC');
    }

}
