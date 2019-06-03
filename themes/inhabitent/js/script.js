(function($) {
  $(function() {
    $('#icon-search').click(function(event) {
      event.preventDefault();
      const searchTextInput = $('.search-form text[type="search"]');

      $('.search-field').toggle('slide');
      $(searchTextInput).focus();

      $(searchTextInput).blur(function() {
        if ($(searchTextInput).val() === '') {
          $('.search-field').hide('slide');
        }
      });
    });
  });
})(jQuery);
