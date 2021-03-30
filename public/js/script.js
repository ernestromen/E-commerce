$('.add-to-cart-btn').on('click', function () {

$.ajax({

url: BASE_URL + 'shop/add-to-cart',
type: 'GET',
dataType: 'html',
data: { pid: $(this).data('pid') },
success: function () {
window.location.reload();


}


});


});


$('.remove-item-btn').on('click', function () {


if(confirm('are you sure?')){
return true;


}else{
return false;


}



});


$('.update-cart-btn').on('click', function (e) {
e.preventDefault();
$.ajax({

    url: BASE_URL + 'shop/update-cart',
    type: 'GET',
    dataType: 'html',
    data: { pid: $(this).data('pid'), op: $(this).data('op') },
    success: function () {
    window.location.reload();
    
    
    }
    
    
    });



    
});