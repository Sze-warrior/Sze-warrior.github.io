var footerOptionsContainer = document.querySelectorAll(".footer-options-container");
var accordianTitle = document.querySelectorAll(".accordian-title");

//Function to expand the accordian and hide all other open accordians

if(accordianTitle){
	function expandAccordian(e){
		for(var i = 0; i < footerOptionsContainer.length; i++){
			footerOptionsContainer[i].classList.remove("show");
		}

		e.currentTarget.parentNode.classList.toggle("show");
	}
}

//Event handler to give each accordian title classes an event handler to open and close on mobile
for(var i = 0; i < accordianTitle.length; i++){
	accordianTitle[i].addEventListener("click", expandAccordian, false);
}