<div class="card card-custom gutter-b">
	<div class="card-header flex-wrap py-3">
		<div class="card-title">
			<h3 class="card-label">
                @if($invoiceType == 'VENTA')
                Facturas Por Ventas
                <span class="d-block text-muted pt-2 font-size-sm">Listado general de Facturas por Ventas</span>
                @else 
                Facturas Por Compras
                <span class="d-block text-muted pt-2 font-size-sm">Listado general de Facturas por Compras</span>
                @endif
			</h3>
        </div>
        
        @if($invoiceType == 'VENTA')
		<div class="card-toolbar">
            <a href="{{route('invoice.create', ['invoiceType' => 'VENTA'])}}" class="btn btn-success font-weight-bolder">
                <span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:/metronic/themes/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Flatten.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <circle fill="#000000" cx="9" cy="15" r="6"></circle>
                            <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"></path>
                        </g>
                    </svg><!--end::Svg Icon-->
                </span>	Nueva Venta
            </a>
        <!--end::Button-->
        </div>
        @else
        <div class="card-toolbar">
            <a href="{{route('invoice.create', ['invoiceType' => 'COMPRA'])}}" class="btn btn-success font-weight-bolder">
                <span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:/metronic/themes/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Flatten.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <circle fill="#000000" cx="9" cy="15" r="6"></circle>
                            <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"></path>
                        </g>
                    </svg><!--end::Svg Icon-->
                </span>	Nueva Compra
            </a>
        <!--end::Button-->
        </div>
        @endif
	</div>
	<div class="card-body mb-10 px-20">
		<!--begin: Datatable-->
		<div id="kt_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row">
                <div class="table-responsive  table-sm">
                    <table class="table table-head-custom table-hover table-vertical-center table-sm" id="invoice" role="grid" aria-describedby="kt_datatable_info">
			            <thead class="thead-light">
                            <tr>
                                <th>Id</th>
                                <th>Numero</th>
                                <th>Persona</th>
                                <th>Fecha</th>
                                <th>Tipo de Pago</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($invoices as $invoice)
                            <tr>
                                <td>{{$invoice->id}}</td>
                                <td>{{$invoice->number_invoice}}</td>
                                <td>{{$invoice->person->name}}</td>
                                <td>{{$invoice->date}}</td>
                                <td>{{$invoice->paymentType->name}}</td>
                                <td>{{$invoice->estado->name}}</td>
                                <td>                                        
                                    {{Form::open(['route' => ['invoice.destroy', $invoice->id], 'method' => 'DELETE'])}}
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <a target="_blank" href="{{route('invoice.pdf')}}" class="btn btn-icon btn-outline-warning">Pdf</a>
                                            <button type="button" class="btn btn-icon btn-outline-success articleInvoice"
                                                    data-toggle="modal" data-target="#exampleModalCustomScrollable"
                                                    data-url="{{route('article.invoice', $invoice->id)}}"
                                                    data-method="GET">
                                                    <i class="flaticon2-list"></i>
                                            </button>
                                            <button type="submit" class="btn btn-icon btn-outline-danger btn-shadow font-weight-bold" data-toggle="tooltip" data-theme="dark" title="Eliminar Factura">
                                                <i class="flaticon-delete-1"></i>
                                            </button>
                                        </div>
                                    {{Form::close()}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
	    </div><!--end: Datatable-->
    </div>
</div>


<!-- Modal detalles facturas llenado mediant AJAX-->
<div class="modal fade" id="exampleModalCustomScrollable" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Destalles</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div id="article-invoice-detail" data-scroll="true" data-height="300">
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

