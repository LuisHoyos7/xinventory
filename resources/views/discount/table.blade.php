<div class="card card-custom gutter-b">
	<div class="card-header flex-wrap py-3">
		<div class="card-title">
			<h3 class="card-label">
				Descuentos Realizados 
				<span class="d-block text-muted pt-2 font-size-sm">Listado general de Descuentos</span>
			</h3>
		</div>
		<div class="card-toolbar">
            <a href="{{route('discount.create')}}" class="btn btn-success font-weight-bolder">
                <span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:/metronic/themes/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Flatten.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <circle fill="#000000" cx="9" cy="15" r="6"></circle>
                            <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"></path>
                        </g>
                    </svg><!--end::Svg Icon-->
                </span>	Nuevo
            </a>
        <!--end::Button-->
		</div>
	</div>
	<div class="card-body mb-10 px-20">
		<!--begin: Datatable-->
		<div id="kt_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-head-custom table-hover table-vertical-center" id="article" role="grid" aria-describedby="kt_datatable_info">
			            <thead class="thead-light">
                            <tr>
                                <th>Id</th>
                                <th>Articulo</th>
                                <th>Stock Previo</th>
                                <th>Cantidad Descontada</th>
                                <th>Fecha Descuento</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($discounts as $discount)
                            <tr>
                                <td>{{$discount->id}}</td>
                                <td>{{$discount->article->name}}-{{$discount->article->color->name}}</td>
                                <td>{{$discount->previousStock}}</td>
                                <td>{{$discount->amount}}</td>
                                <td>{{$discount->created_at}}</td>
                                <td>                                        
                                    {{Form::open(['route' => ['discount.destroy', $discount->id], 'method' => 'DELETE',  'class' => 'myForm' , 'onsubmit' => 'false'])}}
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <button  class="btn btn-icon btn-outline-danger btn-shadow font-weight-bold" data-toggle="tooltip" data-theme="dark" title="Eliminar Descuento">
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