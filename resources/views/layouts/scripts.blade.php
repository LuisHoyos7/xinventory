	
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
		
<script defer>
    $(document).ready(function() {
        $('#category').dataTable( {
            "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
            },
            dom: 'Bfrtip',
            buttons: [ 
            {
                extend: 'excelHtml5',
                title: 'Reporte Estudiantes'
            },
            {
                extend: 'pdfHtml5',
                title: 'Reporte Estudiantes',
                exportOptions: {
                columns: [0,1]
                }
            }
            ]
        });
    });
</script>

<script defer>
    $(document).ready(function() {
        $('#color').dataTable( {
            "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
            },
            dom: 'Bfrtip',
            buttons: [ 
            {
                extend: 'excelHtml5',
                title: 'Reporte Estudiantes'
            },
            {
                extend: 'pdfHtml5',
                title: 'Reporte Estudiantes',
                exportOptions: {
                columns: [0,1]
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

    //peticion ajax para llenar el STOCK 
    $('#article').on('change', function (e) {
        var article_id =  $("#article option:selected").val();

        $.ajax({
                url:  'getArticleStock/' + article_id,
                type: 'GET',
                dataType: 'json'
        })

        .done(function (stock) {
            $("#stock").val(stock);
        })
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
                <td><input  style="width: 6em" type="number" name="detalle[${article_id}][descontar]" value="${discount}"></td>
            </tr>`;
        $('.table-discount').append(html);
    })
</script>