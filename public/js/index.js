$( "#judul-hmik" ).hover(
  function() {
    $( this ).addClass( "#motto" );
  }, function() {
    $( this ).removeClass( "#motto" );
  }
);

$( "#judul-hmik" ).off( "mouseenter mouseleave" );
