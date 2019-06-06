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

    const frontPage = $('.home').length;
    const aboutPage = $('.page-about').length;

    if (frontPage || aboutPage) {
      let bannerHeight;
      // $('#site-navigation').toggleClass($('.main-nav-green'));

      if (frontPage) {
        bannerHeight = $('.hp-hero-banner').height();
      }

      if (aboutPage) {
        bannerHeight = $('.hero-image-header').height();
      }

      $(window).scroll(function() {
        let yPos = $(window).scrollTop();
        if (yPos > bannerHeight) {
          $('.site-branding-white').hide();
          $('.site-branding').show();
          $('#site-navigation').addClass('main-nav-green');
          $('#nav-toggle').addClass('fixed-nav');
        } else {
          $('.site-branding').hide();
          $('.site-branding-white').show();
          $('#site-navigation').removeClass('main-nav-green');
          $('#nav-toggle').removeClass('fixed-nav');
        }
      });
    }
  });
})(jQuery);

//if($(.home .about).length)

//display block to show, display none on opposit
