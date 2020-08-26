jQuery (function($){

    $(".p-hamburger").on("click", function() {

      if($(this).hasClass('active')){
        $(this).removeClass('active');
        $('body').removeClass('open');
        $('nav').removeClass('open');
        $('.l-sidebar-overlay').removeClass('open');
      } else {
        $(this).addClass('active');
        $('body').addClass('open');
        $('nav').addClass('open');
        $('.l-sidebar-overlay').addClass('open');
      }
    ;}

    );

    $('.l-sidebar-overlay').on('click',function(){
      if($(this).hasClass('open')){
        $(this).removeClass('open');
        $('.menu-trigger').removeClass('active');
        $('main').removeClass('open');
        $('nav').removeClass('open');      
      }
    });
  
  });
