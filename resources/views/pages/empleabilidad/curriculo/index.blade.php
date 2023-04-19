{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')


    <!--begin::Card-->
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">Currículo</h3>
            </div>
            <div class="card-title">
                <a href="javascript:itemPdf();" class="btn btn-outline-success btn-sm mr-2 mb-2">
                    <i class="far fa-file-pdf"></i>&nbsp;Imprimir
                </a>
            </div>
        </div>
        <div class="card-body">
            <!--begin::Example-->
            <input type="hidden" value="{{  url('empleabilidad/curriculo/item') }}" id="menu_active">
            <div class="example">
                <div class="example-preview">

                    <ul class="nav nav-tabs" id="tablist" role="tablist">

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" data-target="#tab1"  id="head-tab1"  href="{{ url('/empleabilidad/curriculo/descripcion') }}" aria-controls="tab1">
																	<span class="nav-icon">
																		<i class="flaticon-layers"></i>
																	</span>
                                <span class="nav-text">Breve Descripción</span>
                            </a>
                        </li>

                        @if($data->tipo == 'update')

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" data-target="#tab2" id="head-tab2"  href="{{ url('/empleabilidad/curriculo/formacion') }}" aria-controls="tab2">
																	<span class="nav-icon">
																		<i class="flaticon-layers"></i>
																	</span>
                                <span class="nav-text">Formación</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" data-target="#tab3" id="head-tab3"  href="{{ url('/empleabilidad/curriculo/complementaria') }}" aria-controls="tab3">
																	<span class="nav-icon">
																		<i class="flaticon-layers"></i>
																	</span>
                                <span class="nav-text">Formación Complementaria</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" data-target="#tab4" id="head-tab4"  href="{{ url('/empleabilidad/curriculo/experiencia') }}" aria-controls="tab4">
																	<span class="nav-icon">
																		<i class="flaticon-layers"></i>
																	</span>
                                <span class="nav-text">Experiencia Laboral</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" data-target="#tab5" id="head-tab5"  href="{{ url('/empleabilidad/curriculo/idioma') }}" aria-controls="tab5">
																	<span class="nav-icon">
																		<i class="flaticon-layers"></i>
																	</span>
                                <span class="nav-text">Idiomas</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" data-target="#tab6" id="head-tab6"  href="{{ url('/empleabilidad/curriculo/competencia') }}" aria-controls="tab6">
																	<span class="nav-icon">
																		<i class="flaticon-layers"></i>
																	</span>
                                <span class="nav-text">Competencia Informáticas</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" data-target="#tab7" id="head-tab7"  href="{{ url('/empleabilidad/curriculo/referencia') }}" aria-controls="tab7">
																	<span class="nav-icon">
																		<i class="flaticon-layers"></i>
																	</span>
                                <span class="nav-text">Referencias</span>
                            </a>
                        </li>

                        @endif

                    </ul>
                    <div class="tab-content mt-5" id="myTabContent">
                        <div class="tab-pane fade" id="tab1" role="tabpanel" aria-labelledby="head-tab1"></div>
                        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="head-tab2"></div>
                        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="head-tab3"></div>
                        <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="head-tab4"></div>
                        <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="head-tab5"></div>
                        <div class="tab-pane fade" id="tab6" role="tabpanel" aria-labelledby="head-tab6"></div>
                        <div class="tab-pane fade" id="tab7" role="tabpanel" aria-labelledby="head-tab7"></div>
                    </div>
                </div>
            </div>
            <!--end::Example-->
        </div>
    </div>
    <!--end::Card-->

@endsection

{{-- Styles Section --}}
@section('styles')
    <link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
@endsection


{{-- Scripts Section --}}
@section('scripts')
    {{-- vendors --}}
    <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>

    <script src="{{ asset('scripts/empleabilidad/curriculo/index.js') }}" type="text/javascript"></script>

    {{-- page scripts --}}
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
@endsection
