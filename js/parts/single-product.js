$('.single-product-toggle-button.product-description').on('click', function(){

    $('.single-product-toggle-button').removeClass('single-product-active');
    $('.single-product-toggle').removeClass('single-product-active');
    $('.product-description').addClass('single-product-active');
});

$('.single-product-toggle-button.ingredients').on('click', function(){

    $('.single-product-toggle-button').removeClass('single-product-active');
    $('.single-product-toggle').removeClass('single-product-active');
    $('.ingredients').addClass('single-product-active');
});

$('.single-product-toggle-button.suggested-uses').on('click', function(){

    $('.single-product-toggle-button').removeClass('single-product-active');
    $('.single-product-toggle').removeClass('single-product-active');
    $('.suggested-uses').addClass('single-product-active');
});


$('.value div input').each(function(){

  if ($(this).attr('checked') == 'checked') {
    $(this).parent().addClass('active-size-button');
  }
});


$('.value div').on('click', function(){
  $('.value div').removeClass('active-size-button');
  $(this).addClass('active-size-button');
});

// Set Product Info Container Height
(function prodInfoHeight() {

  var tl = new TimelineMax(),
      prodHeight = $('.single-product-toggle.product-description').outerHeight();

  tl.set($('.product-toggle-container'), {minHeight:prodHeight});
}());
