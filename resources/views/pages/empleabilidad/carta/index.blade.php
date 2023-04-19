{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')


    <!--begin::Card-->
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">Carta</h3>
            </div>
            <div class="card-title">
                <a href="javascript:itemPdf();" class="btn btn-outline-success btn-sm mr-2 mb-2">
                    <i class="far fa-file-pdf"></i>&nbsp;Imprimir
                </a>
            </div>
        </div>
        <div class="card-body">
            <!--begin::Example-->
            <input type="hidden" value="{{  url('empleabilidad/carta/item') }}" id="menu_active">
            <div class="example">
                <div class="example-preview">

                    <ul class="nav nav-tabs" id="tablist" role="tablist">

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" data-target="#tab1"  id="head-tab1"  href="{{ url('/empleabilidad/carta/general') }}" aria-controls="tab1">
																	<span class="nav-icon">
																		<i class="flaticon-layers"></i>
																	</span>
                                <span class="nav-text">General</span>
                            </a>
                        </li>


                    </ul>
                    <div class="tab-content mt-5" id="myTabContent">
                        <div class="tab-pane fade" id="tab1" role="tabpanel" aria-labelledby="head-tab1"></div>
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

    <script src="{{ asset('scripts/empleabilidad/carta/index.js') }}" type="text/javascript"></script>

    {{-- page scripts --}}
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
@endsection
