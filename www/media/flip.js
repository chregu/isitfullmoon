$(function() {

    // load about page
    $('.card.back').load('about.php .card.front', function () {

        // close button on about page        
        $('address.back a').bind('click tap', function (e) {

            // fallback for browser that don't support the history API
            if (!('replaceState' in window.history)) return true;
    
            // Ensure middle, control and command clicks act normally
            if (e.which == 2 || e.metaKey || e.ctrlKey){
                return true;
            }

            // flip back, setTimeout needed for webkit-transition
            setTimeout("$('.stack').addClass('undo')", 1);
        
            // hide back and remove flipped after 0.5sec
            setTimeout("$('.card.back').hide()", 500);
            setTimeout("$('.stack').removeClass('flipped undo')", 500);

            // switch url back
            history.replaceState({}, "Full moon?", '.');

            e.preventDefault();
            return false;
        });
    });

    // info button
    $('address.about a').bind('click tap', function (e) {

        // fallback for browser that don't support the history API
        if (!('replaceState' in window.history)) return true;

        // Ensure middle, control and command clicks act normally
        if (e.which == 2 || e.metaKey || e.ctrlKey){
            return true;
        }

        // make back visible
        $('.card.back').show();

        // fade in back, setTimeout needed for webkit-transition
        setTimeout("$('.stack').addClass('flipped')", 1);

        // switch url to about page
        history.replaceState({}, "About «Is it full moon?»", 'about.php');

        e.preventDefault();
        return false;
    });
});
