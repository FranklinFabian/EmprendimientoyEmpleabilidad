<form class="kt-form" action="{{ route('empleabilidad_curriculo.referencia.store') }}" method="post" id="form_empleabilidad_curriculo_referencia">

    @csrf
    <div class="modal-header">
        <h5 class="modal-title kt-font-brand kt-font-bold" id="exampleModalLabel">
            @if ( $data->tipo == 'update' ) Editar @else Nuevo @endif
            Registro
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
                &times
            </span>
        </button>
    </div>
    <div class="modal-body">
        <input type="hidden" class="form-control" value="{{ $data->tipo }}" name="type">
        @if ( $data->tipo == 'update' )
            <input type="hidden" class="form-control" id="id" name="id" @if ( $data->tipo == 'update') value="{{ $data->id }}" @endif>
        @endif

        <input type="hidden" class="form-control" id="pid" name="item[id_curriculo]" value="{{ $data->pid }}">

        <div class="form-group row">
            <label class="col-lg-8 col-form-label">Tipo Referencia:</label>
            <div class="col-lg-4">
                <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_tipo_referencia" name="item[id_tipo_referencia]" required>
                    <option></option>
                    @foreach($data->tiposreferencia as $tiporeferencia)
                        <option value="{{ $tiporeferencia->id }}" @if ($data->tipo == 'update' && $data->item->id_tipo_referencia == $tiporeferencia->id) selected="selected" @endif> {{ $tiporeferencia->nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="form-control-label">
                Descripción:
            </label>
            <textarea class="form-control" rows="3" name="item[descripcion]">@if ($data->tipo == 'update') {{ $data->item->descripcion }} @endif</textarea>
        </div>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
            Cancelar
        </button>
        <button type="submit" class="btn btn-primary">
            @if ($data->tipo == 'update') Actualizar @else Guardar @endif
        </button>
    </div>
</form>

<script src="{{ asset('scripts/empleabilidad/curriculo/referencia/modal.js') }}" type="text/javascript"></script>
