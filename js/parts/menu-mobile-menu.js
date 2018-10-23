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
