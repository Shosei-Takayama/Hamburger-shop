jQuery (function($){

    $(".p-hamburger").on("click", function() {

      $( this ).toggleClass( "open" );
      $( "nav" ).toggleClass( "open" );
      $( "body" ).toggleClass( "open" );
      
    ;}
    );
  });


  jQuery (function($){

    $(".p-hamburger").on("click", function() {

      if($(this).hasClass('active')){
        $(this).removeClass('active');
        $('body').removeClass('open');
        $('nav').removeClass('open');
        $('p-hamburger').removeClass('open');
        $('.l-sidebar-overlay').removeClass('open');
      } else {
        $(this).addClass('active');
        $('body').addClass('open');
        $('nav').addClass('open');
        $('p-hamburger').addClass('open');
        $('.l-sidebar-overlay').addClass('open');
      }
    ;}

    );

    
  
  });