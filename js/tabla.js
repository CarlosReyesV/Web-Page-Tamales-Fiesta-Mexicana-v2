/* Desplegar modalbox de capturas */
var modCapturas = document.getElementById('capturaID');
var modCancelar = document.getElementById('cancelarID');
// Cuando se presiona fuera del modal, se cierra
window.onclick = function(event) {
    if (event.target == modCapturas) {
        modCapturas.style.display = "none";
    }
    if (event.target == modCancelar) {
        modCancelar.style.display = "none";
    }
}

function sumaNV(){
    /* var nVenta = new Array();
    var objNV = {};
    objNV.Productos;
    objNV.Existencia;
    objNV.Cantidad;
    objNV.Descuento;
    objNV.Piezas_Litros;
    objNV.Precio_Unitario;
    objNV.Precio;
    nVenta.push(objNV);
    objNV = {};
    var sumas;
    var total = 0;
    var d1 = nVenta;
    for (var i = 0; i <d1.length; i++) {
        sumas = $('<tr/>'); */
        /* 
        sumas.append("<td>" + d1[i].description + "</td>");
        sumas.append("<td>" + d1[i].Qty + "</td>");
        sumas.append("<td>" + d1[i].unitprice + "</td>");
        sumas.append("<td >" + d1[i].value + "</td>");
        sumas.append("<td>" + d1[i].disc + "</td>");
        sumas.append("<td>" + d1[i].tax + "%", "</td>");
        sumas.append("<td>" + d1[i].cgst + "</td>");
        sumas.append("<td>" + d1[i].sgst + "</td>");
        sumas.append("<td>" + d1[i].igst + "</td>");
         */
    /*     sumas.append("<td><button id='btndelete'  style='height:28px;width:107px;' class='btn btn-default btn-sm'><i class='glyphicon glyphicon-ok'></i> Delete</button></td>");
        $('#tblCustomers').append(sumas); total += parseFloat(d1[i].unitprice);
        $('#tblCustomers').append(sumas); total += parseFloat(d1[i].value);

        $('#lbltotal').html(total);
    } */

    var table = document.getElementById('productTable');
    let total = 0
    for(let i = 1; i<table.rows.length; i++){
        total+=Number(table.rows[i].cells[2].innerText)
    }
    const totalInput = document.getElementById('lbltotal')
    totalInput.value=total;
};


/* function productAddToTable() { */
    // First check if a <tbody> tag exists, add one if not
    /* if ($("#productTable tbody").length == 0) {
        $("#productTable").append("<tbody></tbody>");
    }
 */
    // Append product to the table
    /* $("#productTable tbody").append(
        "<tr>" +
        "<td>" + $("#productname").val() + "</td>" +
        "<td>" + $("#introdate").val() + "</td>" +
        "<td>" + $("#url").val() + "</td>" +
        "<td>" +
        "<button type='button' onclick='productDelete(this);' class='btn btn-default'>" + "<span class='glyphicon glyphicon-remove' />" +
        "</button>" +
        "</td>" +
        "</tr>");
}
 */

/* function productDelete(ctl) {
    $(ctl).parents("tr").remove();
} */