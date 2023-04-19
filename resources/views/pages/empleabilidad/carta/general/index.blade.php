<form method="post" action="{{ route('empleabilidad_carta.general.store') }}" id="form_empleabilidad_carta_general">
    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header justify-content-left">
            <h3 class="card-title">General</h3>
            <div class="card-toolbar">
                <div class="example-tools justify-content-center">
                    <!-- <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span> -->
                </div>
            </div>
        </div>

        <input type="hidden" class="form-control" value="{{ $data->tipo }}" name="tipo">
        @if ( $data->tipo == 'update' )
            <input type="hidden" class="form-control" id="id" name="id" @if ( $data->tipo == 'update') value="{{ $data->item->id }}" @endif>
        @endif


        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="col-lg-8 col-form-label">Institución Destinatario:</label>
                        <input type="text" name="item[institucion]" class="form-control"  @if ( $data->tipo == 'update') value="{{ $data->item->institucion }}" @endif/>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="col-lg-8 col-form-label">Nombre Destinatario:</label>
                        <input type="text" name="item[nombre]" class="form-control"  @if ( $data->tipo == 'update') value="{{ $data->item->nombre }}" @endif/>
                    </div>
                </div>
            </div>

            <div class="separator separator-dashed"></div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="col-lg-8 col-form-label">Cargo Destinatario:</label>
                        <input type="text" name="item[cargo]" class="form-control"  @if ( $data->tipo == 'update') value="{{ $data->item->cargo }}" @endif/>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="col-lg-8 col-form-label">Referencia:</label>
                        <input type="text" name="item[referencia]" class="form-control"  @if ( $data->tipo == 'update') value="{{ $data->item->referencia }}" @endif/>
                    </div>
                </div>
            </div>

            <div class="separator separator-dashed"></div>
            <br>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="name" class="form-control-label">
                            Párrafo que explique el motivo de la carta e informe las potencialidades y las intenciones de aportar a la empresa
                        </label>
                        <textarea class="form-control" rows="3" name="item[parrafo_motivo]">@if ($data->tipo == 'update') {{ $data->item->parrafo_motivo }} @endif</textarea>
                    </div>
                </div>
            </div>

            <div class="separator separator-dashed"></div>
            <br>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="name" class="form-control-label">
                            Párrafo que expresa el motivo por el que se postula al puesto
                        </label>
                        <textarea class="form-control" rows="3" name="item[parrafo_puesto]">@if ($data->tipo == 'update') {{ $data->item->parrafo_puesto }} @endif</textarea>
                    </div>
                </div>
            </div>

            <div class="separator separator-dashed"></div>
            <br>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="name" class="form-control-label">
                            Párrafo donde se manifiesta interés por concertar la cita
                        </label>
                        <textarea class="form-control" rows="3" name="item[parrafo_interes]">@if ($data->tipo == 'update') {{ $data->item->parrafo_interes }} @endif</textarea>
                    </div>
                </div>
            </div>

            <div class="separator separator-dashed"></div>
            <br>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="name" class="form-control-label">
                            Despedida
                        </label>
                        <textarea class="form-control" rows="3" name="item[parrafo_despedida]">@if ($data->tipo == 'update') {{ $data->item->parrafo_despedida }} @endif</textarea>
                    </div>
                </div>
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary float-right">Guardar</button>
        </div>

    </div>
</form>

{{-- Scripts Section --}}
<script src="{{ asset('scripts/empleabilidad/carta/general/index.js') }}" type="text/javascript"></script>






