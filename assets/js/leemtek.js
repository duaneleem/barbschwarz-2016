// Accordion fix due to content.
(function() {
    $('#accordion').on('shown.bs.collapse', function (e) {
    var offset = $(this).find('.collapse.in').prev('.panel-heading');
    if(offset) {
        $('html,body').animate({
            scrollTop: $(offset).offset().top -100
        }, 500);
    }
    });
})();
