    $(document).ready(function() {
    $('#example').DataTable( {
        "responsive": true,
        "language": lenguaje_espanol,
        "processing": true,
        "searching": true,
        "ordering": true,
        "paging": true,
        "destroy":true,
        "lengthChange":true,
        "info":true,
        "lengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
        "autoWidth":false,
        "pageLength":10,
        "ajax": "array.json",
        "columns": [
            /*{ "data": "fotoPersonaje",
              "render":function(data,type,row){
               var data_n = data.split("/");
               return '<center><img src="'+data_n[1]+"/"+data_n[2]+'" width="120" height="80" /></center>';
              }},*/
            { "data": "name" },
            { "data": "height" },
            { "data": "mass" },
            { "data": "hair_color" },
            { "data": "skin_color" },
            { "data": "eye_color" },
            { "data": "birth_year" },
            { "data": "gender" }
        ]
    } );
} );

    var lenguaje_espanol = {
        processing: "Procesando...",
        search: "Buscar:",
        lengthMenu: "Mostrar _MENU_ registros",
        info: "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        infoEmpty: "Mostrando registros del 0 al 0 de un total de 0 registros",
        infoFiltered: "(filtrado de un total de _MAX_ registros)",
        infoPostFix: "",
        loadingRecords: "Cargando...",
        zeroRecords: "No se encontraron resultados",
        emptyTable: "No hay datos disponibles en la tabla",
        paginate: {
            first: "Primero",
            previous: "Anterior",
            next: "Siguiente",
            last: "Anterior"
        },
        aria: {
            sortAscending: ": Activar para ordenar la columna de manera ascendente",
            sortDescending: ": Activar para ordenar la columna de manera descendente"
        }
    };