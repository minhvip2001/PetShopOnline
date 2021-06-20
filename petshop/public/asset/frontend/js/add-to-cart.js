$(document).ready(function () {
  $(document).on('click', '.add_cart', addToCart)
  $(document).on('click', '.btn-plus', plus)
  $(document).on('click', '.btn-minus', minus)
  $(document).on('click', '.cart_update', cartUpdate)
  $(document).on('click', '.remove-cart-item', removeCart)
})

function addToCart(e) {
  e.preventDefault();
  $('#popup-cart').css('display', 'block')
  let urlCart = $(this).data('url')
  var product_qty = $('input[name=product_qty]')
  $.ajax({
    url: urlCart,
    method: "Get",
    data: product_qty,
    dataType: 'json',
    success: function (data) {
      $('#popup-cart').html(data.data);
      $('.top-cart-content-hover.cart-content').html(data.data1);
    }
  })
}


function minus() {
  let id = $(this).data('id')
  var qty = document.getElementsByClassName("input-quantity-" + id)
  for (i = 0; i < qty.length; i++) {
    var newQuantity = parseInt(qty[i].value) - 1;
    qty[i].value = newQuantity
  }

}

function plus() {
  let id = $(this).data('id')
  var qty = document.getElementsByClassName("input-quantity-" + id)
  for (i = 0; i < qty.length; i++) {
    var newQuantity = parseInt(qty[i].value) + 1;
    qty[i].value = newQuantity
  }
}

function cartUpdate(event) {

  let urlUpdateCart = $('.update_cart_url').data('url')
  let id = $(this).data('id')
  let quantity = $(this).parents('.input_qty_cart').find('input.quantity').val();

  $.ajax({
    type: "Get",
    url: urlUpdateCart,
    data: {
      id: id,
      quantity: quantity
    },
    success: function (data) {
      $('.main-cart-page.main-container.col1-layout').html(data.data);
      $('.modal.cart-content').html(data.data1);
      $('.top-cart-content-hover.cart-content').html(data.data2);
    }
  })
}

function removeCart(event) {
  event.preventDefault();
  let id = $(this).data('id')
  let url = $('.cart-content').data('url')
  $.ajax({
    type: "Get",
    url: url,
    data: { id: id },
    success: function (data) {
      $('.main-cart-page.main-container.col1-layout').html(data.data);
      $('.modal.cart-content').html(data.data1);
      $('.top-cart-content-hover.cart-content').html(data.data2);
    }
  })
}
