<!--begin::Card-->
<div class="card card-custom gutter-b example example-compact">
    <div class="card-header justify-content-left">
        <h3 class="card-title">Problemáticas que cursa en su vida</h3>
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
                <!-- <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span> -->
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form method="post" action="{{ route('empleabilidad_ficha.problematica.store') }}" id="form_empleabilidad_ficha_problematica">
        <input type="hidden" class="form-control" value="{{ $data->tipo }}" name="tipo">
        @if ( $data->tipo == 'update' )
            <input type="hidden" class="form-control" id="id" name="id" @if ( $data->tipo == 'update') value="{{ $data->pid }}" @endif>
        @endif
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group row">
                        <label class="col-lg-8 col-form-label">1. Ausencia de redes de apoyo familiar:</label>
                        <div class="col-lg-4 col-form-label">
                            <div class="radio-list">
                                <label class="radio">
                                    <input type="radio" name="item[ausencia]" value="1" @if ($data->tipo == 'update') @if ($data->item->ausencia == 1) checked="checked" @endif @endif/>
                                    <span></span>
                                    Si
                                </label>
                                <label class="radio">
                                    <input type="radio" name="item[ausencia]" value="2" @if ($data->tipo == 'update') @if ($data->item->ausencia == 2) checked="checked" @endif @endif/>
                                    <span></span>
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group row">
                        <label class="col-lg-8 col-form-label">2. Ausencia de Internet:</label>
                        <div class="col-lg-4 col-form-label">
                            <div class="radio-list">
                                <label class="radio">
                                    <input type="radio" name="item[ausencia_internet]" value="1" @if ($data->tipo == 'update') @if ($data->item->ausencia_internet == 1) checked="checked" @endif @endif/>
                                    <span></span>
                                    Si
                                </label>
                                <label class="radio">
                                    <input type="radio" name="item[ausencia_internet]" value="2" @if ($data->tipo == 'update') @if ($data->item->ausencia_internet == 2) checked="checked" @endif @endif/>
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
                        <label class="col-lg-8 col-form-label">3. Ausencia de uno de los progenitores o ambos:</label>
                        <div class="col-lg-4 col-form-label">
                            <div class="radio-list">
                                <label class="radio">
                                    <input type="radio" name="item[ausencia_progenitores]" value="1" @if ($data->tipo == 'update') @if ($data->item->ausencia_progenitores == 1) checked="checked" @endif @endif/>
                                    <span></span>
                                    Si
                                </label>
                                <label class="radio">
                                    <input type="radio" name="item[ausencia_progenitores]" value="2" @if ($data->tipo == 'update') @if ($data->item->ausencia_progenitores == 2) checked="checked" @endif @endif/>
                                    <span></span>
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group row">
                        <label class="col-lg-8 col-form-label">4. Bajo grado de escolaridad o instrucción:</label>
                        <div class="col-lg-4 col-form-label">
                            <div class="radio-list">
                                <label class="radio">
                                    <input type="radio" name="item[escolaridad]" value="1" @if ($data->tipo == 'update') @if ($data->item->escolaridad == 1) checked="checked" @endif @endif/>
                                    <span></span>
                                    Si
                                </label>
                                <label class="radio">
                                    <input type="radio" name="item[escolaridad]" value="2" @if ($data->tipo == 'update') @if ($data->item->escolaridad == 2) checked="checked" @endif @endif/>
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
                        <label class="col-lg-8 col-form-label">5. Padre o madre u otro familiar con discapacidad física o mental:</label>
                        <div class="col-lg-4 col-form-label">
                            <div class="radio-list">
                                <label class="radio">
                                    <input type="radio" name="item[discapacidad]" value="1" @if ($data->tipo == 'update') @if ($data->item->discapacidad == 1) checked="checked" @endif @endif/>
                                    <span></span>
                                    Si
                                </label>
                                <label class="radio">
                                    <input type="radio" name="item[discapacidad]" value="2" @if ($data->tipo == 'update') @if ($data->item->discapacidad == 2) checked="checked" @endif @endif/>
                                    <span></span>
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group row">
                        <label class="col-lg-8 col-form-label">6. Ausencia de recursos económicos sostenidos:</label>
                        <div class="col-lg-4 col-form-label">
                            <div class="radio-list">
                                <label class="radio">
                                    <input type="radio" name="item[ausencia_recursos]" value="1" @if ($data->tipo == 'update') @if ($data->item->ausencia_recursos == 1) checked="checked" @endif @endif/>
                                    <span></span>
                                    Si
                                </label>
                                <label class="radio">
                                    <input type="radio" name="item[ausencia_recursos]" value="2" @if ($data->tipo == 'update') @if ($data->item->ausencia_recursos == 2) checked="checked" @endif @endif/>
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
                        <label class="col-lg-8 col-form-label">7. Violencia intrafamiliar (posible maltrato infantil, violencia conyugal, otros):</label>
                        <div class="col-lg-4 col-form-label">
                            <div class="radio-list">
                                <label class="radio">
                                    <input type="radio" name="item[violencia]" value="1" @if ($data->tipo == 'update') @if ($data->item->violencia == 1) checked="checked" @endif @endif/>
                                    <span></span>
                                    Si
                                </label>
                                <label class="radio">
                                    <input type="radio" name="item[violencia]" value="2" @if ($data->tipo == 'update') @if ($data->item->violencia == 2) checked="checked" @endif @endif/>
                                    <span></span>
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group row">
                        <label class="col-lg-8 col-form-label">8. Madre, padre o tutor sigue tratamiento médico:</label>
                        <div class="col-lg-4 col-form-label">
                            <div class="radio-list">
                                <label class="radio">
                                    <input type="radio" name="item[tratamiento]" value="1" @if ($data->tipo == 'update') @if ($data->item->tratamiento == 1) checked="checked" @endif @endif/>
                                    <span></span>
                                    Si
                                </label>
                                <label class="radio">
                                    <input type="radio" name="item[tratamiento]" value="2" @if ($data->tipo == 'update') @if ($data->item->tratamiento == 2) checked="checked" @endif @endif/>
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
                        <label class="col-lg-8 col-form-label">9. Cuenta con uno o más dependientes:</label>
                        <div class="col-lg-4 col-form-label">
                            <div class="radio-list">
                                <label class="radio">
                                    <input type="radio" name="item[dependientes]" value="1" @if ($data->tipo == 'update') @if ($data->item->dependientes == 1) checked="checked" @endif @endif/>
                                    <span></span>
                                    Si
                                </label>
                                <label class="radio">
                                    <input type="radio" name="item[dependientes]" value="2" @if ($data->tipo == 'update') @if ($data->item->dependientes == 2) checked="checked" @endif @endif/>
                                    <span></span>
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group row">
                        <label class="col-lg-8 col-form-label">10.  Inestabilidad familiar:</label>
                        <div class="col-lg-4 col-form-label">
                            <div class="radio-list">
                                <label class="radio">
                                    <input type="radio" name="item[inestabilidad]" value="1" @if ($data->tipo == 'update') @if ($data->item->inestabilidad == 1) checked="checked" @endif @endif/>
                                    <span></span>
                                    Si
                                </label>
                                <label class="radio">
                                    <input type="radio" name="item[inestabilidad]" value="2" @if ($data->tipo == 'update') @if ($data->item->inestabilidad == 2) checked="checked" @endif @endif/>
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
                        <label class="col-lg-8 col-form-label">11. Desestabilidad emocional persona o pensamientos desmotivantes:</label>
                        <div class="col-lg-4 col-form-label">
                            <div class="radio-list">
                                <label class="radio">
                                    <input type="radio" name="item[desestabilidad_emocional]" value="1" @if ($data->tipo == 'update') @if ($data->item->desestabilidad_emocional == 1) checked="checked" @endif @endif/>
                                    <span></span>
                                    Si
                                </label>
                                <label class="radio">
                                    <input type="radio" name="item[desestabilidad_emocional]" value="2" @if ($data->tipo == 'update') @if ($data->item->desestabilidad_emocional == 2) checked="checked" @endif @endif/>
                                    <span></span>
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group row">
                        <label class="col-lg-8 col-form-label">12. Otras razones (especificar):</label>
                        <input type="text" name="item[otros]" class="form-control"  @if ( $data->tipo == 'update') value="{{ $data->item->otros }}" @endif/>
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
<script src="{{ asset('scripts/empleabilidad/ficha/problematica/index.js') }}" type="text/javascript"></script>






