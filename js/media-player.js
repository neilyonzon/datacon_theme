// let mediaButton = document.querySelector('.media-banner__btn');

// const modalBackground = document.querySelector('#modal-background');

// //Function to toggle Modal Background (blue backgroud) visibility
// const fixBody = () => {
//     const body = document.querySelector('body');
//     body.classList.toggle('fixed');
//     modalBackground.classList.toggle('active');
// }

// mediaButton.addEventListener('click', function (e) {
//     e.preventDefault();
//     console.log("Test");
//     // fixBody();
// });

jQuery(document).ready(function () {
    jQuery('.media-banner__btn').magnificPopup({
        type: 'iframe',
        iframe: {
            markup: '<div class="mfp-iframe-scaler">' +
                '<div class="mfp-close"></div>' +
                '<iframe class="mfp-iframe" frameborder="0" allow="autoplay"></iframe>' +
                '</div>',
            patterns: {
                youtube: {
                    index: 'youtube.com/',
                    id: 'v=',
                    src: 'https://www.youtube.com/embed/%id%?autoplay=1'
                }
            }
        }
    });
})