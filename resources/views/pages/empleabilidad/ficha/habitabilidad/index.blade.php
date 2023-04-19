<!--begin::Card-->
<div class="card card-custom gutter-b example example-compact">
    <div class="card-header justify-content-left">
        <h3 class="card-title">Condiciones de Habitabilidad</h3>
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
                <!-- <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span> -->
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form method="post" action="{{ route('empleabilidad_ficha.habitabilidad.store') }}" id="form_empleabilidad_ficha_habitabilidad">
        <input type="hidden" class="form-control" value="{{ $data->tipo }}" name="tipo">
        @if ( $data->tipo == 'update' )
            <input type="hidden" class="form-control" id="id" name="id" @if ( $data->tipo == 'update') value="{{ $data->pid }}" @endif>
        @endif

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">1. ¿Cuantos miembros de su familia viven contigo?:</label>
                <div class="col-lg-4">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_familia_viven" name="item[id_familia_viven]" required>
                        <option></option>
                        @foreach($data->familias as $familia)
                            <option value="{{ $familia->id }}" @if ($data->tipo == 'update' && $data->item->id_familia_viven == $familia->id) selected="selected" @endif> {{ $familia->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">2. Tu vivienda es:</label>
                <div class="col-lg-4">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_vivienda" name="item[id_vivienda]" required>
                        <option></option>
                        @foreach($data->viviendas as $vivienda)
                            <option value="{{ $vivienda->id }}" @if ($data->tipo == 'update' && $data->item->id_vivienda == $vivienda->id) selected="selected" @endif> {{ $vivienda->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="form-group row">
                <label class="col-lg-8 col-form-label">3. El tipo de  vivienda que habitas es:</label>
                <div class="col-lg-4">
                    <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_tipo_vivienda" name="item[id_tipo_vivienda]" required>
                        <option></option>
                        @foreach($data->tipoviviendas as $tipovivienda)
                            <option value="{{ $tipovivienda->id }}" @if ($data->tipo == 'update' && $data->item->id_tipo_vivienda == $tipovivienda->id) selected="selected" @endif> {{ $tipovivienda->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>



        <div class="card-body">

            <div class="row">
                <label class="col-lg-12 col-form-label">4. ¿Indica los servicios básicas que tienes en tu vivienda?:</label>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">

            <div class="row">

                <div class="col-lg-6">
                    <div class="form-group row">
                        <label class="col-lg-8 col-form-label">Agua:</label>
                        <div class="col-lg-4 col-form-label">
                            <div class="radio-list">
                                <label class="radio">
                                    <input type="radio" name="item[agua]" value="1" @if ($data->tipo == 'update') @if ($data->item->agua == 1) checked="checked" @endif @endif/>
                                    <span></span>
                                    Si
                                </label>
                                <label class="radio">
                                    <input type="radio" name="item[agua]" value="2" @if ($data->tipo == 'update') @if ($data->item->agua == 2) checked="checked" @endif @endif/>
                                    <span></span>
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group row">
                        <label class="col-lg-8 col-form-label">Energia Electrica:</label>
                        <div class="col-lg-4 col-form-label">
                            <div class="radio-list">
                                <label class="radio">
                                    <input type="radio" name="item[energia_electrica]" value="1" @if ($data->tipo == 'update') @if ($data->item->energia_electrica == 1) checked="checked" @endif @endif/>
                                    <span></span>
                                    Si
                                </label>
                                <label class="radio">
                                    <input type="radio" name="item[energia_electrica]" value="2" @if ($data->tipo == 'update') @if ($data->item->energia_electrica == 2) checked="checked" @endif @endif/>
                                    <span></span>
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group row">
                        <label class="col-lg-8 col-form-label">Gas:</label>
                        <div class="col-lg-4 col-form-label">
                            <div class="radio-list">
                                <label class="radio">
                                    <input type="radio" name="item[gas]" value="1" @if ($data->tipo == 'update') @if ($data->item->gas == 1) checked="checked" @endif @endif/>
                                    <span></span>
                                    Si
                                </label>
                                <label class="radio">
                                    <input type="radio" name="item[gas]" value="2" @if ($data->tipo == 'update') @if ($data->item->gas == 2) checked="checked" @endif @endif/>
                                    <span></span>
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group row">
                        <label class="col-lg-8 col-form-label">Servicio Sanitario:</label>
                        <div class="col-lg-4 col-form-label">
                            <div class="radio-list">
                                <label class="radio">
                                    <input type="radio" name="item[sanitario]" value="1" @if ($data->tipo == 'update') @if ($data->item->sanitario == 1) checked="checked" @endif @endif/>
                                    <span></span>
                                    Si
                                </label>
                                <label class="radio">
                                    <input type="radio" name="item[sanitario]" value="2" @if ($data->tipo == 'update') @if ($data->item->sanitario == 2) checked="checked" @endif @endif/>
                                    <span></span>
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group row">
                        <label class="col-lg-8 col-form-label">Telefono Fijo:</label>
                        <div class="col-lg-4 col-form-label">
                            <div class="radio-list">
                                <label class="radio">
                                    <input type="radio" name="item[telefono]" value="1" @if ($data->tipo == 'update') @if ($data->item->telefono == 1) checked="checked" @endif @endif/>
                                    <span></span>
                                    Si
                                </label>
                                <label class="radio">
                                    <input type="radio" name="item[telefono]" value="2" @if ($data->tipo == 'update') @if ($data->item->telefono == 2) checked="checked" @endif @endif/>
                                    <span></span>
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group row">
                        <label class="col-lg-8 col-form-label">Telefono Celular:</label>
                        <div class="col-lg-4 col-form-label">
                            <div class="radio-list">
                                <label class="radio">
                                    <input type="radio" name="item[celular]" value="1" @if ($data->tipo == 'update') @if ($data->item->celular == 1) checked="checked" @endif @endif/>
                                    <span></span>
                                    Si
                                </label>
                                <label class="radio">
                                    <input type="radio" name="item[celular]" value="2" @if ($data->tipo == 'update') @if ($data->item->celular == 2) checked="checked" @endif @endif/>
                                    <span></span>
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group row">
                        <label class="col-lg-8 col-form-label">Conexion a Internet:</label>
                        <div class="col-lg-4 col-form-label">
                            <div class="radio-list">
                                <label class="radio">
                                    <input type="radio" name="item[internet]" value="1" @if ($data->tipo == 'update') @if ($data->item->internet == 1) checked="checked" @endif @endif/>
                                    <span></span>
                                    Si
                                </label>
                                <label class="radio">
                                    <input type="radio" name="item[internet]" value="2" @if ($data->tipo == 'update') @if ($data->item->internet == 2) checked="checked" @endif @endif/>
                                    <span></span>
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group row">
                        <label class="col-lg-8 col-form-label">TV por cable:</label>
                        <div class="col-lg-4 col-form-label">
                            <div class="radio-list">
                                <label class="radio">
                                    <input type="radio" name="item[tvcable]" value="1" @if ($data->tipo == 'update') @if ($data->item->tvcable == 1) checked="checked" @endif @endif/>
                                    <span></span>
                                    Si
                                </label>
                                <label class="radio">
                                    <input type="radio" name="item[tvcable]" value="2" @if ($data->tipo == 'update') @if ($data->item->tvcable == 2) checked="checked" @endif @endif/>
                                    <span></span>
                                    No
                                </label>
                            </div>
                        </div>
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
<script src="{{ asset('scripts/empleabilidad/ficha/habitabilidad/index.js') }}" type="text/javascript"></script>






