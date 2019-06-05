(function($) {
  $(function() {
    const searchTextInput = $('.site-header input[type="search"]');
    $('#icon-search').click(function(event) {
      event.preventDefault();

      $('.site-header .search-field').toggle('slide');
      searchTextInput.focus();
    });

    searchTextInput.blur(function() {
      if ($(this).val() == '') {
        $('.site-header .search-field').hide('slide');
      }
    });
  });
})(jQuery);
