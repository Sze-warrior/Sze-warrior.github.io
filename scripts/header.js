var headerDropdown = document.querySelectorAll(".header-dropdown");

if(headerDropdown){
	function openDropdown(event){
		event.currentTarget.classList.toggle("show");
	}
};

for(var i = 0; i < headerDropdown.length; i++){
	headerDropdown[i].addEventListener("click", openDropdown, false);
}
