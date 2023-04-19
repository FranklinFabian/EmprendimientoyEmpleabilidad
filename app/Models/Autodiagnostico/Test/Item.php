<?php

namespace App\Models\Autodiagnostico\Test;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Item extends Model
{
    protected $guarded = [];

    protected  $table = 'autodiagnostico';

    public function dataTablesFiltrado($id){
        return DB::table('autodiagnostico as a')
            ->select('a.id as id',

                DB::raw('DATE_FORMAT( a.fecha, "%d-%m-%Y") as fecha')
            )
            ->orderBy('a.id', 'DESC');
    }

    public function obtenerData($id){
        return DB::table('autodiagnostico as a')
            ->leftJoin('catalogo_autodiagnostico as ca1', 'ca1.id', '=', 'a.id_actitud_abierta')
            ->leftJoin('catalogo_autodiagnostico as ca2', 'ca2.id', '=', 'a.id_ayuda')
            ->leftJoin('catalogo_autodiagnostico as ca3', 'ca3.id', '=', 'a.id_confianza')
            ->leftJoin('catalogo_autodiagnostico as ca4', 'ca4.id', '=', 'a.id_periodo_covid')
            ->leftJoin('catalogo_autodiagnostico as ca5', 'ca5.id', '=', 'a.id_motivacion')
            ->leftJoin('catalogo_autodiagnostico as ca6', 'ca6.id', '=', 'a.id_perfeccionista')
            ->leftJoin('catalogo_autodiagnostico as ca7', 'ca7.id', '=', 'a.id_considero_timido')
            ->leftJoin('catalogo_autodiagnostico as ca8', 'ca8.id', '=', 'a.id_afronto_problemas')
            ->leftJoin('catalogo_autodiagnostico as ca9', 'ca9.id', '=', 'a.id_asumir_retos')
            ->leftJoin('catalogo_autodiagnostico as ca10', 'ca10.id', '=', 'a.id_autonomia_trabajo')
            ->leftJoin('catalogo_autodiagnostico as ca11', 'ca11.id', '=', 'a.id_era_digital')
            ->leftJoin('catalogo_autodiagnostico as ca12', 'ca12.id', '=', 'a.id_tiempo_libre')
            ->leftJoin('catalogo_autodiagnostico as ca13', 'ca13.id', '=', 'a.id_conflictos_personales')
            ->leftJoin('catalogo_autodiagnostico as ca14', 'ca14.id', '=', 'a.id_expresar_malestar')
            ->leftJoin('catalogo_autodiagnostico as ca15', 'ca15.id', '=', 'a.id_impulsos_emocionales')
            ->leftJoin('catalogo_autodiagnostico as ca16', 'ca16.id', '=', 'a.id_tolerar_stress')
            ->leftJoin('catalogo_autodiagnostico as ca17', 'ca17.id', '=', 'a.id_satisfecho')
            ->leftJoin('catalogo_autodiagnostico as ca18', 'ca18.id', '=', 'a.id_asignar_tareas')
            ->leftJoin('catalogo_autodiagnostico as ca19', 'ca19.id', '=', 'a.id_trabajo_equipo')
            ->leftJoin('catalogo_autodiagnostico as ca20', 'ca20.id', '=', 'a.id_administrar_recursos')
            ->leftJoin('catalogo_autodiagnostico as ca21', 'ca21.id', '=', 'a.id_proyectarme')
            ->leftJoin('catalogo_autodiagnostico as ca22', 'ca22.id', '=', 'a.id_conseguir_metas')
            ->leftJoin('catalogo_autodiagnostico as ca23', 'ca23.id', '=', 'a.id_relacion_proveedores')
            ->leftJoin('catalogo_autodiagnostico as ca24', 'ca24.id', '=', 'a.id_relacion_clientes')
            ->leftJoin('catalogo_autodiagnostico as ca25', 'ca25.id', '=', 'a.id_adaptar_negocio')
            ->leftJoin('users as u', 'u.id', '=', 'a.id_usuario')
            ->select('a.id as id',
                'ca1.nombre as ca1',
                'ca2.nombre as ca2',
                'ca3.nombre as ca3',
                'ca4.nombre as ca4',
                'ca5.nombre as ca5',
                'ca6.nombre as ca6',
                'ca7.nombre as ca7',
                'ca8.nombre as ca8',
                'ca9.nombre as ca9',
                'ca10.nombre as ca10',
                'ca11.nombre as ca11',
                'ca12.nombre as ca12',
                'ca13.nombre as ca13',
                'ca14.nombre as ca14',
                'ca15.nombre as ca15',
                'ca16.nombre as ca16',
                'ca17.nombre as ca17',
                'ca18.nombre as ca18',
                'ca19.nombre as ca19',
                'ca20.nombre as ca20',
                'ca21.nombre as ca21',
                'ca22.nombre as ca22',
                'ca23.nombre as ca23',
                'ca24.nombre as ca24',
                'ca25.nombre as ca25',
                'u.name as usuario',
                DB::raw('DATE_FORMAT( a.fecha, "%d-%m-%Y") as fecha')
            )
            ->where('a.id','=',$id)
            ->first();
    }



}
