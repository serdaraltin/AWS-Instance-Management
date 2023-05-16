'use strict';
(function ($) {
    // baguetteBox.run(".portfolio-image")
    
    tippy('#open-haciyatmaz-image', {
        content: '<img src="assets/images/screen/about-us.png" alt="Haciyatmaz Group">',
        allowHTML: true,
        theme: 'transparent'
    });

    $(document).ready(function () {
        // setTimeout(() => {
        //     $("#announcementModal").modal("show");
        // }, 1000);
    });
})($);