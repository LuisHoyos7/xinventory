{!! Form::open(['route' => 'invoice.store']) !!}
<div class="card card-custom gutter-b example example-compact">
	<div class="card-header">
		<h3 class="card-title">
			Crear Factura al Cliente
        </h3>
        <div class="col-md-8">
            {{ Form::label('')}}
            <select name="person_id" id="person" class="form-control" style="background:#E5EAEE">
                @foreach ($people as $person)
                   <option value="{{$person->id}}" placeholder="Seleccione"><b class="text-white">{{$person->name}}</b></option>
                @endforeach
            </select>
        </div>
  </div><br>
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
                <input disabled  class="form-control stock" name="stock" id="stock">
            </div>
            <div class="col-md-2">
                {{ Form::label('Precio')}}
                <input type="number" class="form-control" name="price" id="price" id="price">
            </div>
            <div class="col-md-1">
                {{ Form::label('Cantidad')}}
                <input type="number" class="form-control amount" name="amount"  id="amount" value="0" >
            </div>
            <div class="col-md-2">
                {{ Form::label('Descuento')}}
                <input type="number" class="form-control" name="discount" id="discount" value="0">
            </div>
            <div class="col-md-1">
                {{ Form::label('Iva')}}
                <input type="iva" class="form-control" name="iva" id="iva" value="0">
            </div>
            <div class="col-md-1">
                {{ Form::label('Agregar')}}
                <a type="buttom" class="btn btn-icon btn-danger" id="addInvoice">
                    <i class="flaticon2-plus"></i>
                </a>
            </div>
        </div>
    </div>
  </div>

<div class="card-body py-0 pb-40 px-10">
    <!--begin: Datatable-->
    <table class="table table-discount table-head-custom table-hover table-vertical-center" id="miTabla">
        <thead>
            <tr>
                <th>Articulo</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Descuento</th>
                <th>Iva</th>
                <th>Total</th>
                <th>Quitar</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>

        </tbody>
        <tfoot class="mt-50">
            <tr class="py-30">
                <td><h4>Subtotal</h4></td>
                <td>$<b id="totalPrice"></b></td>
                <td><b id="totalAmount"></b></td>
                <td>$<b id="totalDiscount"></b</td>
                <td><b id="totalIva"></b</td>
                <td>$<b id="total"></b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tfoot>
    </table>
</div>
    <div class="card-footer">
		<button type="submit" class="btn  btn-warning mr-2">Guardar</button>
		<button type="reset" class="btn btn-secondary">Cancelar</button>
    </div>
</div>
{!! Form::close() !!}

