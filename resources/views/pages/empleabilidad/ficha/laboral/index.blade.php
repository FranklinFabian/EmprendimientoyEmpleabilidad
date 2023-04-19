<!--begin::Card-->
<div class="card card-custom gutter-b example example-compact">
    <div class="card-header justify-content-left">
        <h3 class="card-title">Información Laboral</h3>
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
                <!-- <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span> -->
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form method="post" action="{{ route('empleabilidad_ficha.laboral.store') }}" id="form_empleabilidad_ficha_laboral">
        <input type="hidden" class="form-control" value="{{ $data->tipo }}" name="tipo">
        @if ( $data->tipo == 'update' )
            <input type="hidden" class="form-control" id="id" name="id" @if ( $data->tipo == 'update') value="{{ $data->pid }}" @endif>
        @endif

        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group row">
                        <label class="col-lg-8 col-form-label">1. ¿Trabajas Actualmente?:</label>
                        <div class="col-lg-4 col-form-label">
                            <div class="radio-list">
                                <label class="radio">
                                    <input type="radio" name="item[trabajas_actualmente]" value="1" @if ($data->tipo == 'update') @if ($data->item->trabajas_actualmente == 1) checked="checked" @endif @endif/>
                                    <span></span>
                                    Si
                                </label>
                                <label class="radio">
                                    <input type="radio" name="item[trabajas_actualmente]" value="2" @if ($data->tipo == 'update') @if ($data->item->trabajas_actualmente == 2) checked="checked" @endif @endif/>
                                    <span></span>
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="col-lg-8 col-form-label">2. ¿En que empresa?:</label>
                        <input type="text" name="item[empresa]" class="form-control"  @if ( $data->tipo == 'update') value="{{ $data->item->empresa }}" @endif/>
                    </div>
                </div>
            </div>
        </div>

        <div class="separator separator-dashed"></div>

        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group row">
                        <label class="col-lg-8 col-form-label">3. ¿Cargo que desempeñas?:</label>
                        <input type="text" name="item[cargo]" class="form-control"  @if ( $data->tipo == 'update') value="{{ $data->item->cargo }}" @endif/>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="col-lg-8 col-form-label">4. ¿En que horarios?:</label>
                        <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_horarios" name="item[id_horarios]" required>
                            <option></option>
                            @foreach($data->horarios as $horario)
                                <option value="{{ $horario->id }}" @if ($data->tipo == 'update' && $data->item->id_horarios == $horario->id) selected="selected" @endif> {{ $horario->nombre }}</option>
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
                        <label class="col-lg-8 col-form-label">5. ¿Tienes experiencia laboral?:</label>
                        <div class="col-lg-4 col-form-label">
                            <div class="radio-list">
                                <label class="radio">
                                    <input type="radio" name="item[experiencia_laboral]" value="1" @if ($data->tipo == 'update') @if ($data->item->experiencia_laboral == 1) checked="checked" @endif @endif/>
                                    <span></span>
                                    Si
                                </label>
                                <label class="radio">
                                    <input type="radio" name="item[experiencia_laboral]" value="2" @if ($data->tipo == 'update') @if ($data->item->experiencia_laboral == 2) checked="checked" @endif @endif/>
                                    <span></span>
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="col-lg-8 col-form-label">6. ¿De cuanto tiempo?:</label>
                        <select style="width: 100%" class=" form-control m-select2 select2_general" id="id_tiempo" name="item[id_tiempo]" required>
                            <option></option>
                            @foreach($data->experiencias as $experiencia)
                                <option value="{{ $experiencia->id }}" @if ($data->tipo == 'update' && $data->item->id_tiempo == $experiencia->id) selected="selected" @endif> {{ $experiencia->nombre }}</option>
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
                        <label class="col-lg-8 col-form-label">7. ¿En que área?:</label>
                        <input type="text" name="item[area]" class="form-control"  @if ( $data->tipo == 'update') value="{{ $data->item->area }}" @endif/>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="col-lg-8 col-form-label">8. ¿Tienes algún negocio familiar?:</label>
                        <div class="col-lg-4 col-form-label">
                            <div class="radio-list">
                                <label class="radio">
                                    <input type="radio" name="item[negocio_familiar]" value="1" @if ($data->tipo == 'update') @if ($data->item->negocio_familiar == 1) checked="checked" @endif @endif/>
                                    <span></span>
                                    Si
                                </label>
                                <label class="radio">
                                    <input type="radio" name="item[negocio_familiar]" value="2" @if ($data->tipo == 'update') @if ($data->item->negocio_familiar == 2) checked="checked" @endif @endif/>
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
                        <label class="col-lg-8 col-form-label">9. ¿En que rubro?:</label>
                        <input type="text" name="item[rubro]" class="form-control"  @if ( $data->tipo == 'update') value="{{ $data->item->rubro }}" @endif/>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="col-lg-8 col-form-label">10. ¿Trabajas en el negocio familiar?:</label>
                        <div class="col-lg-4 col-form-label">
                            <div class="radio-list">
                                <label class="radio">
                                    <input type="radio" name="item[trabajo_negocio]" value="1" @if ($data->tipo == 'update') @if ($data->item->trabajo_negocio == 1) checked="checked" @endif @endif/>
                                    <span></span>
                                    Si
                                </label>
                                <label class="radio">
                                    <input type="radio" name="item[trabajo_negocio]" value="2" @if ($data->tipo == 'update') @if ($data->item->trabajo_negocio == 2) checked="checked" @endif @endif/>
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
                        <label class="col-lg-8 col-form-label">11. ¿Recibiste alguna capacitación sobre emprendimiento y/o empleabilidad?:</label>
                        <div class="col-lg-4 col-form-label">
                            <div class="radio-list">
                                <label class="radio">
                                    <input type="radio" name="item[capacitacion]" value="1" @if ($data->tipo == 'update') @if ($data->item->capacitacion == 1) checked="checked" @endif @endif/>
                                    <span></span>
                                    Si
                                </label>
                                <label class="radio">
                                    <input type="radio" name="item[capacitacion]" value="2" @if ($data->tipo == 'update') @if ($data->item->capacitacion == 2) checked="checked" @endif @endif/>
                                    <span></span>
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="col-lg-8 col-form-label">12. ¿Tienes algún certificado que avale su capacitación?:</label>
                        <div class="col-lg-4 col-form-label">
                            <div class="radio-list">
                                <label class="radio">
                                    <input type="radio" name="item[certificado]" value="1" @if ($data->tipo == 'update') @if ($data->item->certificado == 1) checked="checked" @endif @endif/>
                                    <span></span>
                                    Si
                                </label>
                                <label class="radio">
                                    <input type="radio" name="item[certificado]" value="2" @if ($data->tipo == 'update') @if ($data->item->certificado == 2) checked="checked" @endif @endif/>
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
                        <label class="col-lg-8 col-form-label">13. ¿Qué conocimiento aplicas gracias a su capacitación?</label>
                        <input type="text" name="item[conocimiento]" class="form-control"  @if ( $data->tipo == 'update') value="{{ $data->item->conocimiento }}" @endif/>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="col-lg-8 col-form-label">14. ¿Tienes algún integrante de tu familia que este participando en estas capacitaciones?:</label>
                        <div class="col-lg-4 col-form-label">
                            <div class="radio-list">
                                <label class="radio">
                                    <input type="radio" name="item[integrante]" value="1" @if ($data->tipo == 'update') @if ($data->item->integrante == 1) checked="checked" @endif @endif/>
                                    <span></span>
                                    Si
                                </label>
                                <label class="radio">
                                    <input type="radio" name="item[integrante]" value="2" @if ($data->tipo == 'update') @if ($data->item->integrante == 2) checked="checked" @endif @endif/>
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
<script src="{{ asset('scripts/empleabilidad/ficha/laboral/index.js') }}" type="text/javascript"></script>






