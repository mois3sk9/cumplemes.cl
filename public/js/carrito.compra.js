/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    $.get('carrito/cantidad', null, function(respuesta){
        $("#navCantidadProductos").html(respuesta.cantidad);
    }, "json");
});

function agregarAlCarro(idProducto, url){
    $.post(url, {'id_producto':idProducto}, function(respuesta, status) {
        $("#navCantidadProductos").html(respuesta.cantidad);
        if(respuesta.estado)
            toastr.success("Producto agregado al carro");
        else
            toastr.error("Producto no ha podido ser agregado al carro");
    }, 'json').error(function(respuesta){
        toastr.error("Producto no ha podido ser agregado al carro", respuesta.responseText.id_producto);
    });
}
/*$(".productoCarro").on('click', function(){
    $.post('carrito', {'id_producto':$(this).attr('id')}, function(respuesta, status){
        
        $("#navCantidadProductos").html(respuesta.cantidad);
        toastr.success("Producto agregado al carro");
 
    },'json').error(function(respuesta){
        console.log(respuesta.responseText);
        toastr.error("Producto no ha podido ser agregado al carro", respuesta.responseText.id_producto);
    });
   
});*/