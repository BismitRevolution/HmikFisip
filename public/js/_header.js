$(document).ready(function () {
    // $("#home-nav").removeClass("active");
    // $("#dashboard-nav").addClass("active");
});

var yourNavigation = $("#nav-oke");
    yourHeader = $('.top-container').height();

$(window).scroll(function() {
  if( $(this).scrollTop() > 10 ) {
    yourNavigation.removeClass("padding-add");
    yourNavigation.addClass("padding-rmv");
    yourNavigation.removeClass("transparent-bg");
    yourNavigation.addClass("black-bg");
  } else {
    yourNavigation.removeClass("padding-rmv");
    yourNavigation.addClass("padding-add");
    yourNavigation.removeClass("black-bg");
    yourNavigation.addClass("transparent-bg");
  }
});
