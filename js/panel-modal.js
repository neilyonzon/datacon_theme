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

      let panelTitle = parentNode.querySelector(".panels-m__item-title").innerText;
      let panelDescription = parentNode.querySelector(".panels-m__item-description")
        .innerText;
      let panelModerator = parentNode.querySelector(`[data-type*="moderator"]`);
      let panelists = parentNode.querySelectorAll(`[data-type*="panelist"]`);

      let modal = document.querySelector(".panels-m-modal");
      let modalTitle = modal.querySelector(".panels-m-modal__title");
      let modalDescription = modal.querySelector(".panels-m-modal__summary");
      let modalModerator = modal.querySelector(".panels-m-modal__moderator");
      let modalModeratorTitle = modal.querySelector(".panels-m-modal__title");
      let modalGrid = modal.querySelector(".panels-m-modal__grid");
      modalGrid.innerHtml = "";
      while (modalGrid.firstChild) modalGrid.removeChild(modalGrid.firstChild);

      modalTitle.innerText = panelTitle;
      modalDescription.innerText = panelDescription;
      modalModerator.innerText = panelModerator.dataset.name;
      modalModeratorTitle.innerText = panelModerator.dataset.title;
      Array.from(panelists).forEach(function(elem) {
        let name = elem.dataset.name;
        let image = elem.dataset.image;
        let title = elem.dataset.title;
        if ('content' in document.createElement('template')) {
          let template = document.querySelector("#panelist-item-template");
          let clone = template.content.cloneNode(true);
          cloneImg = clone.querySelector(".panels-m-modal__grid-img");
          cloneName = clone.querySelector(".panels-m-modal__grid-name");
          cloneTitle = clone.querySelector(".panels-m-modal__grid-title");
          cloneImg.src = image;
          cloneImg.alt = "Image of " + name;
          cloneName.innerText = name;
          cloneTitle.innerText = title;
          modalGrid.appendChild(clone);
        }
      })
    };

    Array.from(panelItems).forEach(function(elem) {
      elem.addEventListener("click", (e) => {
        togglePanelModal();
        fillModalDetails(e);
      });

      elem.addEventListener("keydown",(e)=> {
        if (e.keyCode === 13) {
          togglePanelModal();
          fillModalDetails(e);
        }
      })
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
