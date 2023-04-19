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
    <form method="post" action="{{ route('emprendedurismo_negocio.general.store') }}" id="form_emprendedurismo_negocio_general">
        <input type="hidden" class="form-control" value="{{ $data->tipo }}" name="tipo">
        @if ( $data->tipo == 'update' )
            <input type="hidden" class="form-control" id="id" name="id" @if ( $data->tipo == 'update') value="{{ $data->pid }}" @endif>
        @endif

        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <label>Cual es el nombre de tu idea de negocio:</label>
                </div>
                <div class="form-group col-lg-8">
                    <input type="text" name="item[nombre]" class="form-control"  @if ( $data->tipo == 'update') value="{{ $data->item->nombre }}" @endif/>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <label>Tu idea de negocio será de:</label>
                </div>
                <div class="col-lg-6">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_idea_negocio" name="item[id_idea_negocio]" required>
                        <option></option>
                        @foreach($data->ideanegocios as $ideanegocio)
                            <option value="{{ $ideanegocio->id }}" @if ($data->tipo == 'update' && $data->item->id_idea_negocio == $ideanegocio->id) selected="selected" @endif> {{ $ideanegocio->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

         <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <label>Cuan costoso es llevar a cabo tu idea:</label>
                </div>
                <div class="col-lg-6">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_costoso" name="item[id_costoso]" required>
                        <option></option>
                        @foreach( $data->costosos as $costoso)
                            <option value="{{ $costoso->id }}" @if ($data->tipo == 'update' && $data->item->id_costoso == $costoso->id) selected="selected" @endif> {{ $costoso->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <label>Hacer tu idea de negocio será:</label>
                </div>
                <div class="col-lg-6">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_hacer_idea" name="item[id_hacer_idea]" required>
                        <option></option>
                        @foreach($data->hacerideas as $haceridea)
                            <option value="{{ $haceridea->id }}" @if ($data->tipo == 'update' && $data->item->id_hacer_idea == $haceridea->id) selected="selected" @endif> {{ $haceridea->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <label>Te gusta tu idea de negocio:</label>
                </div>
                <div class="col-lg-6">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_gusta_idea" name="item[id_gusta_idea]" required>
                        <option></option>
                        @foreach($data->gustaideas as $gustaidea)
                            <option value="{{ $gustaidea->id }}" @if ($data->tipo == 'update' && $data->item->id_gusta_idea == $gustaidea->id) selected="selected" @endif> {{ $gustaidea->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <label>Conoces del proceso de fabricación para llevar a cabo tu idea:</label>
                </div>
                <div class="col-lg-6">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_conocer_proceso" name="item[id_conocer_proceso]" required>
                        <option></option>
                        @foreach($data->conocerprocesos as $conocerproceso)
                            <option value="{{ $conocerproceso->id }}" @if ($data->tipo == 'update' && $data->item->id_conocer_proceso == $conocerproceso->id) selected="selected" @endif> {{ $conocerproceso->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <label>Cuentas con El Dinero Para Hacerlo:</label>
                </div>
                <div class="col-lg-6">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_dinero" name="item[id_dinero]" required>
                        <option></option>
                        @foreach($data->dineros as $dinero)
                            <option value="{{ $dinero->id }}" @if ($data->tipo == 'update' && $data->item->id_dinero == $dinero->id) selected="selected" @endif> {{ $dinero->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <label>Cuentas con algún apoyo para llevar a cabo tu idea de negocio:</label>
                </div>
                <div class="col-lg-6">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_apoyo" name="item[id_apoyo]" required>
                        <option></option>
                        @foreach($data->apoyos as $apoyo)
                            <option value="{{ $apoyo->id }}" @if ($data->tipo == 'update' && $data->item->id_apoyo == $apoyo->id) selected="selected" @endif> {{ $apoyo->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <label>Conoces a Tus Proveedores o Compradores:</label>
                </div>
                <div class="col-lg-6">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_proveedores_compradores" name="item[id_proveedores_compradores]" required>
                        <option></option>
                        @foreach($data->proveedorescompradores as $proveedorcomprador)
                            <option value="{{ $proveedorcomprador->id }}" @if ($data->tipo == 'update' && $data->item->id_proveedores_compradores == $proveedorcomprador->id) selected="selected" @endif> {{ $proveedorcomprador->nombre }}</option>
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
<script src="{{ asset('scripts/emprendedurismo/negocio/general/index.js') }}" type="text/javascript"></script>






