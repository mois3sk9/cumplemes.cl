/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(".productoCarro").on('click', function(){
    $.post('carrito', {'id_producto':$(this).attr('id')}, null,'json');
   
   console.log("producto pinchado");
});