$(document).ready(function() {
  imagePopup();
  galleryPopup();
  init_masonry();
  instagram_feed();
  menu_trigger();
  section_bg();
  init_counters();
});


/* ---------------------------------------------
 Sections backgrounds
 --------------------------------------------- */  

function section_bg(){
  
    var pageSection = $(".home-section, .page-section, .small-section, .split-section");
    pageSection.each(function(indx){
        
        if ($(this).attr("data-background")){
            $(this).css("background-image", "url(" + $(this).data("background") + ")");
        }
    });
}

/* ---------------------------------------------
 Image
 --------------------------------------------- */
 function imagePopup(){
  $(".work-lightbox-link").magnificPopup({
      gallery: {
          enabled: false
      },
      mainClass: "mfp-fade"
  });
}

/* ---------------------------------------------
 Gallery
 --------------------------------------------- */
function galleryPopup(){
  $('.btn-gallery').each(function(index , value){
    var gallery = $(this);
    var galleryImages = $(this).data('links').split(',');
      var items = [];
      for(var i=0;i<galleryImages.length; i++){
        items.push({
          src:galleryImages[i],
          title:''
        });
      }
      gallery.magnificPopup({
        mainClass: 'mfp-fade',
        items:items,
        gallery:{
          enabled:true,
          tPrev: $(this).data('prev-text'),
          tNext: $(this).data('next-text')
        },
        type: 'image'
      });
  }); 
}
      
/* ---------------------------------------------
 Masonry
 --------------------------------------------- */
/*
function initWorkFilter(){
  (function($){
   "use strict";
   var isotope_mode;
   if (work_grid.hasClass("masonry")){
       isotope_mode = "masonry";
   } else{
       isotope_mode = "fitRows"
   }
   
   $(".filter").click(function(){
       $(".filter").removeClass("active");
       $(this).addClass("active");
       fselector = $(this).attr('data-filter');

       work_grid.imagesLoaded(function(){
           work_grid.isotope({
               itemSelector: '.mix',
               layoutMode: isotope_mode,
               filter: fselector
           });
       });
       return false;
   });
      
   if (window.location.hash) {
       $(".filter").each(function(){
           if ($(this).attr("data-filter") == "." + window.location.hash.replace("#", "")) {
               $(this).trigger('click');
               
               $("html, body").animate({
                   scrollTop: $("#portfolio").offset().top
               });
               
           }
       });
   }

   work_grid.imagesLoaded(function(){
       work_grid.isotope({
           itemSelector: '.mix',
           layoutMode: isotope_mode,
           filter: fselector
       });
   });
      
      
  })(jQuery);
}

*/


function init_masonry(){
  (function($){    
  
      $(".masonry").imagesLoaded(function(){
          $(".masonry").masonry();
      });
      
  })(jQuery);
}


/* ---------------------------------------------
 Instagram Feed
 --------------------------------------------- */

function instagram_feed(){
  var token = '145174967.88e3497.1f1ba535d15d47b8b511970383c27456',
  num_photos = 10;

  $.ajax({
  url: 'https://api.instagram.com/v1/users/self/media/recent',
  dataType: 'jsonp',
  type: 'GET',
  data: {access_token: token, count: num_photos},
  success: function(data){
    console.log(data);
    for( x in data.data ){
      $('#mk_instafeed').append('<li><img src="'+data.data[x].images.low_resolution.url+'"></li>');
    }
  },
  error: function(data){
    console.log(data);
  }
  });
}


/* ---------------------------------------------
 Menu
 --------------------------------------------- */
 function menu_trigger(){
    $( "#burger" ).click(function() {
        $(".menu").toggleClass("open");
        $("#burger").toggleClass("open");
    });
}



    
/* ---------------------------------------------
    Some facts section
    --------------------------------------------- */

    function init_counters(){
    $(".count-number").appear(function(){
        var count = $(this);
        count.countTo({
            from: 0,
            to: count.html(),
            speed: 1300,
            refreshInterval: 60,
        });
        
    });
}