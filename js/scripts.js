"use strict";

var btnLearnMore = document.querySelector(".button--learn-more");
var section = document.querySelector(".test");

btnLearnMore.addEventListener("click", function (event) {
	Velocity(section, "scroll", { duration: 700, easing: "ease-in-out" });
});