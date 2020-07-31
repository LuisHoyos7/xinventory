	
		<!--end::Page Scripts-->
	 
	 	<script>var HOST_URL = "https://keenthemes.com/metronic/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{ asset('metronic/dist/assets/plugins/global/plugins.bundle.js?v=7.0.4') }}"></script>
		<script src="{{ asset('metronic/dist/assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.4') }}"></script>
		<script src="{{ asset('metronic/dist/assets/js/scripts.bundle.js?v=7.0.4') }}"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="{{ asset('metronic/dist/assets/js/pages/custom/login/login-general.js?v=7.0.4') }}"></script>
		<script src="{{ asset('metronic/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.0.4') }}"></script>
		<script src="{{ asset('metronic/dist/assets/js/pages/widgets.js?v=7.0.4') }}"></script>
		<script src="{{ asset('metronic/dist/assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.5') }}"></script>
        <script src="{{ asset('metronic/dist/assets/js/pages/crud/datatables/basic/headers.js?v=7.0.5') }}"></script>
        <script src="{{ asset('metronic/dist/assets/js/pages/crud/forms/widgets/select2.js?v=7.0.7') }}"></script>
        <script>
        $("#article").select2({
			placeholder: "Selecciona un Articulo",
			language: "es",
			allowClear: true,
		});

        $("#person").select2({
			placeholder: "Selecciona una Opcion",
			language: "es",
			allowClear: true,
		});
        </script>
		
<script defer>
    //datatable category
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
</script>

<!-- con este script se llena el stock en la 
vista descuentos manuales para ver si es mayor a 0 
y se puede descontar -->

<script>
    $('#div-article-js').hide()
    $('#buttom-article-js').hide()
    //peticion ajax para llenar el STOCK 
    $('#article').on('change', function (e) {
        var article_id =  $("#article option:selected").val();

        $.ajax({
                url:  'getArticleStock/' + article_id,
                type: 'GET',
                dataType: 'json'
        })

        .done(function (article) {
            $(".stock").val(article.stock);
            $("#price").val(article.price);
        })
    })
    $('#addInvoice').on('click', function (e) {
        e.preventDefault();
        var article_stock = $('#stock').val();
        var article_amount = $("#amount").val();
        if (article_stock <= 0 || article_stock <  article_amount){
            alert('lo sentimos el stock esta en cero o Excede la cantidad en Almacen')
        }
        else{
        $('#div-article-js').show()
        $('#buttom-article-js').show()
        var article_id = $("#article option:selected").val();
        var article_name = $("#article option:selected").text();
        var article_price = $("#price").val();
        var article_discount = $("#discount").val();
        var iva = $("#iva").val();
        var total_price = parseFloat(article_amount) * parseFloat(article_price);
        var html =
            `<tr>
                <td>${article_name}</td>
                <td>${article_price}</td>
                <td>${article_amount}</td>
                <td>${article_discount}</td>
                <td>${iva} </td>
                <td>${total_price}</td>
                <td>
                    <buttom id="delete" class="btn btn-icon btn-light-danger">
                        <i class="flaticon2-line"></i>
                    </buttom>
                </td>
                <td><input hidden style="width: 6em" type="number" name="detalle[${article_id}][amount]" value="${article_amount}"></td>
                <td><input hidden style="width: 6em" type="number" name="detalle[${article_id}][price]" value="${article_price}"></td>
                <td><input hidden style="width: 6em" type="number" name="detalle[${article_id}][discount]" value="${article_discount}"></td>
                <td><input hidden style="width: 6em" type="number" name="detalle[${article_id}][iva]" value="${iva}"></td>
            </tr>`;
        $('.table-discount').append(html);


        var filas=document.querySelectorAll("#miTabla tbody tr");

 var total_amount=0;
 var total_price=0;
 var total_buy=0;
 var total_discount=0;
 var total_iva=0;
 // recorremos cada una de las filas
 filas.forEach(function(e) {

     // obtenemos las columnas de cada fila
     var columnas=e.querySelectorAll("td");

     // obtenemos los valores de la cantidad y importe
     var amount=parseFloat(columnas[2].textContent);

     var price=parseFloat(columnas[1].textContent);

     var discount = parseFloat(columnas[3].textContent);

     var iva = parseFloat(columnas[4].textContent);

     var total = parseFloat(columnas[5].textContent);

     // mostramos el total por fila
   

     total_amount+=amount;
     total_price += price;
     total_discount += discount;
     total_iva += iva;
     total_buy += total;

     
 });

 // mostramos la suma total
 $('#totalPrice').html(total_price.toFixed(2));
 $('#totalAmount').html(total_amount.toFixed(0));
 $('#totalDiscount').html(total_discount.toFixed(2));
 $('#totalIva').html(total_iva.toFixed(2));
 $('#total').html(total_buy.toFixed(2));

     
}
        
    })
  

    //en este metodo se van agregando los articulos en la vista de descuentos manuales 
    // que se van a descontar con su respectiva cantidad a descontar, de igual manera 
    // se envia un array detalle[] al controlador con cada uno de los articulos a descontar
    $('#addDate').on('click', function (e) {
        e.preventDefault();
        var article_name = $("#article option:selected").text();
        var article_id = $("#article option:selected").val();
        var discount = $("#discount").val();
        var html =
            `<tr>
                <td></td>
                <td></td>
                <td>${article_name}</td>
                <td></td>
                <td></td>
                <td>${discount}</td>
                <td><input hidden style="width: 6em" type="number" name="detalle[${article_id}][descontar]" value="${discount}"></td>
            </tr>`;
        $('.table-discount').append(html);
    })
</script>






<script>
    $(document).ready(function(){
        $('.articleInvoice').on('click', function(e) {

                e.preventDefault();

                //$('#loading').css('display', 'flex');
                $('article-invoice-detail').empty();
                var url = $(this).data('url');
                var method = $(this).data('method');

                 $.ajax({
                     url: url,
                     method: method,
                     success: function(data) {

                         //$('#loading').css('display', 'none');
                         $('#article-invoice-detail').empty();
                         $('#article-invoice-detail').append(data);
                     }
                 })

            });
    });
</script>