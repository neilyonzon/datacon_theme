let mediaButton = document.querySelector('.media-banner__btn');

const modalBackground = document.querySelector('#modal-background');

//Function to toggle Modal Background (blue backgroud) visibility
const fixBody = () => {
    const body = document.querySelector('body');
    body.classList.toggle('fixed');
    modalBackground.classList.toggle('active');
}

mediaButton.addEventListener('click', function (e) {
    e.preventDefault();
    console.log("Test");
    // fixBody();
});