(function($){

  $( '.search-icon' ).click(function() {
    // event.preventDefault();
    $('.search-field').toggleClass('search-field-focus');
    $('.search-field').focus();
    if ($('.search-field').hasClass('search-field-focus')) {
        $('.search-field').focus();
        // $('.search-field').addClass('.search-field-case');
    } else {
        $('.search-field').blur();
    }
  });

})(jQuery);
