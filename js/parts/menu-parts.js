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
