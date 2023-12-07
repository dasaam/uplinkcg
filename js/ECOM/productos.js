(function($){
      
    "use strict";
  
    //active
    $('#productos').addClass('active');

    //doctors datatable
    var table = $('#productos_table').DataTable( {
      dom: "<'row'<'col-sm-4'l><'col-sm-4'B><'col-sm-4'f>>" +
      "<'row'<'col-sm-12'tr>>" +
      "<'row'<'col-sm-4'i><'col-sm-8'p>>",
      "processing": true,
      "serverSide": true,
      "bSort" : false,
      "ajax": {
        url: "get_productos"
      },
      // orderCellsTop: true,
      fixedHeader: true,
      "columns": [
         {data:"idproductoapp"},
         {data:"idapp"},
         {data:"producto"},
         {data:"url"},
         {data:"modelo"},
         {data:"descripcion_corta"},
         {data:"action",searchable:false,orderable:false,sortable:false}//action
      ],
      "language": {
        "sEmptyTable":     "No data available in table",
        "sInfo":           "Showing"+" _START_ "+"to"+" _END_ "+"of"+" _TOTAL_ "+"records",
        "sInfoEmpty":      "Showing"+" 0 "+"to"+" 0 "+"of"+" 0 "+"records",
        "sInfoFiltered":   "("+"filtered"+" "+"from"+" _MAX_ "+"total"+" "+"records"+"",
        "sInfoPostFix":    "",
        "sInfoThousands":  ",",
        "sLengthMenu":     "Show"+" _MENU_ "+"records",
        "sLoadingRecords": "Loading...",
        "sProcessing":     "Processing...",
        "sSearch":         "Search"+":",
        "sZeroRecords":    "No matching records found",
        "oPaginate": {
            "sFirst":    "First",
            "sLast":     "Last",
            "sNext":     "Next",
            "sPrevious": "Previous"
        },
      }
   });

    //delete doctor
    $(document).on('click','.delete_producto',function(e){
        e.preventDefault();
        var el=$(this);
        Swal.fire({
            title: "¿Estas seguro de eliminar este producto?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Eliminar",
            cancelButtonText: "Cancelar",
            closeOnConfirm: false,
        }).then((result) => {
            if (result.isConfirmed) {
                // Si se confirma, envía el formulario
                $(el).parent().submit();
            }
        });

    });

})(jQuery);

