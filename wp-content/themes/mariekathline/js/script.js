// Smooth Scroll

$(document).ready(function() {
	$('.smoothScroll').on('click', function() { // Au clic sur un élément
		var page = $(this).attr('href'); // Page cible
		var speed = 750; // Durée de l'animation (en ms)
		$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
		return false;
	});
});

/*----------------------------------*/

// Filter with isotope

// external js: isotope.pkgd.js
// init Isotope
var $grid = $('.grid').isotope({
  itemSelector: '.projet',
  layoutMode: 'fitRows',
  getSortData: {
    name: '.name',
    description: '.desciption',
    category: '[data-category]',
  }
});

//filter functions
var filterFns = {
  // show if number is greater than 50
  numberGreaterThan50: function() {
    var number = $(this).find('.number').text();
    return parseInt( number, 10 ) > 50;
  },
  // show if name ends with -ium
  ium: function() {
    var name = $(this).find('.name').text();
    return name.match( /ium$/ );
  }
};



// Bind filter button click
$('#filters').on( 'click', 'button', function() {
  var filterValue = $( this ).attr('data-filter');
  // use filterFn if matches value
  filterValue = filterFns[ filterValue ] || filterValue;
  $grid.isotope({ filter: filterValue });
});

// Bind sort button click
$('#sorts').on( 'click', 'button', function() {
  var sortByValue = $(this).attr('data-sort-by');
  $grid.isotope({ sortBy: sortByValue });
});

// Change is-checked class on buttons
$('.button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
});

/*----------------------------------*/

// Menu Burger

(function($){

    /* Pour ouvrir le menu burger */
    $('.burger-icon').click(function(e){
        e.preventDefault();
        $('.global-filter').addClass('on');
        $('.global-filter').removeClass('off');
        $('.burger-menu').addClass('on');
        $('.burger-menu').removeClass('off');
        $('.content').addClass('off');
        $('.content').removeClass('on');
    });

    /* Pour retourner sur le site */
    $('.global-filter').click(function(e){
        $('.global-filter').addClass('off');
        $('.global-filter').removeClass('on');
        $('.burger-menu').addClass('off');
        $('.burger-menu').removeClass('on');
        $('.content').addClass('on');
        $('.content').removeClass('off');
    })

     $('.menu-close').click(function(e){
        $('.global-filter').addClass('off');
        $('.global-filter').removeClass('on');
        $('.burger-menu').addClass('off');
        $('.burger-menu').removeClass('on');
        $('.content').addClass('on');
        $('.content').removeClass('off');
    })

})(jQuery);




//Modal

  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });


