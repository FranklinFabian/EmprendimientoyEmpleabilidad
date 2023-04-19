<!--begin::Card-->
<div class="card card-custom gutter-b example example-compact">
    <div class="card-header justify-content-left">
        <h3 class="card-title">Derechos Laborales</h3>
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
                <!-- <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span> -->
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form method="post" action="{{ route('empleabilidad_evaluacion.laboral.store') }}" id="form_empleabilidad_evaluacion_laboral">
        <input type="hidden" class="form-control" value="{{ $data->tipo }}" name="tipo">
        @if ( $data->tipo == 'update' )
            <input type="hidden" class="form-control" id="id" name="id" @if ( $data->tipo == 'update') value="{{ $data->pid }}" @endif>
        @endif

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">1. La Ley General del Trabajo se inicia el año 1942, establece los siguientes derechos de los empleados:</label>
                <div class="col-lg-4 col-form-label">
                    <div class="radio-list">
                        <label class="radio">
                            <input type="radio" name="item[ley_general]" value="1" @if ($data->tipo == 'update') @if ($data->item->ley_general == 1) checked="checked" @endif @endif/>
                            <span></span>
                            a. Renuncia voluntaria del empleado
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[ley_general]" value="2" @if ($data->tipo == 'update') @if ($data->item->ley_general == 2) checked="checked" @endif @endif/>
                            <span></span>
                            b. Indemnización por despido sin causa
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[ley_general]" value="3" @if ($data->tipo == 'update') @if ($data->item->ley_general == 3) checked="checked" @endif @endif/>
                            <span></span>
                            c. Terminación justificada
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">2. Señale dos características principales de un contrato :</label>
                <div class="col-lg-4 col-form-label">
                    <div class="radio-list">
                        <label class="radio">
                            <input type="radio" name="item[contrato]" value="1" @if ($data->tipo == 'update') @if ($data->item->contrato == 1) checked="checked" @endif @endif/>
                            <span></span>
                            a. Es individual o colectivo y se puede celebrar de palabra o escrito
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[contrato]" value="2" @if ($data->tipo == 'update') @if ($data->item->contrato == 2) checked="checked" @endif @endif/>
                            <span></span>
                            b. Si el trabajo se realiza en un lugar distinto, el trabajador deberá sufragar gastos de viaje y de estipendio.
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[contrato]" value="3" @if ($data->tipo == 'update') @if ($data->item->contrato == 3) checked="checked" @endif @endif/>
                            <span></span>
                            c. Solo pueden trabajar a partir de los 22 años
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">3. El monto que te descuentan por AFP va a:</label>
                <div class="col-lg-4 col-form-label">
                    <div class="radio-list">
                        <label class="radio">
                            <input type="radio" name="item[descuento_afp]" value="1" @if ($data->tipo == 'update') @if ($data->item->descuento_afp == 1) checked="checked" @endif @endif/>
                            <span></span>
                            a. Seguro laboral y salud
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[descuento_afp]" value="2" @if ($data->tipo == 'update') @if ($data->item->descuento_afp == 2) checked="checked" @endif @endif/>
                            <span></span>
                            b. Seguro ocupacional
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[descuento_afp]" value="3" @if ($data->tipo == 'update') @if ($data->item->descuento_afp == 3) checked="checked" @endif @endif/>
                            <span></span>
                            c. Seguro patronal
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">4. Si eres acosado en el trabajo que debes hacer:</label>
                <div class="col-lg-4 col-form-label">
                    <div class="radio-list">
                        <label class="radio">
                            <input type="radio" name="item[acosado_trabajo]" value="1" @if ($data->tipo == 'update') @if ($data->item->acosado_trabajo == 1) checked="checked" @endif @endif/>
                            <span></span>
                            a. Poner un alto
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[acosado_trabajo]" value="2" @if ($data->tipo == 'update') @if ($data->item->acosado_trabajo == 2) checked="checked" @endif @endif/>
                            <span></span>
                            b. Aprender a decir no
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[acosado_trabajo]" value="3" @if ($data->tipo == 'update') @if ($data->item->acosado_trabajo == 3) checked="checked" @endif @endif/>
                            <span></span>
                            c. Mostrar seguridad
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[acosado_trabajo]" value="4" @if ($data->tipo == 'update') @if ($data->item->acosado_trabajo == 4) checked="checked" @endif @endif/>
                            <span></span>
                            d. Denunciar
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>


        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">5. Entre los beneficios sociales que tienen los trabajadores están las licencias que se otorgan por diversas causas, seleccione cuatro de ellas:</label>
                <div class="col-lg-4 col-form-label">
                    <div class="checkbox-list">
                        <label class="checkbox">
                            <input type="checkbox" name="item[beneficios_sociales1]" value="1" @if ($data->tipo == 'update') @if ($data->item->beneficios_sociales1 == 1) checked="checked" @endif @endif/>
                            <span></span>
                            a. Maternidad
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="item[beneficios_sociales2]" value="2" @if ($data->tipo == 'update') @if ($data->item->beneficios_sociales2 == 2) checked="checked" @endif @endif/>
                            <span></span>
                            b. Fallecimiento
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="item[beneficios_sociales3]" value="3" @if ($data->tipo == 'update') @if ($data->item->beneficios_sociales3 == 3) checked="checked" @endif @endif/>
                            <span></span>
                            c. Paternidad
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="item[beneficios_sociales4]" value="4" @if ($data->tipo == 'update') @if ($data->item->beneficios_sociales4 == 4) checked="checked" @endif @endif/>
                            <span></span>
                            d. Matrimonio de un familiar
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="item[beneficios_sociales5]" value="5" @if ($data->tipo == 'update') @if ($data->item->beneficios_sociales5 == 5) checked="checked" @endif @endif/>
                            <span></span>
                            e. Examen médico de Papanicolaou, mamografía, próstata, colon
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="item[beneficios_sociales6]" value="6" @if ($data->tipo == 'update') @if ($data->item->beneficios_sociales6 == 6) checked="checked" @endif @endif/>
                            <span></span>
                            f. Estado crítico de salud
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="item[beneficios_sociales7]" value="7" @if ($data->tipo == 'update') @if ($data->item->beneficios_sociales7 == 7) checked="checked" @endif @endif/>
                            <span></span>
                            g. Revisión periódica salud madre o padre
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">6. La norma establece que la relación laboral tiene los siguientes elementos que deben estar incluidos en el contrato de trabajo: </label>
                <div class="col-lg-4 col-form-label">
                    <div class="radio-list">
                        <label class="radio">
                            <input type="radio" name="item[relacion_laboral]" value="1" @if ($data->tipo == 'update') @if ($data->item->relacion_laboral == 1) checked="checked" @endif @endif/>
                            <span></span>
                            a. La prestación del servicio en un horario específico.
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[relacion_laboral]" value="2" @if ($data->tipo == 'update') @if ($data->item->relacion_laboral == 2) checked="checked" @endif @endif/>
                            <span></span>
                            b. La subordinación y dependencia.
                        </label>
                        <label class="radio">
                            <input type="radio" name="item[relacion_laboral]" value="3" @if ($data->tipo == 'update') @if ($data->item->relacion_laboral == 3) checked="checked" @endif @endif/>
                            <span></span>
                            c. El monto del salario o remuneración.
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>


        <div class="card-footer">
            <button type="submit" class="btn btn-primary float-right">Guardar</button>
        </div>
    </form>
    <!--end::Form-->
</div>
<!--end::Card-->

{{-- Scripts Section --}}
<script src="{{ asset('scripts/empleabilidad/evaluacion/laboral/index.js') }}" type="text/javascript"></script>






