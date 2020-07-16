{!! Form::open(['route' => 'discount.stock' ]) !!}
<div class="card card-custom gutter-b example example-compact">
	<div class="card-header">
		<h3 class="card-title">
			Descuentos Manuales
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
            <div class="col-md-2">
                {{ Form::label('Stock Actual')}}
                <input disabled  class="form-control stock ">
            </div>
            <div class="col-md-2">
                {{ Form::label('Descontar')}}
                <input type="number" class="form-control" name="discount" id="discount">
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

