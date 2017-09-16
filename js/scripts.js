var btnSpinner = document.querySelector(".btn-spinner");

function addSpinnerState(e){
	var spinner = e.currentTarget.querySelector(".spinner-container");
	var btnText = e.currentTarget.querySelector(".btn-description");

	spinner.classList.remove("hidden");
	
	btnText.innerHTML = "Logging in...";
	btnText.classList.add("loading-description");

	btnSpinner.classList.add("btn-loading");
}

btnSpinner.addEventListener("click", addSpinnerState, false);

