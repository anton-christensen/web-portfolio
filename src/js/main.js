$(document).ready(function() {
    $('.experience').on('click', function(e) {
        $('.experienceContent').css('top', 0);
    });
    $('.uni').on('click', function(e) {
        $('.uniContent').css('top', 0);
    });
    $('.projects').on('click', function(e) {
        $('.projectsContent').css('top', 0);
    });
    $('.contact').on('click', function(e) {
        $('.contactContent').css('top', 0);
    });

    $('.wrapper, .pageContent').on('click', function() {
        $('.pageContent').css('top', '100%');
    }).children().click(function(e) {
        e.stopPropagation();
    });
});
