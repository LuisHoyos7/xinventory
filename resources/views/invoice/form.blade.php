<card-pos></card-pos>

{{--{!! Form::open(['route' => 'invoice.store']) !!}
<div class="card card-custom gutter-b example example-compact">
	<div class="card-header">
		<h3 class="card-title">
            @if($invoiceType == 'VENTA')
            Crear Factura de Venta
            @else
            Crear Factura de Compra
            @endif
        </h3>
        <div class="col-md-8 my-5">
            <select id="person-id" class="form-control select2" name="person_id"></select>
        </div>
  </div>
  <div class="card-body">
	<div class="form-group form-group-last">
        <div class="row">
            <div class="col-md-4">
                {{ Form::label('Articulo')}}
                <select id="article" class="form-control select2" name="article_id"></select>
            </div>
            <div class="col-md-1">
                {{ Form::label('Stock')}}
                <input disabled  class="form-control stock" name="stock" id="stock">
            </div>
            <div class="col-md-2">
                {{ Form::label('Precio')}}
                <input type="number" class="form-control" name="price" id="price" id="price" required>
            </div>
            <div class="col-md-1">
                {{ Form::label('Cantidad')}}
                <input type="number" class="form-control amount" name="amount"  id="amount" value="0" required >
            </div>
            <div class="col-md-2">
                {{ Form::label('Descuento')}}
                <input type="number" class="form-control" name="discount" id="discount" value="0" required>
            </div>
            <div class="col-md-1">
                {{ Form::label('Iva')}}
                <input type="iva" class="form-control" name="iva" id="iva" value="0" required>
            </div>
            <div class="col-md-1">
                {{ Form::label('Agregar')}}
                <button class="btn btn-icon btn-light-success" id="addInvoice">
                    <i class="flaticon2-plus"></i>
                </button>
                <!--<a type="buttom" class="btn btn-icon btn-light-success" id="addInvoice">
                    <i class="flaticon2-plus"></i>
                </a>-->
            </div>
        </div>
    </div>
  </div>

  <div class="card-body py-0 pb-40 px-10" id="div-article-js">
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
            <!--llenaod con JS-->
        </tbody>
        <tfoot class="mt-50">
            <tr class="py-30">
                <td><h4>Subtotal</h4></td>
                <td>$<b id="totalPrice"></b></td>
                <td><b id="totalAmount"></b></td>
                <td>$<b id="totalDiscount"></b></td>
                <td><b id="totalIva"></b></td>
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
    <div class="card-footer" id="buttom-article-js">
		<button type="submit" class="btn  btn-warning mr-2">Guardar</button>
		<button type="reset" class="btn btn-secondary">Cancelar</button>
    </div>
</div>
{!! Form::close() !!}

@push('scripts')
<script>
    $('#person-id').select2({
        placeholder: 'Buscar cliente por identificación o nombres',
        delay: 250,
        minimumInputLength: 1,
        ajax: {
            url: '{{ route("person.customers") }}',
            dataType: 'json',
        },
    });

    $('#article').select2({
        placeholder: 'Buscar artículo',
        delay: 250,
        minimumInputLength: 1,
        ajax: {
            url: '{{ route("article.list") }}',
            dataType: 'json',
        },
    });
</script>
@endpush--}}
