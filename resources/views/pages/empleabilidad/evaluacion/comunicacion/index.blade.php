<!--begin::Card-->
<div class="card card-custom gutter-b example example-compact">
    <div class="card-header justify-content-left">
        <h3 class="card-title">Comunicación Eficaz </h3>
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
                <!-- <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span> -->
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form method="post" action="{{ route('empleabilidad_evaluacion.comunicacion.store') }}" id="form_empleabilidad_evaluacion_comunicacion">
        <input type="hidden" class="form-control" value="{{ $data->tipo }}" name="tipo">
        @if ( $data->tipo == 'update' )
            <input type="hidden" class="form-control" id="id" name="id" @if ( $data->tipo == 'update') value="{{ $data->pid }}" @endif>
        @endif

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">7. En el proceso de comunicación el emisor genera el mensaje y lo emite utilizando el ………………. (memorándum, correo electrónico, etc.), el receptor lo recibe y lo asimila; el proceso de comunicación permitirá que el receptor decodifique y comprenda el mensaje recibido :</label>
                <div class="col-lg-4 col-form-label">
                    <div class="radio-list">
                        <label>
                            <input type="text" name="item[proceso_comunicacion]" class="form-control"  @if ( $data->tipo == 'update') value="{{ $data->item->proceso_comunicacion }}" @endif/>
                            <span></span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="separator separator-dashed"></div>

            <div class="form-group row">
                <label class="col-lg-8 col-form-label">8. La comunicación no verbal se refiere a ……………… , …………….  los movimientos de cuerpo, la entonación, sonidos y otros elementos que acompañan al lenguaje verbal</label>
                <div class="col-lg-4 col-form-label">
                    <div class="radio-list">
                        <label>
                            <input type="text" name="item[comunicacion_no_verbal]" class="form-control"  @if ( $data->tipo == 'update') value="{{ $data->item->comunicacion_no_verbal }}" @endif/>
                            <span></span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="separator separator-dashed"></div>

            <div class="form-group row">
                <label class="col-lg-8 col-form-label">9. La estructura que debe presentar la carta de presentación laboral</label>
                <div class="col-lg-4 col-form-label">
                    <div class="radio-list">
                        <label class="radio">
                            <input type="radio" name="item[estructura_carta]" value="1" @if ($data->tipo == 'update') @if ($data->item->estructura_carta == 1) checked="checked" @endif @endif/>
                            <span></span>
                            a. Datos básicos, texto central y despedida
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[estructura_carta]" value="2" @if ($data->tipo == 'update') @if ($data->item->estructura_carta == 2) checked="checked" @endif @endif/>
                            <span></span>
                            b. Fecha, contenido y cierre
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[estructura_carta]" value="3" @if ($data->tipo == 'update') @if ($data->item->estructura_carta == 3) checked="checked" @endif @endif/>
                            <span></span>
                            c. Inicio, desarrollo y conclusión
                        </label>
                    </div>
                </div>
            </div>

            <div class="separator separator-dashed"></div>

            <div class="form-group row">
                <div class="col-lg-8 col-form-label">
                    <label><br>&nbsp;10. La carta de presentación debe tener tres partes claves, complete los que falten:</label>
                    <label><br>&nbsp;párrafo que motivo e informe por qué ha postulado </label>
                    <label><br>&nbsp;párrafo que expresa el ………….  por el que se postula al puesto </label>
                    <label><br>&nbsp;Párrafo donde se manifiesta ……………. por concertar la cita</label>
                </div>
                <div class="col-lg-4 col-form-label">
                    <div class="radio-list">
                        <label><br>
                            <input type="text" name="item[carta_presentacion1]" class="form-control"  @if ( $data->tipo == 'update') value="{{ $data->item->carta_presentacion1 }}" @endif/>
                            <span></span>
                        </label>
                        <label><br>
                            <input type="text" name="item[carta_presentacion2]" class="form-control"  @if ( $data->tipo == 'update') value="{{ $data->item->carta_presentacion2 }}" @endif/>
                            <span></span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="separator separator-dashed"></div>

            <div class="form-group row">
                <label class="col-lg-8 col-form-label">11. Las habilidades blandas tienen que ver con los comportamientos y aptitudes, seleccione 2 habilidades la que consideres más importantes:</label>
                <div class="col-lg-4 col-form-label">
                    <div class="checkbox-list">
                        <label class="checkbox">
                            <input type="checkbox" name="item[habilidades_blandas1]" value="1" @if ($data->tipo == 'update') @if ($data->item->habilidades_blandas1 == 1) checked="checked" @endif @endif/>
                            <span></span>
                            a. Capacidad física
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="item[habilidades_blandas2]" value="2" @if ($data->tipo == 'update') @if ($data->item->habilidades_blandas2 == 2) checked="checked" @endif @endif/>
                            <span></span>
                            b. Resolución de conflictos
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="item[habilidades_blandas3]" value="3" @if ($data->tipo == 'update') @if ($data->item->habilidades_blandas3 == 3) checked="checked" @endif @endif/>
                            <span></span>
                            c. Capacidad lógica matemático
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="item[habilidades_blandas4]" value="4" @if ($data->tipo == 'update') @if ($data->item->habilidades_blandas4 == 4) checked="checked" @endif @endif/>
                            <span></span>
                            d. Comunicación asertiva
                        </label>
                    </div>
                </div>
            </div>

            <div class="separator separator-dashed"></div>

            <div class="form-group row">
                <div class="col-lg-8 col-form-label">
                    <label><br>&nbsp;12. Completa las partes del currículum vitae son:</label>
                    <label><br>&nbsp;Datos personales</label>
                    <label><br>&nbsp;Formación básica y superior</label>
                    <label><br>&nbsp;…………………………………</label>
                    <label><br>&nbsp;Competencias informáticas</label>
                    <label><br>&nbsp;Datos de referencia</label>
                </div>
                <div class="col-lg-4 col-form-label">
                    <div class="radio-list">
                        <label><br>
                            <input type="text" name="item[partes_cv]" class="form-control"  @if ( $data->tipo == 'update') value="{{ $data->item->partes_cv }}" @endif/>
                            <span></span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="separator separator-dashed"></div>

            <div class="form-group row">
                <div class="col-lg-8 col-form-label">
                    <label>&nbsp;13. La entrevista es un proceso de selección de personal que se aplica para elegir a la persona idónea para un cargo, se centra en la recepción y evaluación de la información del postulante, complete las fases de la entrevista: </label>
                    <label>&nbsp;Charla introductoria </label>
                    <label>&nbsp;………………………………………………. </label>
                    <label>&nbsp;clarificación de dudas</label>
                    <label>&nbsp;despedida</label>
                </div>
                <div class="col-lg-4 col-form-label">
                    <div class="radio-list">
                        <label><br>
                            <input type="text" name="item[entrevista]" class="form-control"  @if ( $data->tipo == 'update') value="{{ $data->item->entrevista }}" @endif/>
                            <span></span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="separator separator-dashed"></div>

            <div class="form-group row">
                <div class="col-lg-8 col-form-label">
                    <label><br>&nbsp;14. El PAE es un programa de intermediación laboral que tiene como objetivo mejorar la inserción laboral de los buscadores de empleo, para beneficiarte de las becas que ofrece este programa, completa los requisitos que debes cumplir como buscador de empleo:</label>
                    <label><br>&nbsp;Personas mayores de 18 años</label>
                    <label><br>&nbsp;Factura de agua, luz o gas</label>
                    <label><br>&nbsp;………………………………….</label>
                    <label><br>&nbsp;Cedula de identidad</label>
                    <label><br>&nbsp;Croquis de domicilio</label>
                    <label><br>&nbsp;Titulo mayor alcanzado</label>
                </div>
                <div class="col-lg-4 col-form-label">
                    <div class="radio-list">
                        <label><br>
                            <input type="text" name="item[pae]" class="form-control"  @if ( $data->tipo == 'update') value="{{ $data->item->pae }}" @endif/>
                            <span></span>
                        </label>
                    </div>
                </div>
            </div>





        </div>

        <!-- <div class="separator separator-dashed"></div> -->


        <div class="card-footer">
            <button type="submit" class="btn btn-primary float-right">Guardar</button>
        </div>
    </form>
    <!--end::Form-->
</div>
<!--end::Card-->

{{-- Scripts Section --}}
<script src="{{ asset('scripts/empleabilidad/evaluacion/comunicacion/index.js') }}" type="text/javascript"></script>






