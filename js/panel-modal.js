/**
 * File keynotes-speaker-modal.js
 *
 * Toggles the keynote speaker modal
 */

(function() {
  //Variables
  const panelItems = document.querySelectorAll(".panels-m__item");

  const modalBackground = document.querySelector(
    ".panels-m-modal__overlay"
  );

  if (modalBackground) {
    const closeIcon = document.querySelector(".panels-m-modal__close");

    //Functions
    const togglePanelModal = () => {
      const modal = document.querySelector(".panels-m-modal");
      const modalContent = document.querySelector(
        ".panels-m-modal__container"
      );
      modalContent.scrollTop = 0;
      modal.classList.toggle("panels-m-modal--active");
      unloadScrollBars();
    };

    modalBackground.addEventListener("click", () => {
      togglePanelModal();
      reloadScrollBars();
    });

    closeIcon.addEventListener("click", () => {
      togglePanelModal();
      reloadScrollBars();
    });

    const fillModalDetails = (e) => {
      let parentNode = e.target.closest(".panels-m__item");

      let panelName = parentNode.querySelector(".panels-m__item-name").innerText;
      let panelTitle = parentNode.querySelector(".panels-m__item-title")
        .innerText;
      let panelImage = parentNode
        .querySelector(".panels-m__item__img")
        .getAttribute("src");
      let panelAlt = parentNode
        .querySelector(".panels-m__item__img")
        .getAttribute("alt");
      let panelDescription = parentNode.querySelector(
        ".panels-m__item__description"
      ).innerText;

      let panelSocial = parentNode
        .querySelector(".panel-item__social-icons-container")
        .cloneNode(true);

      let modal = document.querySelector(".keynote-speakers-modal");
      let modalName = modal.querySelector(".modal-name");
      let modalTitle = modal.querySelector(".modal-title");
      let modalDescription = modal.querySelector(".modal-description");
      let modalImage = modal.querySelector(".modal-image");

      modalName.innerText = panelName;
      modalTitle.innerText = panelTitle;
      modalDescription.innerText = panelDescription;
      modalImage.setAttribute("src", panelImage);
      modalImage.setAttribute("alt", panelAlt);
    };

    Array.from(panelItems).forEach(function(elem) {
      elem.addEventListener("click", (e) => {
        togglePanelModal();
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
  }
})();
