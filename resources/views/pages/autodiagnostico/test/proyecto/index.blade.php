<!--begin::Card-->
<div class="card card-custom gutter-b example example-compact">
    <div class="card-header justify-content-left">
        <h3 class="card-title">Proyecto</h3>
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
                <!-- <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span> -->
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form method="post" action="{{ route('autodiagnostico_test.proyecto.store') }}" id="form_test_proyecto">

        <input type="hidden" class="form-control" value="{{ $data->tipo }}" name="tipo">
        @if ( $data->tipo == 'update' )
            <input type="hidden" class="form-control" id="id" name="id" @if ( $data->tipo == 'update') value="{{ $data->pid }}" @endif>
        @endif

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">1. Se encuentra satisfecho con su emprendimiento propio:</label>
                <div class="col-lg-4">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_satisfecho" name="item[id_satisfecho]" required>
                        <option></option>
                        @foreach($data->autodiagnosticos as $autodiagnostico)
                            <option value="{{ $autodiagnostico->id }}" @if ($data->tipo == 'update' && $data->item->id_satisfecho == $autodiagnostico->id) selected="selected" @endif> {{ $autodiagnostico->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">2. Me resulta fácil asignar tareas a los demás:</label>
                <div class="col-lg-4">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_asignar_tareas" name="item[id_asignar_tareas]" required>
                        <option></option>
                        @foreach($data->autodiagnosticos as $autodiagnostico)
                            <option value="{{ $autodiagnostico->id }}" @if ($data->tipo == 'update' && $data->item->id_asignar_tareas == $autodiagnostico->id) selected="selected" @endif> {{ $autodiagnostico->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">3. Soy capaz de trabajar en equipo:</label>
                <div class="col-lg-4">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_trabajo_equipo" name="item[id_trabajo_equipo]" required>
                        <option></option>
                        @foreach($data->autodiagnosticos as $autodiagnostico)
                            <option value="{{ $autodiagnostico->id }}" @if ($data->tipo == 'update' && $data->item->id_trabajo_equipo == $autodiagnostico->id) selected="selected" @endif> {{ $autodiagnostico->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">4. Puedo administrar mis recursos económicos eficientemente:</label>
                <div class="col-lg-4">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_administrar_recursos" name="item[id_administrar_recursos]" required>
                        <option></option>
                        @foreach($data->autodiagnosticos as $autodiagnostico)
                            <option value="{{ $autodiagnostico->id }}" @if ($data->tipo == 'update' && $data->item->id_administrar_recursos == $autodiagnostico->id) selected="selected" @endif> {{ $autodiagnostico->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">5. Puedo proyectarme a futuro en mi proyecto:</label>
                <div class="col-lg-4">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_proyectarme" name="item[id_proyectarme]" required>
                        <option></option>
                        @foreach($data->autodiagnosticos as $autodiagnostico)
                            <option value="{{ $autodiagnostico->id }}" @if ($data->tipo == 'update' && $data->item->id_proyectarme == $autodiagnostico->id) selected="selected" @endif> {{ $autodiagnostico->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">6. Planifico de forma rigurosa las acciones concretas para conseguir mis metas (plan de negocio, canvas y contabilidad):</label>
                <div class="col-lg-4">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_conseguir_metas" name="item[id_conseguir_metas]" required>
                        <option></option>
                        @foreach($data->autodiagnosticos as $autodiagnostico)
                            <option value="{{ $autodiagnostico->id }}" @if ($data->tipo == 'update' && $data->item->id_conseguir_metas == $autodiagnostico->id) selected="selected" @endif> {{ $autodiagnostico->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">7. Tengo una buena relación laboral con mis proveedores de negocio:</label>
                <div class="col-lg-4">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_relacion_proveedores" name="item[id_relacion_proveedores]" required>
                        <option></option>
                        @foreach($data->autodiagnosticos as $autodiagnostico)
                            <option value="{{ $autodiagnostico->id }}" @if ($data->tipo == 'update' && $data->item->id_relacion_proveedores == $autodiagnostico->id) selected="selected" @endif> {{ $autodiagnostico->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">8. Tengo una buena relación laboral con mis clientes:</label>
                <div class="col-lg-4">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_relacion_clientes" name="item[id_relacion_clientes]" required>
                        <option></option>
                        @foreach($data->autodiagnosticos as $autodiagnostico)
                            <option value="{{ $autodiagnostico->id }}" @if ($data->tipo == 'update' && $data->item->id_relacion_clientes == $autodiagnostico->id) selected="selected" @endif> {{ $autodiagnostico->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">9. Logre adaptar mi negocio a la digitalización comercial:</label>
                <div class="col-lg-4">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_adaptar_negocio" name="item[id_adaptar_negocio]" required>
                        <option></option>
                        @foreach($data->autodiagnosticos as $autodiagnostico)
                            <option value="{{ $autodiagnostico->id }}" @if ($data->tipo == 'update' && $data->item->id_adaptar_negocio == $autodiagnostico->id) selected="selected" @endif> {{ $autodiagnostico->nombre }}</option>
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
<script src="{{ asset('scripts/autodiagnostico/test/proyecto/index.js') }}" type="text/javascript"></script>






