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
    <form method="post" action="{{ route('emprendedurismo_cliente.general.store') }}" id="form_emprendedurismo_cliente_general">
        <input type="hidden" class="form-control" value="{{ $data->tipo }}" name="tipo">
        @if ( $data->tipo == 'update' )
            <input type="hidden" class="form-control" id="id" name="id" @if ( $data->tipo == 'update') value="{{ $data->pid }}" @endif>
        @endif

        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <label>Nombre del perfil de cliente:</label>
                </div>
                <div class="form-group col-lg-6">
                    <input type="text" name="item[nombre]" class="form-control"  @if ( $data->tipo == 'update') value="{{ $data->item->nombre }}" @endif/>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <label>Rango de edad para los clientes que llegara tu idea de negocio:</label>
                </div>
                <div class="form-group col-lg-6">
                    <input type="text" name="item[rango_edad]" class="form-control"  @if ( $data->tipo == 'update') value="{{ $data->item->rango_edad }}" @endif/>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group row">
                        <label class="col-lg-6 col-form-label">Sexo:</label>
                        <div class="col-lg-6 col-form-label">
                            <div class="radio-list">
                                <label class="radio">
                                    <input type="radio" name="item[sexo]" value="1" @if ($data->tipo == 'update') @if ($data->item->sexo == 1) checked="checked" @endif @endif/>
                                    <span></span>
                                    Hombre
                                </label>
                                <label class="radio">
                                    <input type="radio" name="item[sexo]" value="2" @if ($data->tipo == 'update') @if ($data->item->sexo == 2) checked="checked" @endif @endif/>
                                    <span></span>
                                    Mujer
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group row">
                        <label class="col-lg-6 col-form-label">Nivel Social:</label>
                        <div class="col-lg-6 col-form-label">
                            <div class="radio-list">
                                <label class="radio">
                                    <input type="radio" name="item[nivel_social]" value="1" @if ($data->tipo == 'update') @if ($data->item->nivel_social == 1) checked="checked" @endif @endif/>
                                    <span></span>
                                    Alto
                                </label>
                                <label class="radio">
                                    <input type="radio" name="item[nivel_social]" value="2" @if ($data->tipo == 'update') @if ($data->item->nivel_social == 2) checked="checked" @endif @endif/>
                                    <span></span>
                                    Medio
                                </label>
                                <label class="radio">
                                    <input type="radio" name="item[nivel_social]" value="3" @if ($data->tipo == 'update') @if ($data->item->nivel_social == 3) checked="checked" @endif @endif/>
                                    <span></span>
                                    Bajo
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <label>Ubicación Geográfica, ¿dónde se encuentran tus clientes? (Dirección, zona, calle):</label>
                </div>
                <div class="form-group col-lg-6">
                    <input type="text" name="item[ubicacion]" class="form-control"  @if ( $data->tipo == 'update') value="{{ $data->item->ubicacion }}" @endif/>
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
<script src="{{ asset('scripts/emprendedurismo/cliente/general/index.js') }}" type="text/javascript"></script>






