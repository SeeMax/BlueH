(function menuStuff() {

  $('.cartTrigger').on("click", function() {

    var tl = new TimelineMax();
    var tl2 = new TimelineMax();
    var cart = $('.cartPopout');

    if ($(this).hasClass('cartOpen')) {
      $(this).removeClass('cartOpen');
      tl.to(cart, 0.3, {right:"-100%"});
      tl.to($(this), 0.3, {color:colorBlue}, "-0.3");
    } else {
      $(this).addClass('cartOpen');
      tl2.to(cart, 0.3, {right:0});
      tl2.to($(this), 0.3, {color:colorLightBlue}, "-0.3");
    }

  });


}());
