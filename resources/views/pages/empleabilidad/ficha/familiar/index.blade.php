<!--begin::Card-->
<div class="card card-custom gutter-b example example-compact">
    <div class="card-header justify-content-left">
        <h3 class="card-title">Entorno Familiar</h3>
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
                <!-- <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span> -->
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form method="post" action="{{ route('empleabilidad_ficha.familiar.store') }}" id="form_empleabilidad_ficha_familiar">
        <input type="hidden" class="form-control" value="{{ $data->tipo }}" name="tipo">
        @if ( $data->tipo == 'update' )
            <input type="hidden" class="form-control" id="id" name="id" @if ( $data->tipo == 'update') value="{{ $data->pid }}" @endif>
        @endif

        <div class="card-body">

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>1. Estado Civil:</label>
                        <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_estado_civil" name="item[id_estado_civil]" required>
                            <option></option>
                            @foreach($data->estadosciviles as $estadocivil)
                                <option value="{{ $estadocivil->id }}" @if ($data->tipo == 'update' && $data->item->id_estado_civil == $estadocivil->id) selected="selected" @endif> {{ $estadocivil->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-lg-6">
                        <div class="form-group">
                            <label>2. Cantidad Hijos:</label>
                            <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_cantidad_hijos" name="item[id_cantidad_hijos]" required>
                                <option></option>
                                @foreach($data->hijos as $hijo)
                                    <option value="{{ $hijo->id }}" @if ($data->tipo == 'update' && $data->item->id_cantidad_hijos == $hijo->id) selected="selected" @endif> {{ $hijo->nombre }}</option>
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
                    <div class="form-group row">
                        <label class="col-lg-8 col-form-label">3. Madre:</label>
                        <div class="col-lg-4 col-form-label">
                            <div class="radio-list">
                                <label class="radio">
                                    <input type="radio" name="item[madre]" value="1" @if ($data->tipo == 'update') @if ($data->item->madre == 1) checked="checked" @endif @endif/>
                                    <span></span>
                                    Si
                                </label>
                                <label class="radio">
                                    <input type="radio" name="item[madre]" value="2" @if ($data->tipo == 'update') @if ($data->item->madre == 2) checked="checked" @endif @endif/>
                                    <span></span>
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                        <div class="form-group row">
                            <label class="col-lg-8 col-form-label">4. ¿Vive con la familia?</label>
                            <div class="col-lg-4 col-form-label">
                                <div class="radio-list">
                                    <label class="radio">
                                        <input type="radio" name="item[familia_madre]" value="1" @if ($data->tipo == 'update') @if ($data->item->familia_madre == 1) checked="checked" @endif @endif/>
                                        <span></span>
                                        Si
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="item[familia_madre]" value="2" @if ($data->tipo == 'update') @if ($data->item->familia_madre == 2) checked="checked" @endif @endif/>
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
                        <label class="col-lg-8 col-form-label">5. Padre:</label>
                        <div class="col-lg-4 col-form-label">
                            <div class="radio-list">
                                <label class="radio">
                                    <input type="radio" name="item[padre]" value="1" @if ($data->tipo == 'update') @if ($data->item->padre == 1) checked="checked" @endif @endif/>
                                    <span></span>
                                    Si
                                </label>
                                <label class="radio">
                                    <input type="radio" name="item[padre]" value="2" @if ($data->tipo == 'update') @if ($data->item->padre == 2) checked="checked" @endif @endif/>
                                    <span></span>
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group row">
                        <label class="col-lg-8 col-form-label">6. ¿Vive con la familia?</label>
                        <div class="col-lg-4 col-form-label">
                            <div class="radio-list">
                                    <label class="radio">
                                        <input type="radio" name="item[familia_padre]" value="1" @if ($data->tipo == 'update') @if ($data->item->familia_padre == 1) checked="checked" @endif @endif/>
                                        <span></span>
                                        Si
                                    </label>
                                    <label class="radio">
                                        <input type="radio" name="item[familia_padre]" value="2" @if ($data->tipo == 'update') @if ($data->item->familia_padre == 2) checked="checked" @endif @endif/>
                                        <span></span>
                                        No
                                    </label>
                            </div>
                        </div>
                    </div>
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
<script src="{{ asset('scripts/empleabilidad/ficha/familiar/index.js') }}" type="text/javascript"></script>






