$('.counter').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 10000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
(function() {

    var quotes = $(".quotes");
    var quoteIndex = -1;
    
    function showNextQuote() {
        ++quoteIndex;
        quotes.eq(quoteIndex % quotes.length)
            .fadeIn(500)
            .delay(1000)
            .fadeOut(500, showNextQuote);
    }
    
    showNextQuote();
    
})();
/* Mobile Navigation
    -----------------------------------------------*/



/* HTML document is loaded. DOM is ready. 
-------------------------------------------*/
$(document).ready(function() {

  /* Hide mobile menu after clicking on a link
    -----------------------------------------------*/
    $('.navbar-collapse a').click(function(){
        $(".navbar-collapse").collapse('hide');
    });


 /* Parallax section
    -----------------------------------------------*/
  function initParallax() {
    $('#Xintro').parallax("100%", 0.1);
    $('#Xdetail').parallax("100%", 0.2);
    $('#Xoverview').parallax("100%", 0.3);
    $('#Xdepartmets').parallax("100%", 0.1);
    $('#Xschedule').parallax("100%", 0.3);



  }
  initParallax();

   $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
        $('.go-top').fadeIn(200);
        } else {
          $('.go-top').fadeOut(200);
        }
        });   
        // Animate the scroll to top
      $('.go-top').click(function(event) {
        event.preventDefault();
      $('html, body').animate({scrollTop: 0}, 300);
      })

var $root = $('html, body');

$('a[href^="#X"]').click(function() {
    var href = $.attr(this, 'href');

    $root.animate({
        scrollTop: $(href).offset().top
    }, 500, function () {
        window.location.hash = href;
    });

    return false;
});

$(window).scroll(function() {
    if ($(".navbar").offset().top > 550) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
         $(".navbar1").addClass("hidden");
         $(".navbar2").removeClass("hidden");

    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
        $(".navbar2").addClass("hidden");
         $(".navbar1").removeClass("hidden");
    }
});
  /* Owl Carousel
  -----------------------------------------------*/
  $(document).ready(function() {
    $("#owl-departmets").owlCarousel({
      autoPlay: 6000,
      items : 4,
      itemsDesktop : [1199,2],
      itemsDesktopSmall : [979,1],
      itemsTablet: [768,1],
      itemsTabletSmall: [985,2],
      itemsMobile : [479,1],
    });
  });


  /* Back top
  -----------------------------------------------*/
   


  /* wow
  -------------------------------*/
  new WOW({ mobile: false }).init();

  });

