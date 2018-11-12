var $grid = $('.blogGrid .content').isotope({

    layoutMode: 'fitRows',
    itemSelector: '.single-blog-preview',
    percentPosition: true,
    fitRows: {
      gutter: '.gutter-sizer'
    }
});
// layout Isotope after each image loads
$grid.imagesLoaded().progress( function() {
  $grid.isotope('layout');
});

$('*[data-filter=".filter-uncategorized"]').hide();


$('.blog-filter-buttons').on( 'click', '.button', function() {
  var filterValue = $(this).attr('data-filter');
  console.log(filterValue);
  $grid.isotope({ filter: filterValue });

  $('.blog-filter-buttons .button').removeClass('active-cat-button');
  $(this).addClass('active-cat-button');
});
