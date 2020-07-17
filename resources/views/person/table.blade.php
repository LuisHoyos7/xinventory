<div class="card card-custom gutter-b">
	<div class="card-header flex-wrap py-3">
		<div class="card-title">
			<h3 class="card-label">
				Personas
				<span class="d-block text-muted pt-2 font-size-sm">Listado general de  Personas</span>
			</h3>
		</div>
		<div class="card-toolbar">
            <a href="{{route('person.create')}}" class="btn btn-success font-weight-bolder">
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
                                <th>Nombre</th>
                                <th>Celular</th>
                                <th>Identificacion</th>
                                <th>Es Cliente</th>
                                <th>Es Trabajador</th>
                                <th>Es Proveedor</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($people as $person)
                            <tr>
                                <td>{{$person->id}}</td>
                                <td>{{$person->name}}</td>
                                <td>{{$person->mobile}}</td>
                                <td>{{$person->nuip}}</td>
                                <td>{{$person->is_customer}}</td>
                                <td>{{$person->is_employed}}</td>
                                <td>{{$person->is_provider}}</td>
                                <td>                                        
                                    {{Form::open(['route' => ['person.destroy', $person->id], 'method' => 'DELETE'])}}
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <a href="{{route('person.edit', $person->id) }}" class="btn btn-icon btn-outline-success btn-shadow font-weight-bold" data-toggle="tooltip" data-theme="dark" title="Editar Articulo">
                                                <i class="flaticon-doc"></i>
                                            </a>
                                            <button type="submit" class="btn btn-icon btn-outline-danger btn-shadow font-weight-bold" data-toggle="tooltip" data-theme="dark" title="Eliminar Articulo">
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

<!-- Modal agregar STOCK-->
@if(!empty($article))
{!! Form::open(['route' => ['add.stock', $article->id], 'method' => 'PUT']) !!}
<div class="modal fade" id="addStock" tabindex="-1" role="dialog" aria-labelledby="addStockLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addStock">Agregar Stock a {{$article->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        {{ Form::label('Cantidad Actual')}}
                        <input type="text" class="form-control" disabled value="{{$article->stock}}">
                    </div>
                    <div class="col-md-6">
                        {{ Form::label('Cantidad a Ingresar')}}
                        {{ Form::number('stock', null, ['class'  => 'form-control', 'placeholder' => 'Ingesa una cantidad']) }}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-outline-success font-weight-bold">Guardar</button>
                <button type="button" class="btn btn-outline-secondary font-weight-bold" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
@endif