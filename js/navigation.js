/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
(function () {



	//Variables
	const hamburgerMenu = document.querySelector('#main-navigation-toggle');

	const modalBackground = document.querySelector('#modal-background');

	const subnavIcon = document.querySelectorAll('.subnav__icon');


	//Functions
	const toggleSideNav = () => {
		const sideNav = document.querySelector('ul.nav');
		sideNav.classList.toggle('nav--active');
	}

	//Function to toggle Modal Background (blue backgroud) visibility
	const fixBody = () => {
		const body = document.querySelector('body');
		body.classList.toggle('fixed');
		modalBackground.classList.toggle('active');
	}

	//Function to toggle input in Hamburger menu from checked to unchecked. This controls animation. 
	const toggleHamburger = () => {
		let hamburger = document.querySelector('#main-navigation-toggle');
		hamburger.checked == true ? hamburger.checked = false : hamburger.checked = true;
	}

	//Function to collapse and uncollapse any subnavigation
	const toggleSubnav = (e) => {
		let subNav = e.nextElementSibling;
		if (subNav.style.maxHeight == 0 || subNav.style.maxHeight == 0 + "px") {
			subNav.style.maxHeight = subNav.scrollHeight + "px"
			subNav.style.opacity = 1;
		} else {
			subNav.style.maxHeight = 0;
			subNav.style.opacity = 0;
		}
	}

	//Function to rotate chevron svg icon when selected

	const rotateChevron = (e) => {
		e.classList.toggle('subnav__icon--collapsed');
	}


	//Event Listeners and Handlers
	hamburgerMenu.addEventListener('click', () => {
		toggleSideNav();
		fixBody();
	})

	subnavIcon.forEach(item => {
		item.addEventListener('click', (e) => {
			toggleSubnav(item);
			rotateChevron(item);
		})
	})

	modalBackground.addEventListener('click', () => {
		toggleSideNav();
		fixBody();
		toggleHamburger();
	})

	stopResponsiveTransition();

	function stopResponsiveTransition() {
		const classes = document.body.classList;
		let timer = null;
		window.addEventListener('resize', function () {
			if (timer) {
				clearTimeout(timer);
				timer = null;
			} else {
				classes.add('stop-transition');
			}
			timer = setTimeout(() => {
				classes.remove('stop-transition');
				timer = null;
			}, 100);
		});
	}

	// const siteNavigation = document.getElementById('site-navigation');

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
}());