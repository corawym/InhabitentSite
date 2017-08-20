(function($){
  
  changeHeader();

  // check window scrolling function
  $( window ).scroll(function() {
    changeHeader();
  });

  // alter style of site-header function
  function changeHeader(){
    if ( $(window).scrollTop() <= $(window).height() ){
      $('.site-header').addClass('site-header-white');
    } else {
      $('.site-header').removeClass('site-header-white');
    }
  }
})(jQuery);