{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    <div class="card card-custom">

        <div class="card-header">
            <div class="card-title">
                <span class="card-icon">
                    <i class="flaticon2-user text-primary"></i>
                </span>

                <h3 class="card-label">Dashboard</h3>
            </div>
            <div class="card-toolbar">
                <!--begin::Button-->
                <a href="javascript:itemPdf();" class="btn btn-outline-success mr-2 font-weight-bolder">
                    <i class="far fa-file-pdf"></i>&nbsp;Imprimir
                </a>

                <!--end::Button-->
            </div>
        </div>


        <div class="card-body">
            <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                <thead>

                </thead>
            </table>
        </div>

    </div>

@endsection

{{-- Styles Section --}}
@section('styles')
    <link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
@endsection


{{-- Scripts Section --}}
@section('scripts')
    {{-- vendors --}}
    <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>

    {{-- page scripts --}}
    <script src="{{ asset('scripts/emprendedurismo/problematica/index.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
@endsection
