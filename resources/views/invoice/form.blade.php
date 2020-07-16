{!! Form::open(['route' => 'invoice.store']) !!}
<div class="card card-custom gutter-b example example-compact">
	<div class="card-header">
		<h3 class="card-title">
			Crear Factura
		</h3>
  </div>
  <div class="card-body">
	<div class="form-group form-group-last">
        <div class="row">
            <div class="col-md-4">
                {{ Form::label('Articulo')}}
                <select name="article_id" id="article" class="form-control">
                    @foreach ($articles as $article)
                        <option value="{{$article->id}}" placeholder="Seleccione">{{$article->name}} - {{$article->color->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-1">
                {{ Form::label('Stock')}}
                <input disabled  class="form-control stock">
            </div>
            <div class="col-md-2">
                {{ Form::label('Precio')}}
                <input type="number" class="form-control" name="discount" id="price">
            </div>
            <div class="col-md-1">
                {{ Form::label('Cantidad')}}
                <input type="number" class="form-control" name="discount"  value="1">
            </div>
            <div class="col-md-2">
                {{ Form::label('Descuento')}}
                <input type="number" class="form-control" name="discount"  value="0.00">
            </div>
            <div class="col-md-1">
                {{ Form::label('Iva')}}
                <input type="iva" class="form-control" name="discount" >
            </div>
            <div class="col-md-1">
                {{ Form::label('Agregar')}}
                <a type="buttom" class="btn btn-outline-danger" id="addDate">
                    <i class="flaticon2-plus"></i>
                </a>
            </div>
        </div>
    </div>
  </div>

<div class="card-body py-0 pb-40 px-40">
    <!--begin: Datatable-->
    
    <table class="table table-discount table-head-custom table-hover table-vertical-center">
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th>Articulo</th>
                <th></th>
                <th></th>
                <th>Descontar</th>
            </tr>
        </thead>
        <tbody>

        </tbody>

    </table>

</div>
    <div class="card-footer">
		<button type="submit" class="btn  btn-warning mr-2">Guardar</button>
		<button type="reset" class="btn btn-secondary">Cancelar</button>
    </div>
</div>
{!! Form::close() !!}

