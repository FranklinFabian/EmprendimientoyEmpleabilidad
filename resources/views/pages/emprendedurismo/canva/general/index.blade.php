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
    <form method="post" action="{{ route('emprendedurismo_canva.general.store') }}" id="form_emprendedurismo_canva_general">
        <input type="hidden" class="form-control" value="{{ $data->tipo }}" name="tipo">
        @if ( $data->tipo == 'update' )
            <input type="hidden" class="form-control" id="id" name="id" @if ( $data->tipo == 'update') value="{{ $data->pid }}" @endif>
        @endif

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">Escoge tu idea de negocio</label>
                <div class="col-lg-4">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_negocio" name="item[id_negocio]" required>
                        <option></option>
                        @foreach($data->ideas as $idea)
                            <option value="{{ $idea->id }}" @if ($data->tipo == 'update' && $data->item->id_negocio == $idea->id) selected="selected" @endif> {{ $idea->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <label>Llena tu público objetivo</label>
                </div>
                <div class="form-group col-lg-8">
                    <textarea class="form-control" rows="3" name="item[publico_objetivo]">@if ($data->tipo == 'update') {{ $data->item->publico_objetivo }} @endif</textarea>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <label>Llena tu propuesta de valor:</label>
                </div>
                <div class="form-group col-lg-8">
                    <textarea class="form-control" rows="3" name="item[propuesta_valor]">@if ($data->tipo == 'update') {{ $data->item->propuesta_valor }} @endif</textarea>
                </div>
            </div>

        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <label>Llena tus canales:</label>
                </div>
                <div class="form-group col-lg-8">
                    <textarea class="form-control" rows="3" name="item[canal]">@if ($data->tipo == 'update') {{ $data->item->canal }} @endif</textarea>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <label>Llena tu relación con clientes:</label>
                </div>
                <div class="form-group col-lg-8">
                    <textarea class="form-control" rows="3" name="item[relacion_cliente]">@if ($data->tipo == 'update') {{ $data->item->relacion_cliente }} @endif</textarea>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <label>Llena tus fuentes de ingreso:</label>
                </div>
                <div class="form-group col-lg-8">
                    <textarea class="form-control" rows="3" name="item[fuente_ingreso]">@if ($data->tipo == 'update') {{ $data->item->fuente_ingreso }} @endif</textarea>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <label>Llena tus recuros clave:</label>
                </div>
                <div class="form-group col-lg-8">
                    <textarea class="form-control" rows="3" name="item[recurso_clave]">@if ($data->tipo == 'update') {{ $data->item->recurso_clave }} @endif</textarea>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <label>Llena tus actividades clave:</label>
                </div>
                <div class="form-group col-lg-8">
                    <textarea class="form-control" rows="3" name="item[actividad_clave]">@if ($data->tipo == 'update') {{ $data->item->actividad_clave }} @endif</textarea>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <label>Llena tus socios clave:</label>
                </div>
                <div class="form-group col-lg-8">
                    <textarea class="form-control" rows="3" name="item[socio_clave]">@if ($data->tipo == 'update') {{ $data->item->socio_clave }} @endif</textarea>
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
<script src="{{ asset('scripts/emprendedurismo/canva/general/index.js') }}" type="text/javascript"></script>






