(function (toggle) {

    toggle('.navigation__nav-toggle').on('click', function () {
        toggle('.navigation__mobile-items').toggleClass("open");
        toggle('.navigation__nav-toggle').toggleClass("open");
    });

})(jQuery);