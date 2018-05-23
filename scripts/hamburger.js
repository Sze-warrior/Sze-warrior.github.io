//Hamburger animation JS
var hamburgerContainer = document.querySelector('.hamburger-container');
var hamburgerTopBar = document.querySelector('.hamburger-bar-1');
var hamburgerMiddleBar = document.querySelector('.hamburger-bar-2');
var hamburgerBottomBar = document.querySelector('.hamburger-bar-3');
var nav = document.querySelector('.nav-container');
var mobileMedia = '768';


//Function to animated the correct hamburger menu bars
if(hamburgerContainer){
	function hamburgerAnimate(e){
		hamburgerTopBar.classList.toggle("hamburger-bar-1-rotate");
		hamburgerMiddleBar.classList.toggle("hamburger-bar-2-hide");
		hamburgerBottomBar.classList.toggle("hamburger-bar-3-rotate");
		nav.classList.toggle('show');
	}
};

//Function to show navbar if user is resizing browser and toggled off the navbar
function hideNav(e) {
   if (window.innerWidth <= mobileMedia) {
		nav.classList.remove('show');   
		hamburgerTopBar.classList.remove("hamburger-bar-1-rotate");
		hamburgerMiddleBar.classList.remove("hamburger-bar-2-hide");
		hamburgerBottomBar.classList.remove("hamburger-bar-3-rotate");				
   }
}

//Event handler to toggle the hamburger animation and show nav on resizing on desktop and mobile
window.addEventListener("resize", hideNav, false);
hamburgerContainer.addEventListener("click", hamburgerAnimate, false);