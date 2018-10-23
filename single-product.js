$('.single-product-toggle-button.main-description').on('click', function(){

    $('.single-product-toggle-button').removeClass('single-product-active');
    $('.single-product-toggle').removeClass('single-product-active');
    $('.main-description').addClass('single-product-active');
});

$('.single-product-toggle-button.ingredients').on('click', function(){

    $('.single-product-toggle-button').removeClass('single-product-active');
    $('.single-product-toggle').removeClass('single-product-active');
    $('.ingredients').addClass('single-product-active');
});
