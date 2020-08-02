<div class="card card-custom gutter-b">
	<div class="card-body mb-10 px-20">
		<div id="kt_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row">
                <div class="table-responsive table-sm">
                    <table class="table table-head-custom table-hover table-vertical-center" id="articleType" role="grid" aria-describedby="kt_datatable_info">
			            <thead class="thead-light">
                            <tr>
                                <th>Id</th>
                                <th>Factura Numero</th>
                                <th>Articulo</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Descuento</th>
                                <th>Iva</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($articleInvoices as $articleInvoice)
                            <tr>
                                <td>{{$articleInvoice->id}}</td>
                                <td>{{$articleInvoice->invoice->id}}</td>
                                <td>{{$articleInvoice->article->name}}</td>
                                <td>{{number_format($articleInvoice->amount_article)}}</td>
                                <td>{{number_format($articleInvoice->price_article,2, '.', ',')}}</td>
                                <td>{{number_format($articleInvoice->discount,2, '.', ',')}}</td>
                                <td>{{$articleInvoice->iva->name}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
	    </div>
    </div>
</div>