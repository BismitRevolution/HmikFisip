var navbar = $("#navbar-on .new-navbar");
    navContainer = $("#navbar-on .container-fluid")
    navLogo = $("#navbar-on #nav-logo");
    navLogoWord = $('#navbar-on #nav-logo-word');
    navLogoBackground = $('#navbar-on #logo');
    //yourHeader = $('.top-container').height();

$(window).scroll(function() {
  if( $(this).scrollTop() > 10 ) {
    navbar.removeClass("scrolled-navbar");
    navbar.addClass("unscrolled-navbar");
    navContainer.removeClass('navbar-container');
    navLogo.removeClass("change-brand-position");
    navLogo.addClass("unchange-brand-position");
    navLogo.removeClass("navbar-logo");
    navLogoWord.removeClass("change-brand-position");
    navLogoWord.addClass("unchange-brand-position");
    navLogoWord.removeClass("navbar-logo");
    navLogoWord.addClass("margin-increase");
    navLogoBackground.removeClass("background-logo");
  } else {
    navbar.removeClass("unscrolled-navbar");
    navbar.addClass("scrolled-navbar");
    navContainer.addClass('navbar-container');
    navLogo.removeClass("unchange-brand-position");
    navLogo.addClass("change-brand-position");
    navLogo.addClass("navbar-logo");
    navLogoWord.removeClass("unchange-brand-position");
    navLogoWord.addClass("change-brand-position");
    navLogoWord.addClass("navbar-logo");
    navLogoWord.removeClass("margin-increase");
    navLogoBackground.addClass("background-logo");
  }
});

/*$( document ).ready(function() {
    console.log( "ready!" );
});*/
