"use strict";

window.loadWindow = function(id, tipo) {
    window.location.href = HOST_URL + '/administracion/item/tab/' + id + '/' + tipo ;
};

window.itemDelete = function(id){
    Swal.fire({
        title: 'Esta seguro de borrar el registro?',
        text: "Recuerde que el registro se eliminará permanentemente.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Si, Eliminar!!!',
        cancelButtonText: "No, cancelar"
    }).then(function(result) {
        if (result.value) {
            itemDeleteAction(id);
        }
    });
};

function itemDeleteAction(id){
    $.ajax({
        url : HOST_URL + '/administracion/item/general/' + id,
        type: 'DELETE'
    }).done(function(response){
        if (response === 1){
            Swal.fire({
                icon: 'success',
                title: 'El registro fue borrado satisfactoriamente',
                showConfirmButton: false,
                timer: 2000
            });
            window.table.draw();
        }else{
            Swal.fire({
                icon: 'error',
                title: 'El registro no puede ser eliminado, primero debe borrar los registros relacionados',
                showConfirmButton: false,
                timer: 4000
            });
        }
    });
}

var KTDatatablesDataSourceAjaxServer = function() {
    var initTable1 = function() {
        window.table = $('#kt_datatable').DataTable({
            responsive: true,
            searchDelay: 500,
            processing: true,
            serverSide: true,
            ajax: {
                url: HOST_URL + '/administracion/item',
                type: 'GET'
            },
            columns: [
                { data: 'id', name: 'u.id', title: 'Acciones' },
                { data: 'name', name: 'u.name', title: 'Nombre' },
                { data: 'estado', name: 'ce.nombre', title: 'Estado' },
            ],
            columnDefs: [
                {
                    targets: 0,
                    searchable: false,
                    width: "300px",
                    orderable: false,
                    render: function(data, type, full, meta) {
                        var boton = '<div align="center"><a href="javascript:loadWindow(\''+full.id+'\',\'update\');" class="btn btn-outline-primary btn-sm mr-2">'+
                            '<i class="flaticon2-menu-4"></i>&nbsp;Ingresar'+
                            '</a>'+

                            '<a href="javascript:itemDelete(\''+data+'\');" class="btn btn-sm btn-outline-danger" style="width:110px;">'+
                            '<i class="fa flaticon-delete">&nbsp;Eliminar</i>'+
                            '</a>';
                        return boton;
                    }
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

