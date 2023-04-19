"use strict";

window.loadWindow = function(id, tipo) {
    window.location.href = HOST_URL + '/empleabilidad/evaluacion/tab/' + id + '/' + tipo ;
};

window.itemPdf = function(id) {
    window.open('/empleabilidad/evaluacion/item/ficha_pdf/' + id, '_blank');
};

var KTDatatablesDataSourceAjaxServer = function() {
    var initTable1 = function() {
        window.table = $('#kt_datatable').DataTable({
            responsive: true,
            searchDelay: 500,
            processing: true,
            serverSide: true,
            language: {
                url: '/storage/lang/spanish.json'
            },
            ajax: {
                url: HOST_URL + '/empleabilidad/evaluacion/item',
                type: 'GET'
            },
            columns: [
                { data: 'id', name: 'ee.id', title: 'Acciones' },
                { data: 'fecha', name: 'ee.fecha', title: 'Fecha' },

            ],
            columnDefs: [
                {
                    targets: 0,
                    searchable: false,
                    width: "290px",
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var boton;
                        boton =
                            '<div align="center">' +
                                '<a href="javascript:loadWindow(\''+data+'\',\'update\');" class="btn btn-outline-primary btn-sm mr-2 mb-2">'+
                                    '<i class="flaticon2-menu-4"></i>&nbsp;Ingresar'+
                                '</a>'+

                                '<a href="javascript:itemPdf(\''+data+'\');" class="btn btn-outline-success btn-sm mr-2 mb-2">'+
                                    '<i class="la la-file-excel-o"></i>&nbsp;Imprimir'+
                                '</a>'+
                            '</div>';


                        return boton;
                    },
                },
            ],
        });
    };

    return {

        //main function to initiate the module
        init: function() {
            initTable1();
        },

    };

}();

jQuery(document).ready(function() {
    KTDatatablesDataSourceAjaxServer.init();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});

