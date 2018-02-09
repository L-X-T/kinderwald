$(document).ready(function() {
    //when the user hovers over the div that contains our html...
    $('.box_container').hover(function() {
        //... we get the width of the div and split it by 2  ...
        var width = $(this).outerWidth() / 2;
        /*... and using that width we move the left "part" of the image to left and right "part"
        to right by changing it's indent from left side or right side... '*/
        $(this).find('.left').animate(
            { right: width },
            { queue: false, duration: 1000},
            { easing: 'easeOutBounce' }
        );
        $(this).find('.right').animate(
            { left: width },
            { queue: false, duration: 1000},
            { easing: 'easeOutBounce' }
        );
    });
});
