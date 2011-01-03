$(function() {

    // load about page
    $('.card.back').load('about.php .card.front', function () {

        // close button on about page        
        $('address.back a').bind('click tap', function (e) {

            // flip back, setTimeout needed for webkit-transition
            setTimeout("$('.stack').addClass('undo')", 1);
        
            // hide back and remove flipped after 0.5sec
            setTimeout("$('.card.back').hide()", 500);
            setTimeout("$('.stack').removeClass('flipped undo')", 500);

            // switch url back
            history.replaceState({}, "Full moon?", '.');

            e.preventDefault();

        }).get(0).removeAttribute('href');
    });

    // info button
    $('address.about a').bind('click tap', function (e) {

        // make back visible
        $('.card.back').show();
        
        // fade in back, setTimeout needed for webkit-transition
        setTimeout("$('.stack').addClass('flipped')", 1);

        // switch url to about page
        history.replaceState({}, "About «Is it full moon?»", 'about.php');

        e.preventDefault();

    }).get(0).removeAttribute('href');
});
