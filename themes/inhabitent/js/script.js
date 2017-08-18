(function($){

  $( '.search-submit' ).click(function(event) {
    event.preventDefault();

    $('.search-field').slideToggle('display');
    // $('input.search-field').addClass('.search-field-focus');
    // $('.search-field').toggleClass('.search-field .search-field-focus');
    // $( '.search-field' ).focus(function(){
      // $(this).toggleClass('.search-field .search-field-focus');

    // }); 
  });

})(jQuery);
