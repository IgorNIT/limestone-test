jQuery(document).ready(function ($) {


    // Open mobile menu
    let isOpenMenu = false;
    const menu =  $('.main-navigation');

    $('#menu-toggle').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('is-active');

        menu.fadeToggle(400, () => {
            isOpenMenu = !isOpenMenu;
        });
        $('body').toggleClass('menu-open');
    });


});
