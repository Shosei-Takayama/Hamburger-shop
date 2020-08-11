jQuery (function($){

    $(".is-hamburger").on("click", function() {

      $( this ).toggleClass( "open" );
      $( "nav" ).toggleClass( "open" );
      $( "body" ).toggleClass( "open" );
    ;}
    );
  });

