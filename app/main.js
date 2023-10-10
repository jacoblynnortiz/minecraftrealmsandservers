// makes navigation menu toggle between desktop and mobile menu

function myFunction() {
	var x = document.getElementById("myTopnav");
	if (x.className === "topnav") { x.className += " responsive"; }
	else { x.className = "topnav"; }
}

// change language of website on change of language switcher

document.getElementById("lang").onchange = function() {
	if (this.selectedIndex!==0) { window.location.href = this.value; }        
};