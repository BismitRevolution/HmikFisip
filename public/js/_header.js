var navbar = $(".new-navbar");
    navLogo = $("#nav-logo");
    //yourHeader = $('.top-container').height();

$(window).scroll(function() {
  if( $(this).scrollTop() > 10 ) {
    navbar.removeClass("scrolled-navbar");
    navbar.addClass("unscrolled-navbar");
    navLogo.removeClass("change-brand-position");
    navLogo.addClass("unchange-brand-position");
    navLogo.removeClass("navbar-logo");
  } else {
    navbar.removeClass("unscrolled-navbar");
    navbar.addClass("scrolled-navbar");
    navLogo.removeClass("unchange-brand-position");
    navLogo.addClass("change-brand-position");
  }
});
