<!--begin::Card-->
<div class="card card-custom gutter-b example example-compact">
    <div class="card-header justify-content-left">
        <h3 class="card-title">Resolución de Conflictos</h3>
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
                <!-- <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span> -->
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form method="post"  action="{{ route('autodiagnostico_test.resolucion.store') }}" id="form_test_resolucion">

        <input type="hidden" class="form-control" value="{{ $data->tipo }}" name="tipo">
        @if ( $data->tipo == 'update' )
            <input type="hidden" class="form-control" id="id" name="id" @if ( $data->tipo == 'update') value="{{ $data->pid }}" @endif>
        @endif

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">1. Afronto los problemas con optimismo y las analizo con una mirada esperanzadora:</label>
                <div class="col-lg-4">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_afronto_problemas" name="item[id_afronto_problemas]" required>
                        <option></option>
                        @foreach($data->autodiagnosticos as $autodiagnostico)
                            <option value="{{ $autodiagnostico->id }}" @if ($data->tipo == 'update' && $data->item->id_afronto_problemas == $autodiagnostico->id) selected="selected" @endif> {{ $autodiagnostico->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">2. Tengo la predisposición para asumir retos:</label>
                <div class="col-lg-4">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_asumir_retos" name="item[id_asumir_retos]" required>
                        <option></option>
                        @foreach($data->autodiagnosticos as $autodiagnostico)
                            <option value="{{ $autodiagnostico->id }}" @if ($data->tipo == 'update' && $data->item->id_asumir_retos == $autodiagnostico->id) selected="selected" @endif> {{ $autodiagnostico->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">3. Es importante para mí disponer la autonomía en el trabajo, porque no me gusta regirme a un horario:</label>
                <div class="col-lg-4">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_autonomia_trabajo" name="item[id_autonomia_trabajo]" required>
                        <option></option>
                        @foreach($data->autodiagnosticos as $autodiagnostico)
                            <option value="{{ $autodiagnostico->id }}" @if ($data->tipo == 'update' && $data->item->id_autonomia_trabajo == $autodiagnostico->id) selected="selected" @endif> {{ $autodiagnostico->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">4. Me logre adoptar fácilmente a la era digital:</label>
                <div class="col-lg-4">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_era_digital" name="item[id_era_digital]" required>
                        <option></option>
                        @foreach($data->autodiagnosticos as $autodiagnostico)
                            <option value="{{ $autodiagnostico->id }}" @if ($data->tipo == 'update' && $data->item->id_era_digital == $autodiagnostico->id) selected="selected" @endif> {{ $autodiagnostico->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">5. Sacrificarías tu tiempo libre si el trabajo lo demanda:</label>
                <div class="col-lg-4">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_tiempo_libre" name="item[id_tiempo_libre]" required>
                        <option></option>
                        @foreach($data->autodiagnosticos as $autodiagnostico)
                            <option value="{{ $autodiagnostico->id }}" @if ($data->tipo == 'update' && $data->item->id_tiempo_libre == $autodiagnostico->id) selected="selected" @endif> {{ $autodiagnostico->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">6. Soy capaz de separar mis conflictos personales en el área laboral:</label>
                <div class="col-lg-4">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_conflictos_personales" name="item[id_conflictos_personales]" required>
                        <option></option>
                        @foreach($data->autodiagnosticos as $autodiagnostico)
                            <option value="{{ $autodiagnostico->id }}" @if ($data->tipo == 'update' && $data->item->id_conflictos_personales == $autodiagnostico->id) selected="selected" @endif> {{ $autodiagnostico->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">7. Expreso con claridad aquello que me causa malestar:</label>
                <div class="col-lg-4">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_expresar_malestar" name="item[id_expresar_malestar]" required>
                        <option></option>
                        @foreach($data->autodiagnosticos as $autodiagnostico)
                            <option value="{{ $autodiagnostico->id }}" @if ($data->tipo == 'update' && $data->item->id_expresar_malestar == $autodiagnostico->id) selected="selected" @endif> {{ $autodiagnostico->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">8. No me dejo llevar con mis impulsos emocionales:</label>
                <div class="col-lg-4">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_impulsos_emocionales" name="item[id_impulsos_emocionales]" required>
                        <option></option>
                        @foreach($data->autodiagnosticos as $autodiagnostico)
                            <option value="{{ $autodiagnostico->id }}" @if ($data->tipo == 'update' && $data->item->id_impulsos_emocionales == $autodiagnostico->id) selected="selected" @endif> {{ $autodiagnostico->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">9. Soy capaz de tolerar el stress en forma efectiva:</label>
                <div class="col-lg-4">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_tolerar_stress" name="item[id_tolerar_stress]" required>
                        <option></option>
                        @foreach($data->autodiagnosticos as $autodiagnostico)
                            <option value="{{ $autodiagnostico->id }}" @if ($data->tipo == 'update' && $data->item->id_tolerar_stress == $autodiagnostico->id) selected="selected" @endif> {{ $autodiagnostico->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>


        <div class="card-footer">
            <button type="submit" class="btn btn-primary float-right">Guardar</button>
            <!-- <button type="reset" class="btn btn-secondary float-right mr-2">Cancelar</button> -->
        </div>
    </form>
    <!--end::Form-->
</div>
<!--end::Card-->

{{-- Scripts Section --}}
<script src="{{ asset('scripts/autodiagnostico/test/resolucion/index.js') }}" type="text/javascript"></script>






