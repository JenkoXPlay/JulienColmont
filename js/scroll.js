$(document).ready(function(){
    var elmt   = $("#scrollTop");
    elmt.hide();
    $(window).on('scroll', function () {
    var scroll = $(window).scrollTop();
    
        $(elmt).each(function() {
            if ( scroll > 100 ) {
                elmt.show();
            }
            if (scroll < 100) {
                elmt.hide();
            }
        });
    });
});

$("#scrollTop").on('click', function () {
    $('html,body').animate({scrollTop: 0}, 'slow');
});