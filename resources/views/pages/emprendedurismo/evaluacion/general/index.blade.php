<!--begin::Card-->
<div class="card card-custom gutter-b example example-compact">
    <div class="card-header justify-content-left">
        <h3 class="card-title"></h3>
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
                <!-- <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span> -->
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form method="post" action="{{ route('emprendedurismo_evaluacion.general.store') }}" id="form_emprendedurismo_evaluacion_general">
        <input type="hidden" class="form-control" value="{{ $data->tipo }}" name="tipo">
        @if ( $data->tipo == 'update' )
            <input type="hidden" class="form-control" id="id" name="id" @if ( $data->tipo == 'update') value="{{ $data->pid }}" @endif>
        @endif

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">1. Según el monitoreo global del emprendimiento cual es el porcentaje de emprendimientos que alcanza el tercer año de vida:</label>
                <div class="col-lg-4 col-form-label">
                    <div class="radio-list">
                        <label class="radio">
                            <input type="radio" name="item[monitoreo_global]" value="1" @if ($data->tipo == 'update') @if ($data->item->monitoreo_global == 1) checked="checked" @endif @endif/>
                            <span></span>
                            a. 40%
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[monitoreo_global]" value="2" @if ($data->tipo == 'update') @if ($data->item->monitoreo_global == 2) checked="checked" @endif @endif/>
                            <span></span>
                            b. 30%
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[monitoreo_global]" value="3" @if ($data->tipo == 'update') @if ($data->item->monitoreo_global == 3) checked="checked" @endif @endif/>
                            <span></span>
                            c. 55
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[monitoreo_global]" value="4" @if ($data->tipo == 'update') @if ($data->item->monitoreo_global == 4) checked="checked" @endif @endif/>
                            <span></span>
                            c. 70
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">2. ¿Qué tipo de emprendimientos existen?:</label>
                <div class="col-lg-4 col-form-label">
                    <div class="radio-list">
                        <label class="radio">
                            <input type="radio" name="item[tipo_emprendimientos]" value="1" @if ($data->tipo == 'update') @if ($data->item->tipo_emprendimientos == 1) checked="checked" @endif @endif/>
                            <span></span>
                            a. Por oportunidad
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[tipo_emprendimientos]" value="2" @if ($data->tipo == 'update') @if ($data->item->tipo_emprendimientos == 2) checked="checked" @endif @endif/>
                            <span></span>
                            b. Por necesidad
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[tipo_emprendimientos]" value="3" @if ($data->tipo == 'update') @if ($data->item->tipo_emprendimientos == 3) checked="checked" @endif @endif/>
                            <span></span>
                            c. Ambos
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[tipo_emprendimientos]" value="4" @if ($data->tipo == 'update') @if ($data->item->tipo_emprendimientos == 4) checked="checked" @endif @endif/>
                            <span></span>
                            c. Ninguno
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">3. ¿En cuantos niveles se divide la pirámide de Maslow?:</label>
                <div class="col-lg-4 col-form-label">
                    <div class="radio-list">
                        <label class="radio">
                            <input type="radio" name="item[piramide_maslow]" value="1" @if ($data->tipo == 'update') @if ($data->item->piramide_maslow == 1) checked="checked" @endif @endif/>
                            <span></span>
                            a. 4
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[piramide_maslow]" value="2" @if ($data->tipo == 'update') @if ($data->item->piramide_maslow == 2) checked="checked" @endif @endif/>
                            <span></span>
                            b. 6
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[piramide_maslow]" value="3" @if ($data->tipo == 'update') @if ($data->item->piramide_maslow == 3) checked="checked" @endif @endif/>
                            <span></span>
                            c. 3
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[piramide_maslow]" value="4" @if ($data->tipo == 'update') @if ($data->item->piramide_maslow == 4) checked="checked" @endif @endif/>
                            <span></span>
                            c. 5
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">4. ¿Cuál de estas afirmaciones es la correcta?:</label>
                <div class="col-lg-4 col-form-label">
                    <div class="radio-list">
                        <label class="radio">
                            <input type="radio" name="item[afirmaciones]" value="1" @if ($data->tipo == 'update') @if ($data->item->afirmaciones == 1) checked="checked" @endif @endif/>
                            <span></span>
                            a. El modelo Canvas está centrado en generar nuevas ideas y llevarlas a prototipado para verificar si el mercado está en búsqueda de las soluciones que está proponiendo
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[afirmaciones]" value="2" @if ($data->tipo == 'update') @if ($data->item->afirmaciones == 2) checked="checked" @endif @endif/>
                            <span></span>
                            b. El modelo Canvas es una herramienta de visualización de modelos de negocio pensada para empresas que ya están consolidadas en el mercado
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[afirmaciones]" value="3" @if ($data->tipo == 'update') @if ($data->item->afirmaciones == 3) checked="checked" @endif @endif/>
                            <span></span>
                            c. Al iniciar un negocio se pueden predecir todos los obstáculos que aparecerán en el camino o establecer un plan perfecto que garantice el éxito
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">5. ¿Cuántos componentes tiene el modelo CANVAS?:</label>
                <div class="col-lg-4 col-form-label">
                    <div class="radio-list">
                        <label class="radio">
                            <input type="radio" name="item[modelo_canvas]" value="1" @if ($data->tipo == 'update') @if ($data->item->modelo_canvas == 1) checked="checked" @endif @endif/>
                            <span></span>
                            a. 5
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[modelo_canvas]" value="2" @if ($data->tipo == 'update') @if ($data->item->modelo_canvas == 2) checked="checked" @endif @endif/>
                            <span></span>
                            b. 10
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[modelo_canvas]" value="3" @if ($data->tipo == 'update') @if ($data->item->modelo_canvas == 3) checked="checked" @endif @endif/>
                            <span></span>
                            c. 9
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[modelo_canvas]" value="4" @if ($data->tipo == 'update') @if ($data->item->modelo_canvas == 4) checked="checked" @endif @endif/>
                            <span></span>
                            c. 8
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">6. La segmentación de clientes se refiere a:</label>
                <div class="col-lg-4 col-form-label">
                    <div class="radio-list">
                        <label class="radio">
                            <input type="radio" name="item[segmentacion_clientes]" value="1" @if ($data->tipo == 'update') @if ($data->item->segmentacion_clientes == 1) checked="checked" @endif @endif/>
                            <span></span>
                            a. El total de consumidores de un producto que se encuentra en el mercado
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[segmentacion_clientes]" value="2" @if ($data->tipo == 'update') @if ($data->item->segmentacion_clientes == 2) checked="checked" @endif @endif/>
                            <span></span>
                            b. Al proceso de división de consumidores en grupos menores con problemas necesidades o deseos similares que tengan características y necesidades homogéneas.
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[segmentacion_clientes]" value="3" @if ($data->tipo == 'update') @if ($data->item->segmentacion_clientes == 3) checked="checked" @endif @endif/>
                            <span></span>
                            c. Al proceso de división de consumidores en grupos menores con problemas necesidades o deseos diferentes que tengan características y necesidades heterogéneas.
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">7. Cuales son los tipos de costos:</label>
                <div class="col-lg-4 col-form-label">
                    <div class="radio-list">
                        <label class="radio">
                            <input type="radio" name="item[tipos_costos]" value="1" @if ($data->tipo == 'update') @if ($data->item->tipos_costos == 1) checked="checked" @endif @endif/>
                            <span></span>
                            a. Costos fijos
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[tipos_costos]" value="2" @if ($data->tipo == 'update') @if ($data->item->tipos_costos == 2) checked="checked" @endif @endif/>
                            <span></span>
                            b. Costos variables
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[tipos_costos]" value="3" @if ($data->tipo == 'update') @if ($data->item->tipos_costos == 3) checked="checked" @endif @endif/>
                            <span></span>
                            c. Ambos
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[tipos_costos]" value="4" @if ($data->tipo == 'update') @if ($data->item->tipos_costos == 4) checked="checked" @endif @endif/>
                            <span></span>
                            c. Ninguno
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">8. Los costos fijos son:</label>
                <div class="col-lg-4 col-form-label">
                    <div class="radio-list">
                        <label class="radio">
                            <input type="radio" name="item[costos_fijos]" value="1" @if ($data->tipo == 'update') @if ($data->item->costos_fijos == 1) checked="checked" @endif @endif/>
                            <span></span>
                            a. El desembolso de dinero que no genera ganancias para el negocio
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[costos_fijos]" value="2" @if ($data->tipo == 'update') @if ($data->item->costos_fijos == 2) checked="checked" @endif @endif/>
                            <span></span>
                            b. El desembolso de dinero en los que incurre el negocio para la fabricación de un determinado producto o servicio
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[costos_fijos]" value="3" @if ($data->tipo == 'update') @if ($data->item->costos_fijos == 3) checked="checked" @endif @endif/>
                            <span></span>
                            c. El desembolso de dinero que debe asumir la empresa produzca o no
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">9. ¿A que se refiere la depreciación?:</label>
                <div class="col-lg-4 col-form-label">
                    <div class="radio-list">
                        <label class="radio">
                            <input type="radio" name="item[depreciacion]" value="1" @if ($data->tipo == 'update') @if ($data->item->depreciacion == 1) checked="checked" @endif @endif/>
                            <span></span>
                            a. Desgaste o perdida de valor de los bienes en uso
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[depreciacion]" value="2" @if ($data->tipo == 'update') @if ($data->item->depreciacion == 2) checked="checked" @endif @endif/>
                            <span></span>
                            b. Incremento de valor de los activos fijos del negocio
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[depreciacion]" value="3" @if ($data->tipo == 'update') @if ($data->item->depreciacion == 3) checked="checked" @endif @endif/>
                            <span></span>
                            c. Parte del costo variable para la fabricación de un producto
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">10. Que características poseen los productos o servicios sin excepción:</label>
                <div class="col-lg-4 col-form-label">
                    <div class="radio-list">
                        <label class="radio">
                            <input type="radio" name="item[productos_servicios]" value="1" @if ($data->tipo == 'update') @if ($data->item->productos_servicios == 1) checked="checked" @endif @endif/>
                            <span></span>
                            a. Producto esencial,
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[productos_servicios]" value="2" @if ($data->tipo == 'update') @if ($data->item->productos_servicios == 2) checked="checked" @endif @endif/>
                            <span></span>
                            b. Producto real, producto aumentado
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[productos_servicios]" value="3" @if ($data->tipo == 'update') @if ($data->item->productos_servicios == 3) checked="checked" @endif @endif/>
                            <span></span>
                            c. Producto segmentado
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[productos_servicios]" value="4" @if ($data->tipo == 'update') @if ($data->item->productos_servicios == 4) checked="checked" @endif @endif/>
                            <span></span>
                            c. Incisos “a”,” b”
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[productos_servicios]" value="5" @if ($data->tipo == 'update') @if ($data->item->productos_servicios == 5) checked="checked" @endif @endif/>
                            <span></span>
                            c. Ninguno
                        </label>
                    </div>
                </div>
            </div>
        </div>





        <div class="card-footer">
            <button type="submit" class="btn btn-primary float-right">Guardar</button>
        </div>
    </form>
    <!--end::Form-->
</div>
<!--end::Card-->

{{-- Scripts Section --}}
<script src="{{ asset('scripts/emprendedurismo/evaluacion/general/index.js') }}" type="text/javascript"></script>






