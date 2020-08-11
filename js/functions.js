$(document).ready(function()
{

    //modal form modificar el producto
    $('.add_product').click(function(e)
    
    {

e.preventDefault();
var producto= $(this).attr('product');
var action='infoProducto';
$.ajax({
url:'ajax.php',
type:'POST',
async:true,
data:{action:action,producto:producto},

success: function(response){
//console.log(response);
if(response!='error')
{

    var info=JSON.parse(response);
    //console.log(info);
    $('#producto_id').val(info.idproducto);
    $('nameProducto').html(info.nombre);
    $('#nombreproducto').val(info.nombre);
    $('#precioproducto').val(info.precio);
    $('#stockproducto').val(info.stock);
    $('#tipoproducto').val(info.tipo);
    $('#descripcionproducto').val(info.descripcion);
}
},
error: function(error){
    //console.log(error);
}
});

$('.modal').fadeIn();
    });
});


function sendDataProduct()
{

    //$('.alertAddProduct').html('');

    $.ajax({
        url:'ajax.php',
        type:'POST',
        async:true,
        data:$('#form_add_product').serialize(),
        
        success: function(response){
        console.log(response);
        },
        error: function(error){
            console.log(error);
        }
        });

}


function closeModal(){
//$('#nombreproducto').val(''); //esto ponemos para limpiar los input
//$('-alertAddProduct').html(''); //este es para limpiar el div
    $('.modal').fadeOut();
}