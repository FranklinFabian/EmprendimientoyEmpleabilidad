<!--begin::Card-->
<div class="card card-custom gutter-b example example-compact">
    <div class="card-header justify-content-left">
        <h3 class="card-title">Breve Descripción</h3>
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
                <!-- <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span> -->
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form method="post" action="{{ route('empleabilidad_curriculo.descripcion.store') }}" id="form_empleabilidad_curriculo_descripcion">
        <input type="hidden" class="form-control" value="{{ $data->tipo }}" name="tipo">
        @if ( $data->tipo == 'update' )
            <input type="hidden" class="form-control" id="id" name="id" @if ( $data->tipo == 'update') value="{{ $data->item->id }}" @endif>
        @endif

        <div class="card-body">
            <div class="form-group">
                <textarea class="form-control" rows="3" name="item[descripcion]">@if ($data->tipo == 'update') {{ $data->item->descripcion }} @endif</textarea>
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
<script src="{{ asset('scripts/empleabilidad/curriculo/descripcion/index.js') }}" type="text/javascript"></script>






