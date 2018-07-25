

$(document).ready(function() {
    init();
});


function init() {

// <!--http://labs.juliendecaudin.com/barousel/#ba_download-->
// <!--https://opensource.org/licenses/mit-license.php-->
    $('#barousel_thslide').barousel({
        navWrapper: '#thslide_barousel_nav .thslide_list',
        manualCarousel: 1,
        navType: 3
    });

    $('#thslide_barousel_nav').thslide({
        itemOffset: 93
    });
}