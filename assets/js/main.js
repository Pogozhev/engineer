$(document).ready(function($) {

    // ADD SLIDEDOWN ANIMATION TO DROPDOWN //
    $('.dropdown').on('show.bs.dropdown', function(e){
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
    });

    // ADD SLIDEUP ANIMATION TO DROPDOWN //
    $('.dropdown').on('hide.bs.dropdown', function(e){
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp(300);
    });

    $('.timetable-name span').on('click', function () {
        $(this).parent().parent().toggleClass('active');
    });


    /*$('#navigation a, #fixedbar a').on('click', function(e) {
        e.preventDefault();
    });*/

    $(window).on('scroll',function() {
        var scrolltop = $(this).scrollTop();

        if(scrolltop >= 100) {
            $('#navbar').css('top', 0);
        }

        else if(scrolltop <= 100) {
            $('#navbar').css('top', 100 - scrolltop);
        }
    });

});

