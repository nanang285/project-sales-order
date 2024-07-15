$(document).ready(function () {
    var animationDuration = 300;

    $(".navbar-burger").on("click", function () {
        $(".navbar-menu").slideToggle(animationDuration);
    });

    $(".navbar-menu a").on("click", function () {
        $(".navbar-menu").slideUp(animationDuration);
    });

    $(document).on("click", function (event) {
      
        if (!$(event.target).closest('.navbar-burger, .navbar-menu').length) {
            $(".navbar-menu").slideUp(animationDuration);
        }
    });

    $(window).on("scroll", function () {
        $(".navbar-menu").slideUp(animationDuration);
    });
});
