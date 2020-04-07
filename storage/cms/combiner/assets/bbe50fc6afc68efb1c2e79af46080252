$('.gototop').click(function(event) {
    event.preventDefault();
    $('html, body').animate({
        scrollTop: $("body").offset().top
    }, 500);
});
$(document).ready(function(){
    $(".smooth").on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){
                window.location.hash = hash;
            });
        }
    });
});