(function ($, root, undefined) {$(function () {
'use strict';
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

//USE THE BELOW AS TEMPLATE FOR FUNCTION FILES

var colorBlue = '#00426a';
var colorLightBlue = '#53caec';
var colorLightGray = '#bebfbe';
var colorGray = '#7c878e';
var colorDarkGray = '#3f4444';

(function menuToggle() {

  var menuToggle = $('.mobileToggle');
  var drawer = $('.left-menu-list');
  var ham1 = $(".hamTop");
  var ham2 = $(".hamMid");
  var ham3 = $(".hamBot");
  var uniEaseOut = Power2.easeOut;
  var uniEaseIn = Power2.easeIn;
  var uniTime = 0.3;

  function closeMenu() {
    var tl = new TimelineMax();

    menuToggle.removeClass('openMenu');

    tl.to(drawer, uniTime, {left:"-100%", ease:uniEaseIn}, 'drawerOut');
    tl.to(ham1, uniTime, {rotation:0, y:0},'drawerOut');
    tl.to(ham2, uniTime, {x:0, opacity:1},'drawerOut');
    tl.to(ham3, uniTime, {rotation:0, y:0},'drawerOut');
  }

  function openMenu() {
    var tl = new TimelineMax();

    menuToggle.addClass('openMenu');

    tl.to(drawer, uniTime, {left:0, ease:uniEaseOut}, 'drawerIn');
    tl.to(ham1, uniTime, {rotation:-45, y:6, x:0},'drawerIn');
    tl.to(ham2, uniTime, {x:5, opacity:0},'drawerIn');
    tl.to(ham3, uniTime, {rotation:45, y:-6, x:0},'drawerIn');
  }

  menuToggle.on('click', function(){

    if($(this).hasClass('openMenu')) {
      closeMenu();
    } else {
      openMenu();
    }
  });

}());

(function menuStuff() {



  $('.searchIcon').on('click', function(event) {
    event.preventDefault();

    if ($(this).hasClass('searchOpen')) {
      closeSearch();
    } else {
      openSearch();
    }
  });

  var tl = new TimelineMax();
  var searchForm = $('.searchForm');
  var formHeight = $('.searchForm').height();

  tl.set(searchForm, {top:-formHeight});

  function closeSearch() {
    var tl = new TimelineMax();
    var $this = $('.searchIcon');
    var icon = $this.parent();
    var searchForm = $('.searchForm');
    var formHeight = $('.searchForm').height();
    var uniTime = 0.3;
    var UniEase1 = Power4.easeOut;
    var UniEase2 = Power4.easeIn;

    $this.removeClass('searchOpen');
    tl.to($this, uniTime, {rotation:0, transformOrigin:'50% 50%', ease: UniEase2}, 'openSearch');
    tl.to(searchForm, uniTime, {top:-formHeight, ease: UniEase2}, 'openSearch');
  }

  function openSearch() {
    var tl = new TimelineMax();
    var $this = $('.searchIcon');
    var icon = $this.parent();
    var searchForm = $('.searchForm');
    var uniTime = 0.3;
    var UniEase1 = Power4.easeOut;
    var UniEase2 = Power4.easeIn;

    $this.addClass('searchOpen');
    tl.to($this, uniTime, {rotation:90, transformOrigin:'50% 50%', ease: UniEase1}, 'openSearch');
    tl.to(searchForm, uniTime, {top:'100%', ease: UniEase1}, 'openSearch');
  }

  $(document).keyup(function(e) {
      if (e.keyCode == 27  || e.keyCode == 13) { // Esc
        closeSearch();
      }
  });


  if ($(window).width() < 1024) {

    $('.left-menu-list li').on('click', function(event) {

      var tl = new TimelineMax();
      var $this = $(this);
      var carat = $this.find('.menu-carat');
      var subMenu = $this.find('.sub-menu');
      var subLI = subMenu.find('li');

      if ($this.hasClass("openMenu")) {
          tl.to(subMenu, 0.3, {height:0}, 'closeUp');
          tl.to(carat, 0.3, {rotation:135,borderColor:colorBlue}, 'closeUp');
       	  $this.removeClass("openMenu");
      } else {
        tl.set(subMenu, {height:'auto'});
        tl.from(subMenu, 0.3, {height:0}, 'openUp');
        tl.to(carat, 0.3, {rotation:-45, borderColor:colorLightBlue}, 'openUp');
  			$this.addClass("openMenu");
      }

    });

  }
}());

// $('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
// $('.quantity').each(function() {
//   var spinner = $(this),
//     input = spinner.find('input[type="number"]'),
//     btnUp = spinner.find('.quantity-up'),
//     btnDown = spinner.find('.quantity-down'),
//     min = input.attr('min'),
//     max = input.attr('max');
//
//   btnUp.click(function() {
//     var oldValue = parseFloat(input.val());
//     if (oldValue >= max) {
//       var newVal = oldValue;
//     } else {
//       var newVal = oldValue + 1;
//     }
//     spinner.find("input").val(newVal);
//     spinner.find("input").trigger("change");
//   });
//
//   btnDown.click(function() {
//     var oldValue = parseFloat(input.val());
//     if (oldValue <= min) {
//       var newVal = oldValue;
//     } else {
//       var newVal = oldValue - 1;
//     }
//     spinner.find("input").val(newVal);
//     spinner.find("input").trigger("change");
//   });
//
// });

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

$('.testimonial-slider-container').slick({
  autoplay:true,
  nextArrow: $('.nextArrow'),
});

});})(jQuery, this);
