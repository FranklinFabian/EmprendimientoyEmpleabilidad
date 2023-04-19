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
    <form method="post" action="{{ route('emprendedurismo_problematica.general.store') }}" id="form_emprendedurismo_problematica_general">
        <input type="hidden" class="form-control" value="{{ $data->tipo }}" name="tipo">
        @if ( $data->tipo == 'update' )
            <input type="hidden" class="form-control" id="id" name="id" @if ( $data->tipo == 'update') value="{{ $data->pid }}" @endif>
        @endif

        <div class="card-body">

            <div class="row">
                <div class="col-lg-4">
                    <label>Llena un problema de tu entorno:</label>
                </div>
                <div class="form-group col-lg-8">
                    <textarea class="form-control" rows="3" name="item[problema]">@if ($data->tipo == 'update') {{ $data->item->problema }} @endif</textarea>
                </div>
            </div>

        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <label>Llena una solución/Idea a este problema:</label>
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
                    <label>¿Como resuelve el problema, tu solución/idea?:</label>
                </div>
                <div class="form-group col-lg-8">
                    <textarea class="form-control" rows="3" name="item[resuelve]">@if ($data->tipo == 'update') {{ $data->item->resuelve }} @endif</textarea>
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
<script src="{{ asset('scripts/emprendedurismo/problematica/general/index.js') }}" type="text/javascript"></script>






