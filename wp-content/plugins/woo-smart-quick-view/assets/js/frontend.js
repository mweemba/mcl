'use strict';

var woosq_ids = [],
    woosq_products = [];

(function($) {
  $(function() {
    $('.woosq-btn, .woosq-link').each(function() {
      var id = $(this).attr('data-id');
      var pid = $(this).attr('data-pid');
      var product_id = $(this).attr('data-product_id');

      if (typeof pid !== typeof undefined && pid !== false) {
        id = pid;
      }

      if (typeof product_id !== typeof undefined && product_id !== false) {
        id = product_id;
      }

      if (-1 === $.inArray(id, woosq_ids)) {
        woosq_ids.push(id);
        woosq_products.push(
            {src: woosq_vars.ajax_url + '?product_id=' + id});
      }
    });
  });

  $(document).on('click touch', '[href*="#woosq-"]', function(e) {
    var $this = $(this);
    var href = $this.attr('href');
    var reg = /#woosq-([0-9]+)/g;
    var match = reg.exec(href);

    if (match[1] !== undefined) {
      var id = match[1];
      var effect = $this.attr('data-effect');
      var context = $this.attr('data-context');

      woosq_open(id, effect, context);
      e.preventDefault();
    }
  });

  $(document).on('click touch', '.woosq-btn, .woosq-link', function(e) {
    var $this = $(this);
    var id = $this.attr('data-id');
    var pid = $this.attr('data-pid');
    var product_id = $this.attr('data-product_id');
    var effect = $this.attr('data-effect');
    var context = $this.attr('data-context');

    if (typeof pid !== typeof undefined && pid !== false) {
      id = pid;
    }

    if (typeof product_id !== typeof undefined && product_id !== false) {
      id = product_id;
    }

    woosq_open(id, effect, context);
    e.preventDefault();
  });

  $(document).on('added_to_cart', function() {
    $.magnificPopup.close();
  });

  $(document).on('woosq_loaded', function() {
    if (!$('#woosq-popup .woosq-redirect').length) {
      if ((woosq_vars.cart_redirect === 'yes') &&
          (woosq_vars.cart_url !== '')) {
        $('#woosq-popup form').
            prepend(
                '<input class="woosq-redirect" name="woosq-redirect" type="hidden" value="' +
                woosq_vars.cart_url + '"/>');
      } else {
        $('#woosq-popup form').
            prepend(
                '<input class="woosq-redirect" name="woosq-redirect" type="hidden" value="' +
                window.location.href + '"/>');
      }
    }
  });

  $(document).on('found_variation', function(e, t) {
    if ($(e['target']).closest('#woosq-popup').length) {
      if (t['woosq_image'] !== undefined && t['woosq_image'] !== '') {
        $('#woosq-popup .thumbnails-ori').hide();

        if ($('#woosq-popup .thumbnails-new').length) {
          $('#woosq-popup .thumbnails-new').
              html('<div class="thumbnail">' +
                  t['woosq_image'] + '</div>').
              show();
        } else {
          $(
              '<div class="thumbnails thumbnails-new"><div class="thumbnail">' +
              t['woosq_image'] + '</div></div>').
              insertAfter('#woosq-popup .thumbnails-ori');
        }
      } else {
        $('#woosq-popup .thumbnails-new').hide();
        $('#woosq-popup .thumbnails-ori').show();
      }
    }
  });

  $(document).on('reset_data', function(e) {
    if ($(e['target']).closest('#woosq-popup').length) {
      $('#woosq-popup .thumbnails-new').hide();
      $('#woosq-popup .thumbnails-ori').show();
    }
  });

  $(window).on('resize', function() {
    if ($(window).width() > 1023) {
      $('#woosq-popup').css('height', 'auto');

      if (woosq_vars.scrollbar === 'yes') {
        $('#woosq-popup .summary-content').
            perfectScrollbar('destroy').
            perfectScrollbar({theme: 'wpc'});
      }
    } else {
      if (woosq_vars.scrollbar === 'yes') {
        $('#woosq-popup .summary-content').perfectScrollbar('destroy');
      }

      $('#woosq-popup').
          css('height', document.documentElement.clientHeight * 0.9);
    }
  });

  if (woosq_vars.hashchange === 'yes') {
    $(window).on('hashchange', function() {
      if (location.href.indexOf('#woosq') < 0) {
        $.magnificPopup.close();
      }
    });
  }
})(jQuery);

function woosq_open(id, effect, context) {
  if (-1 === jQuery.inArray(id, woosq_ids)) {
    woosq_ids.push(id);
    woosq_products.push(
        {src: woosq_vars.ajax_url + '?product_id=' + id});
  }

  var index = woosq_get_key(woosq_products, 'src',
      woosq_vars.ajax_url + '?product_id=' + id);
  var main_class = 'mfp-woosq';

  if (typeof context !== typeof undefined && context !== false) {
    main_class = main_class + ' mfp-woosq-' + context;
  }

  if (typeof effect !== typeof undefined && effect !== false) {
    main_class = main_class + ' ' + effect;
  } else {
    main_class = main_class + ' ' + woosq_vars.effect;
  }

  jQuery.magnificPopup.open({
    items: woosq_products,
    type: 'ajax',
    mainClass: main_class,
    removalDelay: 160,
    overflowY: 'scroll',
    fixedContentPos: true,
    tClose: woosq_vars.close,
    gallery: {
      tPrev: woosq_vars.prev,
      tNext: woosq_vars.next,
      enabled: true,
    },
    ajax: {
      settings: {
        type: 'GET',
        data: {
          action: 'woosq_quickview',
        },
      },
    },
    callbacks: {
      open: function() {
        if (woosq_vars.hashchange === 'yes') {
          location.href = location.href.split('#')[0] + '#woosq';
        }
      },
      ajaxContentAdded: function() {
        var form_variation = jQuery('#woosq-popup').find('.variations_form');

        form_variation.each(function() {
          jQuery(this).wc_variation_form();
        });

        if (jQuery(window).width() > 1023) {
          jQuery('#woosq-popup').css('height', 'auto');

          if (woosq_vars.scrollbar === 'yes') {
            jQuery('#woosq-popup .summary-content').
                perfectScrollbar('destroy').
                perfectScrollbar({theme: 'wpc'});
          }
        } else {
          if (woosq_vars.scrollbar === 'yes') {
            jQuery('#woosq-popup .summary-content').perfectScrollbar('destroy');
          }

          jQuery('#woosq-popup').
              css('height', document.documentElement.clientHeight * 0.9);
        }

        // slick slider
        var is_rtl = woosq_vars.is_rtl === '1';

        if (jQuery('#woosq-popup .thumbnails img').length > 1) {
          jQuery('#woosq-popup .thumbnails').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: true,
            adaptiveHeight: false,
            rtl: is_rtl,
          });
        }

        jQuery(document.body).trigger('woosq_loaded', [id]);
      },
      close: function() {
        if (woosq_vars.hashchange === 'yes') {
          if (location.hash) history.go(-1);
        }
      },
      afterClose: function() {
        jQuery(document.body).trigger('woosq_close', [id]);
      },
    },
  }, index);

  jQuery(document.body).trigger('woosq_open', [id]);
}

function woosq_get_key(array, key, value) {
  for (var i = 0; i < array.length; i++) {
    if (array[i][key] === value) {
      return i;
    }
  }

  return -1;
}