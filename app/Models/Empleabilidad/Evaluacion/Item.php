<?php

namespace App\Models\Empleabilidad\Evaluacion;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Item extends Model
{
    protected $guarded = [];

    protected  $table = 'empleabilidad_evaluacion';

    public function dataTablesFiltrado($id){
        return DB::table('empleabilidad_evaluacion as ee')
            ->select('ee.id as id',
                DB::raw('DATE_FORMAT( ee.fecha, "%d-%m-%Y") as fecha')
            )
            ->orderBy('ee.id', 'DESC');
    }

    public function obtenerData($id){
        return DB::table('empleabilidad_evaluacion as ee')
            ->leftJoin('users as u', 'u.id', '=', 'ee.id_usuario')
            /*->leftJoin('catalogo_autodiagnostico as ca1', 'ca1.id', '=', 'a.id_actitud_abierta')
            ->leftJoin('catalogo_autodiagnostico as ca2', 'ca2.id', '=', 'a.id_ayuda')
            ->leftJoin('catalogo_autodiagnostico as ca3', 'ca3.id', '=', 'a.id_confianza')
            ->leftJoin('catalogo_autodiagnostico as ca4', 'ca4.id', '=', 'a.id_periodo_covid')
            ->leftJoin('catalogo_autodiagnostico as ca5', 'ca5.id', '=', 'a.id_motivacion')
            ->leftJoin('catalogo_autodiagnostico as ca6', 'ca6.id', '=', 'a.id_perfeccionista')
            ->leftJoin('catalogo_autodiagnostico as ca7', 'ca7.id', '=', 'a.id_considero_timido')*/

            ->select('ee.id as id',
                'u.name as usuario',
                'ee.ley_general as ley_general',
                'ee.contrato as contrato',
                'ee.descuento_afp as descuento_afp',
                'ee.acosado_trabajo as acosado_trabajo',
                'ee.beneficios_sociales1 as beneficios_sociales1',
                'ee.beneficios_sociales2 as beneficios_sociales2',
                'ee.beneficios_sociales3 as beneficios_sociales3',
                'ee.beneficios_sociales4 as beneficios_sociales4',
                'ee.beneficios_sociales5 as beneficios_sociales5',
                'ee.beneficios_sociales6 as beneficios_sociales6',
                'ee.beneficios_sociales7 as beneficios_sociales7',

                'ee.proceso_comunicacion as proceso_comunicacion',
                'ee.comunicacion_no_verbal as comunicacion_no_verbal',
                'ee.estructura_carta as estructura_carta',
                'ee.carta_presentacion1 as carta_presentacion1',
                'ee.carta_presentacion2 as carta_presentacion2',
                'ee.habilidades_blandas1 as habilidades_blandas1',
                'ee.habilidades_blandas2 as habilidades_blandas2',
                'ee.habilidades_blandas3 as habilidades_blandas3',
                'ee.habilidades_blandas4 as habilidades_blandas4',
                'ee.partes_cv as partes_cv',
                'ee.entrevista as entrevista',
                'ee.pae as pae',

                DB::raw('DATE_FORMAT( ee.fecha, "%d-%m-%Y") as fecha')


            )
            ->where('ee.id','=',$id)
            ->first();
    }



}
