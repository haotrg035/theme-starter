$(document).ready(function ($) {
    let mainHeader = document.querySelector('.main-header');
    let mainHeaderPos = mainHeader.offsetHeight + document.querySelector('.main-header').offsetHeight;

    window.addEventListener('scroll', function () {
        if (window.pageYOffset > mainHeaderPos) {
            mainHeader.classList.add('sticky')
        } else {
            mainHeader.classList.remove('sticky');
        }
    });

    $('.main-navbar-toggler').on('click', function (e) {
        $('#main-navbar-content').toggleClass('show')
    });

    $('.owl-carousel').each(function (ind, el) {
        let config = $(el).data();
        config.navText = ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>']
        $(el).owlCarousel(config);
    });

    $("#main-navbar-content > .navbar > .nav-item > .nav-link").on('click', function (event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });

    new WOW().init();

});