var animationTimeout = 3000;
var animationDuration = 3000;
var cookieExpiresDays = 1; // just 1 :-)

jQuery(document).ready(function() {
    if (!jQuery.cookie('intro_was_shown')) {
        jQuery('.kw_intro_container').show();

        setTimeout(function() {
            var width = window.innerWidth
                || document.documentElement.clientWidth
                || document.body.clientWidth;

            var width = width / 2;

            jQuery('.kw_intro.left').animate(
                { left: -width + 'px', right: '100%' },
                { queue: false, duration: animationDuration },
                { easing: 'easeInOutQuad' }
            );

            jQuery('.kw_intro.right').animate(
                { right: -width + 'px', left: '100%' },
                { queue: false, duration: animationDuration },
                { easing: 'easeInOutQuad' }
            );

            setTimeout(function() {
                jQuery('.kw_intro_container').hide();
            }, animationDuration);

        }, animationTimeout);

        jQuery.cookie('intro_was_shown', 1, { expires: cookieExpiresDays, path: '/' })
    }
});
