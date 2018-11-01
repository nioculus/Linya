(function($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 70)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 100
  });
    

    
  // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);
var btnTerms=$("#btn-terms");var btnTermsOnNav=$("#btnTC");var btnCloseTerms=$("#terms-btn-close");btnTerms.click(function(){$("#terms").height("100%");$("#mainNavContent").removeClass("show");$('html,body').animate({scrollTop:0},700)});btnTermsOnNav.click(function(){$("#terms").height("100%");$("#mainNavContent").removeClass("show");$('html,body').animate({scrollTop:0},700)});btnCloseTerms.click(function(){$("#terms").height("0%")});
    
    var btnPolicy=$("#btn-policy");var btnPolicyOnNav=$("#btnPG");var btnClosePolicy=$("#policy-btn-close");btnPolicy.click(function(){$("#policy").height("100%");$("#mainNavContent").removeClass("show");$('html,body').animate({scrollTop:0},700)});btnPolicyOnNav.click(function(){$("#policy").height("100%");$("#mainNavContent").removeClass("show");$('html,body').animate({scrollTop:0},700)});btnClosePolicy.click(function(){$("#policy").height("0%")});  
    
    function disableSubmit() {
  document.getElementById("submit").disabled = true;
 }

  function activateButton(element) {

      if(element.checked) {
        document.getElementById("submit").disabled = false;
       }
       else  {
        document.getElementById("submit").disabled = true;
      }

  }
    
})(jQuery); // End of use strict
