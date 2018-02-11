var headerHeight = 120;

jQuery(document).ready(function() {
    var widgetAreaPos = jQuery('aside.widget-area').position();

    if (widgetAreaPos) {
        var offsetTop = widgetAreaPos.top - headerHeight;
        var scrollTo = 0;

        jQuery(document).scroll(function() {
            scrollTo = jQuery(this).scrollTop() - offsetTop;
            if (scrollTo < 0) scrollTo = 0;

            jQuery('.kw_logo_cnt').animate(
                { top: scrollTo },
                { queue: false, duration: 0 },
                { easing: 'linear' }
            );
        });
    }
});