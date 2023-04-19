<?php

namespace App\Models\Empleabilidad\Ficha;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Item extends Model
{
    protected $guarded = [];

    protected  $table = 'ficha_social';

    public function dataTablesFiltrado($id){
        return DB::table('ficha_social as fs')
            ->select('fs.id as id',
                DB::raw('DATE_FORMAT( fs.fecha, "%d-%m-%Y") as fecha')
            )
            ->orderBy('fs.id', 'DESC');
    }

    public function obtenerData($id){
        return DB::table('ficha_social as fs')
            ->leftJoin('users as u', 'u.id', '=', 'fs.id_usuario')
            ->leftJoin('catalogo_estado_civil as cec', 'cec.id', '=', 'fs.id_estado_civil')
            ->leftJoin('catalogo_cantidad_hijos as cch', 'cch.id', '=', 'fs.id_cantidad_hijos')
            ->leftJoin('catalogo_nivel_instruccion as cni', 'cni.id', '=', 'fs.id_nivel_instruccion')
            ->leftJoin('catalogo_horario as ch', 'ch.id', '=', 'fs.id_horarios')
            ->leftJoin('catalogo_experiencia as ce', 'ch.id', '=', 'fs.id_tiempo')
            ->leftJoin('catalogo_familia as cf', 'cf.id', '=', 'fs.id_tiempo')
            ->leftJoin('catalogo_vivienda as cv', 'cv.id', '=', 'fs.id_tiempo')
            ->leftJoin('catalogo_tipo_vivienda as ctv', 'ctv.id', '=', 'fs.id_tiempo')
            ->select('fs.id as id',
                'u.name as usuario',
                'cec.nombre as estado_civil',
                'cch.nombre as cantidad_hijos',
                'fs.madre as madre',
                'fs.familia_madre as familia_madre',
                'fs.padre as padre',
                'fs.familia_padre as familia_padre',

                'fs.estudias_actualmente as estudias_actualmente',
                'cni.nombre as nivel_instruccion',
                'fs.estudio as estudio',
                'fs.institucion as institucion',
                'fs.nivel as nivel',

                'fs.trabajas_actualmente as trabajas_actualmente',
                'fs.empresa as empresa',
                'fs.cargo as cargo',
                'ch.nombre as horario',
                'fs.experiencia_laboral as experiencia_laboral',
                'ce.nombre as experiencia',
                'fs.area as area',
                'fs.negocio_familiar as negocio_familiar',
                'fs.rubro as rubro',
                'fs.trabajo_negocio as trabajo_negocio',
                'fs.capacitacion as capacitacion',
                'fs.certificado as certificado',
                'fs.conocimiento as conocimiento',
                'fs.integrante as integrante',

                'cf.nombre as familia',
                'cv.nombre as vivienda',
                'ctv.nombre as tipo_vivienda',
                'fs.agua as agua',
                'fs.energia_electrica as energia_electrica',
                'fs.gas as gas',
                'fs.sanitario as sanitario',
                'fs.telefono as telefono',
                'fs.celular as celular',
                'fs.internet as internet',
                'fs.tvcable as tvcable',

                'fs.ausencia as ausencia',
                'fs.ausencia_internet as ausencia_internet',
                'fs.ausencia_progenitores as ausencia_progenitores',
                'fs.escolaridad as escolaridad',
                'fs.discapacidad as discapacidad',
                'fs.ausencia_recursos as ausencia_recursos',
                'fs.violencia as violencia',
                'fs.tratamiento as tratamiento',
                'fs.dependientes as dependientes',
                'fs.inestabilidad as inestabilidad',
                'fs.desestabilidad_emocional as desestabilidad_emocional',
                'fs.otros as otros',

                DB::raw('DATE_FORMAT( fs.fecha, "%d-%m-%Y") as fecha')
            )
            ->where('fs.id','=',$id)
            ->first();


    }



}
