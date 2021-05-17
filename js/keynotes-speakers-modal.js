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
    modal.classList.toggle("keynote-speakers-modal--active");
  };

  modalBackground.addEventListener("click", () => {
    toggleProfileModal();
  });

  closeIcon.addEventListener("click", () => {
    toggleProfileModal();
  });

  const fillModalDetails = (e) => {
    console.log(e.target);
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
    let socialDiv = "";
    let modal = document.querySelector(".keynote-speakers-modal");
    let modalName = modal.querySelector(".modal-name");
    let modalTitle = modal.querySelector(".modal-title");
    let modalDescription = modal.querySelector(".modal-description");
    let modalImage = modal.querySelector(".modal-image");
    console.log(profileImage);
    modalName.innerText = profileName;
    modalTitle.innerText = profileTitle;
    modalDescription.innerText = profileDescription;
    modalImage.setAttribute("src", profileImage);
    modalImage.setAttribute("alt", profileAlt);
  };

  Array.from(profileLinks).forEach(function(elem) {
    elem.addEventListener("click", (e) => {
      toggleProfileModal();
      fillModalDetails(e);
    });
  });
})();
