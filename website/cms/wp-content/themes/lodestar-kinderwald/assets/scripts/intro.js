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
                { queue: false, duration: 3000 },
                { easing: 'easeInOutQuad' }
            );

            jQuery('.kw_intro.right').animate(
                { right: -width + 'px', left: '100%' },
                { queue: false, duration: 3000 },
                { easing: 'easeInOutQuad' }
            );

        }, 3000);

        jQuery.cookie('intro_was_shown', 1, { expires: 30, path: '/' })
    }
});
