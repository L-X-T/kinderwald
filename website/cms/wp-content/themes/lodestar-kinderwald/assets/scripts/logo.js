var headerHeight = 120;

jQuery(document).ready(function() {
    var widgetAreaPos = jQuery('aside.widget-area').position();
    var contentHeight = jQuery('div.site-content').height() + headerHeight / 2; // <-- this 2 might be senseless ;-)
    var offsetTop;

    if (widgetAreaPos) {
        offsetTop = widgetAreaPos.top - headerHeight;

        var scrollTop = 0;
        var scrollTo = 0;

        jQuery(document).scroll(function() {
            scrollTop = jQuery(this).scrollTop();
            if (scrollTop > contentHeight) scrollTop = contentHeight;
            scrollTo = scrollTop - offsetTop;
            if (scrollTo < 0) scrollTo = 0;

            jQuery('.kw_logo_cnt').animate(
                { top: scrollTo },
                { queue: false, duration: 0 },
                { easing: 'linear' }
            );
        });
    }
});