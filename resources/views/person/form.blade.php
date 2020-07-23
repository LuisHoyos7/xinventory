
@if(empty($person))
{!! Form::open(['route' => 'person.store']) !!}
@else
{!! Form::model($person, ['route' => ['person.update', $person->id], 'method' => 'PUT']) !!}
@endif
<div class="card card-custom gutter-b example example-compact">
	<div class="card-header">
		<h3 class="card-title">
			Agregar Persona
		</h3>
  </div>
  <div class="card-body">
		<div class="form-group form-group-last">
      <div class="row">
        <div class="col-md-4">
          {{ Form::label('Nombre')}}
          {{ Form::text('name', null, ['class'  => 'form-control', 'placeholder' => 'Ingesa un Nombre']) }}
        </div>
        <div class="col-md-4">
          {{ Form::label('Direccion')}}
          {{ Form::text('direction', null, ['class'  => 'form-control', 'placeholder' => 'Ingesa una direccion']) }}
        </div>
        <div class="col-md-4">
          {{ Form::label('Celular')}}
          {{ Form::text('mobile', null, ['class'  => 'form-control', 'placeholder' => 'Ingesa una Celular']) }}
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          {{ Form::label('Correo Electronico')}}
          {{ Form::text('mail', null, ['class'  => 'form-control', 'placeholder' => 'Ingesa una correo']) }}
        </div>
        <div class="col-md-3">
          {{ Form::label('Identificacion')}}
          {{ Form::text('nuip', null, ['class'  => 'form-control', 'placeholder' => 'Ingesa una identificacion']) }}
        </div>
       <div class="col-md-5">
          <div class="col-9 col-form-label py-12">
            <div class="checkbox-inline">
              <div class="col-md-5">
                  <label>
                    {{ Form::checkbox('is_customer') }}
                    <span></span>Cliente
                  </label>
              </div>
              <div class="col-md-5">
                  <label>
                    {{ Form::checkbox('is_provider') }}
                    <span></span>Proveedor
                  </label>
              </div>
              <div class="col-md-5">
                  <label>
                    {{ Form::checkbox('is_worker') }}
                    <span></span>Empleado
                  </label>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
  <div class="card-footer">
	  <button type="submit" class="btn btn-warning mr-2">Guardar</button>
	  <button type="reset" class="btn btn-secondary">Cancelar</button>
  </div>
</div>

{!! Form::close() !!}



