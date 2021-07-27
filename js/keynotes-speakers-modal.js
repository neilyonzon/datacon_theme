/**
 * File keynotes-speaker-modal.js
 *
 * Toggles the keynote speaker modal
 */

(function() {
  //Variables
  const profileLinks = document.querySelectorAll(".keynote-speakers__link");

  const modalBackground = document.querySelector(
    ".keynote-speakers-modal__overlay"
  );

  const closeIcon = document.querySelector(".keynote-speakers-modal__close");

  //Functions
  const toggleProfileModal = () => {
    const modal = document.querySelector(".keynote-speakers-modal");
    const modalContent = document.querySelector(
      ".keynote-speakers-modal__container"
    );
    modalContent.scrollTop = 0;
    modal.classList.toggle("keynote-speakers-modal--active");
    unloadScrollBars();
  };

  modalBackground.addEventListener("click", () => {
    toggleProfileModal();
    reloadScrollBars();
  });

  closeIcon.addEventListener("click", () => {
    toggleProfileModal();
    reloadScrollBars();
  });

  const fillModalDetails = (e) => {
    let parentNode = e.target.closest(".profile-item");

    let profileName = parentNode.querySelector(".profile-item__name").innerText;
    let profileTitle = parentNode.querySelector(".profile-item__title")
      .innerText;
    let profileImage = parentNode
      .querySelector(".profile-item__img")
      .getAttribute("src");
    let profileAlt = parentNode
      .querySelector(".profile-item__img")
      .getAttribute("alt");
    let profileDescription = parentNode.querySelector(
      ".profile-item__description"
    ).innerText;

    let profileSocial = parentNode
      .querySelector(".profile-item__social-icons-container")
      .cloneNode(true);

    let modal = document.querySelector(".keynote-speakers-modal");
    let modalName = modal.querySelector(".modal-name");
    let modalTitle = modal.querySelector(".modal-title");
    let modalDescription = modal.querySelector(".modal-description");
    let modalImage = modal.querySelector(".modal-image");
    let modalSocial = modal.querySelector(".modal-social");

    modalName.innerText = profileName;
    modalTitle.innerText = profileTitle;
    modalDescription.innerText = profileDescription;
    modalImage.setAttribute("src", profileImage);
    modalImage.setAttribute("alt", profileAlt);

    if (modalSocial.querySelector(".profile-item__social-icons-container")) {
      let child = modalSocial.querySelector(
        ".profile-item__social-icons-container"
      );
      modalSocial.removeChild(child);
    }
    modalSocial.appendChild(profileSocial);
  };

  Array.from(profileLinks).forEach(function(elem) {
    elem.addEventListener("click", (e) => {
      toggleProfileModal();
      fillModalDetails(e);
    });
  });

  function reloadScrollBars() {
    document.documentElement.style.overflow = "auto"; // firefox, chrome
    document.body.scroll = "yes"; // ie only
  }

  function unloadScrollBars() {
    document.documentElement.style.overflow = "hidden"; // firefox, chrome
    document.body.scroll = "no"; // ie only
  }
})();
