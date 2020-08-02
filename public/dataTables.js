
    $(document).ready(function() {
        $('#category').dataTable( {
            "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
            },
            dom: 'Bfrtip',
            buttons: [ 
            {
                extend: 'excelHtml5',
                title: 'Categorias',
                exportOptions: {
                columns: [0,1,2]
                }
            },
            {
                extend: 'pdfHtml5',
                title: 'Categorias',
                exportOptions: {
                columns: [0,1,2]
                }
            }
            ]
        });
    });

    //datatable ArticleType
    $(document).ready(function() {
        $('#articleType').dataTable( {
            "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
            },
            dom: 'Bfrtip',
            buttons: [ 
            {
                extend: 'excelHtml5',
                title: 'Tipos de Articulos',
                exportOptions: {
                columns: [0,1,2]
                }
            },
            {
                extend: 'pdfHtml5',
                title: 'Tipos de Articulos',
                exportOptions: {
                columns: [0,1,2]
                }
            }
            ]
        });
    });

     //datatable measureUnit
     $(document).ready(function() {
        $('#measureUnit').dataTable( {
            "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
            },
            dom: 'Bfrtip',
            buttons: [ 
            {
                extend: 'excelHtml5',
                title: 'Unidades de Medidas',
                exportOptions: {
                columns: [0,1,2]
                }
            },
            {
                extend: 'pdfHtml5',
                title: 'Unidades de Medidas',
                exportOptions: {
                columns: [0,1,2]
                }
            }
            ]
        });
    });

    //datatable de  color
    $(document).ready(function() {
        $('#color').dataTable( {
            "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
            },
            dom: 'Bfrtip',
            buttons: [ 
            {
                extend: 'excelHtml5',
                title: 'Colores',
                exportOptions: {
                columns: [0,1,2]
                }
            },
            {
                extend: 'pdfHtml5',
                title: 'Colores',
                exportOptions: {
                columns: [0,1,2]
                }
            }
            ]
        });
    });


     //datatable de  discount // se deberi acambiar por una tabla llamada  movementStock
     $(document).ready(function() {
        $('#movementStock').dataTable( {
            "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
            },
            dom: 'Bfrtip',
            buttons: [ 
            {
                extend: 'excelHtml5',
                title: 'Movimiento de Stock',
                exportOptions: {
                columns: [0,1,2]
                }
            },
            {
                extend: 'pdfHtml5',
                title: 'Movimiento de Stock',
                exportOptions: {
                columns: [0,1,2]
                }
            }
            ]
        });
    });


   /* $(document).ready(function() {
        $('#movementStockJs').dataTable( {
            "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
            },
            dom: 'Bfrtip',
            buttons: [ 
            {
                extend: 'excelHtml5',
                title: 'Movimiento de Stock',
                exportOptions: {
                columns: [0,1,2]
                }
            },
            {
                extend: 'pdfHtml5',
                title: 'Movimiento de Stock',
                exportOptions: {
                columns: [0,1,2]
                }
            }
            ]
        });
    }); */

    //datatable articulos
    $(document).ready(function() {
        $('#articleTable').dataTable( {
            "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
            },
            dom: 'Bfrtip',
            buttons: [ 
            {
                extend: 'excelHtml5',
                title: 'Articulos',
                exportOptions: {
                columns: [0,1,2,3,4,5]
                }
            },
            {
                extend: 'pdfHtml5',
                title: 'Articulos',
                exportOptions: {
                columns: [0,1,2,3,4,5]
                }
            }
            ]
        });
    });

    //datatable articulos
    $(document).ready(function() {
        $('#invoice').dataTable( {
            "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
            },
            dom: 'Bfrtip',
            buttons: [ 
            {
                extend: 'excelHtml5',
                title: 'Facturas',
                exportOptions: {
                columns: [0,1,2,3,4,5]
                }
            },
            {
                extend: 'pdfHtml5',
                title: 'Facturas',
                exportOptions: {
                columns: [0,1,2,3,4,5]
                }
            }
            ]
        });
    });
