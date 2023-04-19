<!--begin::Card-->
<div class="card card-custom gutter-b example example-compact">
    <div class="card-header justify-content-left">
        <h3 class="card-title">Autoconocimiento</h3>
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
                <!-- <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span> -->
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form method="post" action="{{ route('autodiagnostico_test.autoconocimiento.store') }}" id="form_test_autoconocimiento">
        <input type="hidden" class="form-control" value="{{ $data->tipo }}" name="tipo">
        @if ( $data->tipo == 'update' )
            <input type="hidden" class="form-control" id="id" name="id" @if ( $data->tipo == 'update') value="{{ $data->pid }}" @endif>
        @endif

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">1. Ante los consejos de los demás adoptó una actitud abierta:</label>
                <div class="col-lg-4">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_actitud_abierta" name="item[id_actitud_abierta]" required>
                        <option></option>
                        @foreach($data->autodiagnosticos as $autodiagnostico)
                            <option value="{{ $autodiagnostico->id }}" @if ($data->tipo == 'update' && $data->item->id_actitud_abierta == $autodiagnostico->id) selected="selected" @endif> {{ $autodiagnostico->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">2. Busco ayuda para mejor cuando me siento desortientado en un determinado tema:</label>
                <div class="col-lg-4">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_ayuda" name="item[id_ayuda]" required>
                        <option></option>
                        @foreach($data->autodiagnosticos as $autodiagnostico)
                            <option value="{{ $autodiagnostico->id }}" @if ($data->tipo == 'update' && $data->item->id_ayuda == $autodiagnostico->id) selected="selected" @endif> {{ $autodiagnostico->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">3. Tengo confianza en mis posibilidades y capacidades:</label>
                <div class="col-lg-4">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_confianza" name="item[id_confianza]" required>
                        <option></option>
                        @foreach($data->autodiagnosticos as $autodiagnostico)
                            <option value="{{ $autodiagnostico->id }}" @if ($data->tipo == 'update' && $data->item->id_confianza == $autodiagnostico->id) selected="selected" @endif> {{ $autodiagnostico->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">4. Durante este periodo de COVID me muestro resilente:</label>
                <div class="col-lg-4">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_periodo_covid" name="item[id_periodo_covid]" required>
                        <option></option>
                        @foreach($data->autodiagnosticos as $autodiagnostico)
                            <option value="{{ $autodiagnostico->id }}" @if ($data->tipo == 'update' && $data->item->id_periodo_covid == $autodiagnostico->id) selected="selected" @endif> {{ $autodiagnostico->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">5. Siento motivación por conseguir mis objetivos:</label>
                <div class="col-lg-4">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_motivacion" name="item[id_motivacion]" required>
                        <option></option>
                        @foreach($data->autodiagnosticos as $autodiagnostico)
                            <option value="{{ $autodiagnostico->id }}" @if ($data->tipo == 'update' && $data->item->id_motivacion == $autodiagnostico->id) selected="selected" @endif> {{ $autodiagnostico->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">6. Soy perfeccionista y suelo confundir la búsqueda de la perfección con la excelencia:</label>
                <div class="col-lg-4">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_perfeccionista" name="item[id_perfeccionista]" required>
                        <option></option>
                        @foreach($data->autodiagnosticos as $autodiagnostico)
                            <option value="{{ $autodiagnostico->id }}" @if ($data->tipo == 'update' && $data->item->id_perfeccionista == $autodiagnostico->id) selected="selected" @endif> {{ $autodiagnostico->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">7. Me considero un poco tímido, a pesar de tener siempre nuevas ideas en mi cabeza me cuesta expresarlas:</label>
                <div class="col-lg-4">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_considero_timido" name="item[id_considero_timido]" required>
                        <option></option>
                        @foreach($data->autodiagnosticos as $autodiagnostico)
                            <option value="{{ $autodiagnostico->id }}" @if ($data->tipo == 'update' && $data->item->id_considero_timido == $autodiagnostico->id) selected="selected" @endif> {{ $autodiagnostico->nombre }}</option>
                        @endforeach
                    </select>
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
<script src="{{ asset('scripts/autodiagnostico/test/autoconocimiento/index.js') }}" type="text/javascript"></script>






