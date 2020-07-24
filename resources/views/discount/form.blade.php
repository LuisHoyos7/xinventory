@if(!empty($idStock))
{!! Form::open(['route' => 'discount.stock' ]) !!}
@elseif(empty($idStock))
{!! Form::open(['route' => 'discount.stock.add' ]) !!}
@endif
<div class="card card-custom gutter-b example example-compact">
	<div class="card-header">
		<h3 class="card-title">
			@if(!empty($idStock))
                Reducciones al Stock de Articulos 
            @elseif(empty($idStock))
                Adiciones al Stock de Articulos
            @endif
		</h3>
  </div>
  <div class="card-body">
	<div class="form-group form-group-last">
        <div class="row">
            <div class="col-md-5 offset-1">
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
                @if(!empty($idStock))
                    {{ Form::label('Restar')}} 
                @elseif(empty($idStock))
                    {{ Form::label('Sumar')}}
                @endif
                <input type="number" class="form-control" name="discount" id="discount" value="0">
            </div>
            <div class="col-md-1">
                <a type="buttom" class="btn btn-icon btn-danger my-8" data-toggle="tooltip" data-theme="dark" title="Agregar Item" id="addDate">
                    <i class="flaticon2-plus"></i>
                </a>
            </div>
        </div>
    </div>
  </div>

<div class="card-body py-0 pb-40 px-40">
    <!--begin: Datatable-->
    
    <table id="movementStockJs" class="table table-discount table-head-custom table-hover table-vertical-center">
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th>Articulo</th>
                <th></th>
                <th></th>
                @if(!empty($idStock))
                    <th>Restar cantidad</th>
                @elseif(empty($idStock))
                    <th>Sumar Cantidad</th>
                @endif
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

