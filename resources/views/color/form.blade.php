
@if(empty($color))
{!! Form::open(['route' => 'color.store']) !!}
@else
{!! Form::model($color, ['route' => ['color.update', $color->id], 'method' => 'PUT']) !!}
@endif
<div class="card card-custom gutter-b example example-compact">
	<div class="card-header">
		<h3 class="card-title">
			Agregar un Color
		</h3>
  </div>
  <div class="card-body">
		<div class="form-group form-group-last">
      <div class="row">
        <div class="col-md-8 offset-2">
          {{ Form::label('Referencia')}}
          {{ Form::text('code', null, ['class'  => 'form-control', 'placeholder' => 'Ingesa un Codigo']) }}
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 offset-2">
          {{ Form::label('Nombre')}}
          {{ Form::text('name', null, ['class'  => 'form-control', 'placeholder' => 'Ingesa un Nombre']) }}
        </div>
      </div>
    </div>
  </div>
  <div class="card-footer">
		@if(empty($color))
      <button type="submit" class="btn btn-warning mr-2">Guardar</button>
    @else
      <button type="submit" class="btn btn-success mr-2">Actualizar</button>
    @endif
      <button type="reset" class="btn btn-secondary">Cancelar</button>
	</div>
</div>

{!! Form::close() !!}



