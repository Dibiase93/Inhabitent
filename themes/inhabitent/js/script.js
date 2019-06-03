(function($) {
  $(function() {
    const searchTextInput = $('.search-form input[type="search"]');
    $('#icon-search').click(function(event) {
      event.preventDefault();

      $('.search-field').toggle('slide');
      searchTextInput.focus();
    });

    searchTextInput.blur(function() {
      if ($(this).val() == '') {
        $('.search-field').hide('slide');
      }
    });
  });
})(jQuery);
