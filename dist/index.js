/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./js/countdown.js":
/*!*************************!*\
  !*** ./js/countdown.js ***!
  \*************************/
/*! no static exports found */
/***/ (function(module, exports) {

//Set date we're counting down to
var countDownDate = new Date("Sep 17, 2021 00:00:00").getTime(); //Update the count down every 1 second

if (document.querySelector(".timer__number--days")) {
  var start = setInterval(function () {
    var now = new Date().getTime(); //Find difference between now and the count down date

    var difference = countDownDate - now; //Time calculation for days, hours minutes and seconds

    var days = Math.floor(difference / (1000 * 60 * 60 * 24));
    var hours = Math.floor(difference % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
    var minutes = Math.floor(difference % (1000 * 60 * 60) / (1000 * 60));
    var seconds = Math.floor(difference % (1000 * 60) / 1000);
    document.querySelector(".timer__number--days").innerText = days;
    document.querySelector(".timer__number--hours").innerText = hours;
    document.querySelector(".timer__number--minutes").innerText = minutes;
    document.querySelector(".timer__number--seconds").innerText = seconds;

    if (difference < 0) {
      clearInterval(start);
      document.querySelector(".timer__number--days").innerText = 0;
      document.querySelector(".timer__number--hours").innerText = 0;
      document.querySelector(".timer__number--minutes").innerText = 0;
      document.querySelector(".timer__number--seconds").innerText = 0;
    }
  }, 1000);
}

/***/ }),

/***/ "./js/index.js":
/*!*********************!*\
  !*** ./js/index.js ***!
  \*********************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var getNavigation = __webpack_require__(/*! ./navigation.js */ "./js/navigation.js");

var getMediaplayer = __webpack_require__(/*! ./media-player.js */ "./js/media-player.js");

var countdown = __webpack_require__(/*! ./countdown.js */ "./js/countdown.js");

/***/ }),

/***/ "./js/media-player.js":
/*!****************************!*\
  !*** ./js/media-player.js ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports) {

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
      markup: '<div class="mfp-iframe-scaler">' + '<div class="mfp-close"></div>' + '<iframe class="mfp-iframe" frameborder="0" allow="autoplay"></iframe>' + '</div>',
      patterns: {
        youtube: {
          index: 'youtube.com/',
          id: 'v=',
          src: 'https://www.youtube.com/embed/%id%?autoplay=1'
        }
      }
    }
  });
});

/***/ }),

/***/ "./js/navigation.js":
/*!**************************!*\
  !*** ./js/navigation.js ***!
  \**************************/
/*! no static exports found */
/***/ (function(module, exports) {

/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
(function () {
  //Variables
  var hamburgerMenu = document.querySelector('#main-navigation-toggle');
  var modalBackground = document.querySelector('#modal-background');
  var subnavIcon = document.querySelectorAll('.subnav__icon'); //Functions

  var toggleSideNav = function toggleSideNav() {
    var sideNav = document.querySelector('ul.nav');
    sideNav.classList.toggle('nav--active');
  }; //Function to toggle Modal Background (blue backgroud) visibility


  var fixBody = function fixBody() {
    var body = document.querySelector('body');
    body.classList.toggle('fixed');
    modalBackground.classList.toggle('active');
  }; //Function to toggle input in Hamburger menu from checked to unchecked. This controls animation. 


  var toggleHamburger = function toggleHamburger() {
    var hamburger = document.querySelector('#main-navigation-toggle');
    hamburger.checked == true ? hamburger.checked = false : hamburger.checked = true;
  }; //Function to collapse and uncollapse any subnavigation


  var toggleSubnav = function toggleSubnav(e) {
    var subNav = e.nextElementSibling;

    if (subNav.style.maxHeight == 0 || subNav.style.maxHeight == 0 + "px") {
      subNav.style.maxHeight = subNav.scrollHeight + "px";
      subNav.style.opacity = 1;
    } else {
      subNav.style.maxHeight = 0;
      subNav.style.opacity = 0;
    }
  }; //Function to rotate chevron svg icon when selected


  var rotateChevron = function rotateChevron(e) {
    e.classList.toggle('subnav__icon--collapsed');
  }; //Event Listeners and Handlers


  hamburgerMenu.addEventListener('click', function () {
    toggleSideNav();
    fixBody();
  });
  subnavIcon.forEach(function (item) {
    item.addEventListener('click', function (e) {
      toggleSubnav(item);
      rotateChevron(item);
    });
  });
  modalBackground.addEventListener('click', function () {
    var sideNav = document.querySelector('ul.nav');

    if (sideNav.classList.contains('nav--active')) {
      toggleSideNav();
      toggleHamburger();
    }

    fixBody();
  });
  stopResponsiveTransition();

  function stopResponsiveTransition() {
    var classes = document.body.classList;
    var timer = null;
    window.addEventListener('resize', function () {
      if (timer) {
        clearTimeout(timer);
        timer = null;
      } else {
        classes.add('stop-transition');
      }

      timer = setTimeout(function () {
        classes.remove('stop-transition');
        timer = null;
      }, 100);
    });
  } // const siteNavigation = document.getElementById('site-navigation');
  // // Return early if the navigation don't exist.
  // if (!siteNavigation) {
  // 	return;
  // }
  // const button = siteNavigation.getElementsByTagName('button')[0];
  // // Return early if the button don't exist.
  // if ('undefined' === typeof button) {
  // 	return;
  // }
  // const menu = siteNavigation.getElementsByTagName('ul')[0];
  // // Hide menu toggle button if menu is empty and return early.
  // if ('undefined' === typeof menu) {
  // 	button.style.display = 'none';
  // 	return;
  // }
  // if (!menu.classList.contains('nav-menu')) {
  // 	menu.classList.add('nav-menu');
  // }
  // // Toggle the .toggled class and the aria-expanded value each time the button is clicked.
  // button.addEventListener('click', function () {
  // 	siteNavigation.classList.toggle('toggled');
  // 	if (button.getAttribute('aria-expanded') === 'true') {
  // 		button.setAttribute('aria-expanded', 'false');
  // 	} else {
  // 		button.setAttribute('aria-expanded', 'true');
  // 	}
  // });
  // // Remove the .toggled class and set aria-expanded to false when the user clicks outside the navigation.
  // document.addEventListener('click', function (event) {
  // 	const isClickInside = siteNavigation.contains(event.target);
  // 	if (!isClickInside) {
  // 		siteNavigation.classList.remove('toggled');
  // 		button.setAttribute('aria-expanded', 'false');
  // 	}
  // });
  // // Get all the link elements within the menu.
  // const links = menu.getElementsByTagName('a');
  // // Get all the link elements with children within the menu.
  // const linksWithChildren = menu.querySelectorAll('.menu-item-has-children > a, .page_item_has_children > a');
  // // Toggle focus each time a menu link is focused or blurred.
  // for (const link of links) {
  // 	link.addEventListener('focus', toggleFocus, true);
  // 	link.addEventListener('blur', toggleFocus, true);
  // }
  // // Toggle focus each time a menu link with children receive a touch event.
  // for (const link of linksWithChildren) {
  // 	link.addEventListener('touchstart', toggleFocus, false);
  // }
  // /**
  //  * Sets or removes .focus class on an element.
  //  */
  // function toggleFocus() {
  // 	if (event.type === 'focus' || event.type === 'blur') {
  // 		let self = this;
  // 		// Move up through the ancestors of the current link until we hit .nav-menu.
  // 		while (!self.classList.contains('nav-menu')) {
  // 			// On li elements toggle the class .focus.
  // 			if ('li' === self.tagName.toLowerCase()) {
  // 				self.classList.toggle('focus');
  // 			}
  // 			self = self.parentNode;
  // 		}
  // 	}
  // 	if (event.type === 'touchstart') {
  // 		const menuItem = this.parentNode;
  // 		event.preventDefault();
  // 		for (const link of menuItem.parentNode.children) {
  // 			if (menuItem !== link) {
  // 				link.classList.remove('focus');
  // 			}
  // 		}
  // 		menuItem.classList.toggle('focus');
  // 	}
  // }

})();

/***/ }),

/***/ "./sass/style.scss":
/*!*************************!*\
  !*** ./sass/style.scss ***!
  \*************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*********************************************!*\
  !*** multi ./js/index.js ./sass/style.scss ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/neilyonzon/Local Sites/data-con-la/app/public/wp-content/themes/datacon_theme/js/index.js */"./js/index.js");
module.exports = __webpack_require__(/*! /Users/neilyonzon/Local Sites/data-con-la/app/public/wp-content/themes/datacon_theme/sass/style.scss */"./sass/style.scss");


/***/ })

/******/ });