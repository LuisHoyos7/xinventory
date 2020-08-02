$('#div-article-js').hide()
$('#buttom-article-js').hide()
//peticion ajax para llenar el STOCK 
$('#article').on('change', function (e) {
    var article_id =  $("#article option:selected").val();
    $.ajax({
            url:  'getArticleStock/' + article_id,
            type: 'GET',
            dataType: 'json'
    })
    .done(function (article) {
        $(".stock").val(article.stock);
        $("#price").val(article.price);
    })
})
$('#addInvoice').on('click', function (e) {
    e.preventDefault();
    var article_stock = $('#stock').val();
    var article_amount = $("#amount").val();
    if (article_stock <= 0 || article_stock <  article_amount){
        alert('lo sentimos el stock esta en cero o Excede la cantidad en Almacen')
    }
    else{
    $('#div-article-js').show()
    $('#buttom-article-js').show()
    var article_id = $("#article option:selected").val();
    var article_name = $("#article option:selected").text();
    var article_price = $("#price").val();
    var article_discount = $("#discount").val();
    var iva = $("#iva").val();
    var total_price = parseFloat(article_amount) * parseFloat(article_price);
    var html =
        `<tr>
            <td>${article_name}</td>
            <td>${article_price}</td>
            <td>${article_amount}</td>
            <td>${article_discount}</td>
            <td>${iva} </td>
            <td>${total_price}</td>
            <td>
                <buttom id="delete" class="btn btn-icon btn-light-danger">
                    <i class="flaticon2-line"></i>
                </buttom>
            </td>
            <td><input hidden style="width: 6em" type="number" name="detalle[${article_id}][amount]" value="${article_amount}"></td>
            <td><input hidden style="width: 6em" type="number" name="detalle[${article_id}][price]" value="${article_price}"></td>
            <td><input hidden style="width: 6em" type="number" name="detalle[${article_id}][discount]" value="${article_discount}"></td>
            <td><input hidden style="width: 6em" type="number" name="detalle[${article_id}][iva]" value="${iva}"></td>
        </tr>`;
    $('.table-discount').append(html);


    var filas=document.querySelectorAll("#miTabla tbody tr");
    var total_amount=0;
    var total_price=0;
    var total_buy=0;
    var total_discount=0;
    var total_iva=0;
    // recorremos cada una de las filas
    filas.forEach(function(e) {
    // obtenemos las columnas de cada fila
    var columnas=e.querySelectorAll("td");
    // obtenemos los valores de la cantidad y importe
    var amount=parseFloat(columnas[2].textContent);
    var price=parseFloat(columnas[1].textContent);
    var discount = parseFloat(columnas[3].textContent);
    var iva = parseFloat(columnas[4].textContent);
    var total = parseFloat(columnas[5].textContent);
    // mostramos el total por fila
    total_amount+=amount;
    total_price += price;
    total_discount += discount;
    total_iva += iva;
    total_buy += total;
    });
    // mostramos la suma total
    $('#totalPrice').html(total_price.toFixed(2));
    $('#totalAmount').html(total_amount.toFixed(0));
    $('#totalDiscount').html(total_discount.toFixed(2));
    $('#totalIva').html(total_iva.toFixed(2));
    $('#total').html(total_buy.toFixed(2));
    }
    
})
//en este metodo se van agregando los articulos en la vista de descuentos manuales 
// que se van a descontar con su respectiva cantidad a descontar, de igual manera 
// se envia un array detalle[] al controlador con cada uno de los articulos a descontar
$('#addDate').on('click', function (e) {
    e.preventDefault();
    var article_name = $("#article option:selected").text();
    var article_id = $("#article option:selected").val();
    var discount = $("#discount").val();
    var html =
        `<tr>
            <td></td>
            <td></td>
            <td>${article_name}</td>
            <td></td>
            <td></td>
            <td>${discount}</td>
            <td><input hidden style="width: 6em" type="number" name="detalle[${article_id}][descontar]" value="${discount}"></td>
        </tr>`;
    $('.table-discount').append(html);
})