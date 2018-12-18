var $grid = $('.blogGrid .content');
// layout Isotope after each image loads

setTimeout(function(){
  $grid.imagesLoaded().done( function( instance ) {
    console.log('all images successfully loaded');

    if($(window).width() >= 768){
      $grid.isotope({
          layoutMode: 'fitRows',
          itemSelector: '.single-blog-preview',
          percentPosition: true,
          fitRows: {
            gutter: '.gutter-sizer'
          }
      });
    } else {
      $grid.isotope({
        itemSelector: '.single-blog-preview',
      });
    }
  });
}, 100);

$('*[data-filter=".filter-uncategorized"]').hide();


$('.blog-filter-buttons').on( 'click', '.button', function() {
  var filterValue = $(this).attr('data-filter');
  console.log(filterValue);
  $grid.isotope({ filter: filterValue });

  $('.blog-filter-buttons .button').removeClass('active-cat-button');
  $(this).addClass('active-cat-button');
});
