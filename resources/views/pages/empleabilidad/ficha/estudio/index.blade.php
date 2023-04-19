<!--begin::Card-->
<div class="card card-custom gutter-b example example-compact">
    <div class="card-header justify-content-left">
        <h3 class="card-title">Estudios</h3>
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
                <!-- <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span> -->
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form method="post" action="{{ route('empleabilidad_ficha.estudio.store') }}" id="form_empleabilidad_ficha_estudio">
        <input type="hidden" class="form-control" value="{{ $data->tipo }}" name="tipo">
        @if ( $data->tipo == 'update' )
            <input type="hidden" class="form-control" id="id" name="id" @if ( $data->tipo == 'update') value="{{ $data->pid }}" @endif>
        @endif

        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group row">
                        <label class="col-lg-8 col-form-label">1. ¿Estudias Actualmente?:</label>
                        <div class="col-lg-4 col-form-label">
                            <div class="radio-list">
                                <label class="radio">
                                    <input type="radio" name="item[estudias_actualmente]" value="1" @if ($data->tipo == 'update') @if ($data->item->estudias_actualmente == 1) checked="checked" @endif @endif/>
                                    <span></span>
                                    Si
                                </label>
                                <label class="radio">
                                    <input type="radio" name="item[estudias_actualmente]" value="2" @if ($data->tipo == 'update') @if ($data->item->estudias_actualmente == 2) checked="checked" @endif @endif/>
                                    <span></span>
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>2. ¿Cuál es tu nivel de instrucción?:</label>
                        <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_nivel_instruccion" name="item[id_nivel_instruccion]" required>
                            <option></option>
                            @foreach($data->instrucciones as $instruccion)
                                <option value="{{ $instruccion->id }}" @if ($data->tipo == 'update' && $data->item->id_nivel_instruccion == $instruccion->id) selected="selected" @endif> {{ $instruccion->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>3. ¿Qué estudias?:</label>
                        <input type="text" name="item[estudio]" class="form-control"  @if ( $data->tipo == 'update') value="{{ $data->item->estudio }}" @endif/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>4. ¿En qué Institución?:</label>
                        <input type="text" name="item[institucion]" class="form-control"  @if ( $data->tipo == 'update') value="{{ $data->item->institucion }}" @endif/>
                    </div>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>5. Curso o Nivel:</label>
                        <input type="text" name="item[nivel]" class="form-control"  @if ( $data->tipo == 'update') value="{{ $data->item->nivel }}" @endif/>
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
<script src="{{ asset('scripts/empleabilidad/ficha/estudio/index.js') }}" type="text/javascript"></script>






