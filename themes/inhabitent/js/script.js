(function($) {
  $('#icon-search').click(function(event) {
    event.preventDefault();
    const searchField = $('.search-form input[type="search"]');

    $('.search-field').toggle('slide');
    $(searchField).focus();

    $(searchField).blur(function() {
      $('.search-field').hide('slide');
    });
  });
})(jQuery);
