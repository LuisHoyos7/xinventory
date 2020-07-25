
@if(empty($article))
{!! Form::open(['route' => 'article.store']) !!}
@else
{!! Form::model($article, ['route' => ['article.update', $article->id], 'method' => 'PUT']) !!}
@endif
<div class="card card-custom gutter-b example example-compact">
	<div class="card-header">
		<h3 class="card-title">
			Agregar Articulo 
		</h3>
  </div>
  <div class="card-body">
		<div class="form-group form-group-last">

      <div class="row">
        <div class="col-md-4">
          {{ Form::label('Nombre')}}
          {{ Form::text('name', null, ['class'  => 'form-control', 'placeholder' => 'Ingesa un Nombre', 'required' => 'required']) }}
        </div>
        <div class="col-md-4">
          {{ Form::label('Precio (venta)')}}
          {{ Form::number('price', null, ['class'  => 'form-control', 'placeholder' => 'Ingesa un Precio']) }}
        </div>
        <div class="col-md-4">
          {{ Form::label('Stock')}}
          {{ Form::number('stock', null, ['class'  => 'form-control', 'placeholder' => 'Ingesa una Cantidad']) }}
        </div>
      </div><br>

      <div class="row">
        <div class="col-md-4">
          {{ Form::label('Categoria')}}
          {{ Form::select('category_id',$category, null, ['class'  => 'form-control', 'placeholder' => 'Seleccione']) }}
        </div>
        <div class="col-md-4">
          {{ Form::label('Tipo Articulo')}}
          {{ Form::select('article_type_id',$articleType, null, ['class'  => 'form-control', 'placeholder' => 'Seleccione']) }}
        </div>
        <div class="col-md-4">
          {{ Form::label('Medida')}}
          {{ Form::select('measure_unit_id',$measureUnit, null, ['class'  => 'form-control', 'placeholder' => 'Seleccione']) }}
        </div>
      </div><br>

      <div class="row">
        <div class="col-md-6 offset-3">
          {{ Form::label('Color')}}
          {{ Form::select('color_id',$color, null, ['class'  => 'form-control', 'placeholder' => 'Seleccione']) }}
        </div>
      </div>

    </div>
  </div>
  <div class="card-footer">
		@if(empty($article))
      <button type="submit" class="btn btn-warning mr-2">Guardar</button>
    @else
      <button type="submit" class="btn btn-success mr-2">Actualizar</button>
    @endif
      <button type="reset" class="btn btn-secondary">Cancelar</button>
	</div>
</div>

{!! Form::close() !!}



