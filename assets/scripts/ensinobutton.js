function changeName() {
			var ensinopage = document.querySelector(".ensinopage")
			if (ensinopage.style.display == "block") {
				ensinopage.style.display = "none";
				document.querySelector(".expand__button").innerHTML = "&#9196; Expandir &#9196;";
			} else {
				ensinopage.style.display = "block";
				document.querySelector(".expand__button").innerHTML = "&#9195; Recolher &#9195;";
			}	
}		