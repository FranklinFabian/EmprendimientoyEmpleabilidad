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
    <form method="post" action="{{ route('emprendedurismo_elevador.general.store') }}" id="form_emprendedurismo_elevador_general">
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
                    <label>Llena tu necesidad (problema a resolver)</label>
                </div>
                <div class="form-group col-lg-8">
                    <textarea class="form-control" rows="3" name="item[necesidad]">@if ($data->tipo == 'update') {{ $data->item->necesidad }} @endif</textarea>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <label>Llena tus datos (datos de la problemática):</label>
                </div>
                <div class="form-group col-lg-8">
                    <textarea class="form-control" rows="3" name="item[problematica]">@if ($data->tipo == 'update') {{ $data->item->problematica }} @endif</textarea>
                </div>
            </div>

        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <label>Llena tu solución:</label>
                </div>
                <div class="form-group col-lg-8">
                    <textarea class="form-control" rows="3" name="item[solucion]">@if ($data->tipo == 'update') {{ $data->item->solucion }} @endif</textarea>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <label>En que nos diferenciamos:</label>
                </div>
                <div class="form-group col-lg-8">
                    <textarea class="form-control" rows="3" name="item[diferencia]">@if ($data->tipo == 'update') {{ $data->item->diferencia }} @endif</textarea>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <label>Recursos que necesitamos:</label>
                </div>
                <div class="form-group col-lg-8">
                    <textarea class="form-control" rows="3" name="item[recursos]">@if ($data->tipo == 'update') {{ $data->item->recursos }} @endif</textarea>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <label>Llena tu equipo:</label>
                </div>
                <div class="form-group col-lg-8">
                    <textarea class="form-control" rows="3" name="item[equipo]">@if ($data->tipo == 'update') {{ $data->item->equipo }} @endif</textarea>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <label>Llena tus experiencia:</label>
                </div>
                <div class="form-group col-lg-8">
                    <textarea class="form-control" rows="3" name="item[experiencia]">@if ($data->tipo == 'update') {{ $data->item->experiencia }} @endif</textarea>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <label>Casos de éxito:</label>
                </div>
                <div class="form-group col-lg-8">
                    <textarea class="form-control" rows="3" name="item[caso]">@if ($data->tipo == 'update') {{ $data->item->caso }} @endif</textarea>
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
<script src="{{ asset('scripts/emprendedurismo/elevador/general/index.js') }}" type="text/javascript"></script>






