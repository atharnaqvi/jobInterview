const toggleButton = document.getElementsByClassName("toggle-button")[0];
const navbarLink = document.getElementsByTagName("ul")[1];

toggleButton.addEventListener('click', () => {
	navbarLink.classList.toggle("active");
})


function GetAnswers() {
	var x = document.getElementById("SelectTopic").selectedIndex;
	var y = document.getElementById("SelectTopic").options;
	if (x===1){
			document.getElementById("MockI").style.display = "block";
			document.getElementById("CV").style.display = "none";
			document.getElementById("Men").style.display = "none";
			document.getElementById("pp").style.display = "none";
			document.getElementById("comp").style.display = "none";
			document.getElementById("sug").style.display = "none";
			document.getElementById("partner").style.display = "none";
			document.getElementById("yUs").style.display = "none";
	}else if(x===2){
			document.getElementById("MockI").style.display = "none";
			document.getElementById("CV").style.display = "block";
			document.getElementById("Men").style.display = "none";
			document.getElementById("pp").style.display = "none";
			document.getElementById("comp").style.display = "none";
			document.getElementById("sug").style.display = "none";
			document.getElementById("partner").style.display = "none";
			document.getElementById("yUs").style.display = "none";
	}else if(x===3){
			document.getElementById("MockI").style.display = "none";
			document.getElementById("CV").style.display = "none";
			document.getElementById("Men").style.display = "block";
			document.getElementById("pp").style.display = "none";
			document.getElementById("comp").style.display = "none";
			document.getElementById("sug").style.display = "none";
			document.getElementById("partner").style.display = "none";
			document.getElementById("yUs").style.display = "none";
	}else if(x===4){
			document.getElementById("MockI").style.display = "none";
			document.getElementById("CV").style.display = "none";
			document.getElementById("Men").style.display = "none";
			document.getElementById("pp").style.display = "block";
			document.getElementById("comp").style.display = "none";
			document.getElementById("sug").style.display = "none";
			document.getElementById("partner").style.display = "none";
			document.getElementById("yUs").style.display = "none";
	}else if(x===5){
			document.getElementById("MockI").style.display = "none";
			document.getElementById("CV").style.display = "none";
			document.getElementById("Men").style.display = "none";
			document.getElementById("pp").style.display = "none";
			document.getElementById("comp").style.display = "block";
			document.getElementById("sug").style.display = "none";
			document.getElementById("partner").style.display = "none";
			document.getElementById("yUs").style.display = "none";
	}else if(x===6){
			document.getElementById("MockI").style.display = "none";
			document.getElementById("CV").style.display = "none";
			document.getElementById("Men").style.display = "none";
			document.getElementById("pp").style.display = "none";
			document.getElementById("comp").style.display = "none";
			document.getElementById("sug").style.display = "block";
			document.getElementById("partner").style.display = "none";
			document.getElementById("yUs").style.display = "none";
	}else if(x===7){
			document.getElementById("MockI").style.display = "none";
			document.getElementById("CV").style.display = "none";
			document.getElementById("Men").style.display = "none";
			document.getElementById("pp").style.display = "none";
			document.getElementById("comp").style.display = "none";
			document.getElementById("sug").style.display = "none";
			document.getElementById("partner").style.display = "block";
			document.getElementById("yUs").style.display = "none";
	}else if(x===8){
			document.getElementById("MockI").style.display = "none";
			document.getElementById("CV").style.display = "none";
			document.getElementById("Men").style.display = "none";
			document.getElementById("pp").style.display = "none";
			document.getElementById("comp").style.display = "none";
			document.getElementById("sug").style.display = "none";
			document.getElementById("partner").style.display = "none";
			document.getElementById("yUs").style.display = "block";
	}
}
//*************************************************************** */



function webFormSubmit(){
	
	document.getElementById("webForm1").classList.toggle("showhideWeb");
	// document.getElementById("phone1").classList.value("none");
	// document.getElementById("phone1").style.display = "none";
	// document.getElementById("email1").style.display = "none";
}

var webformBtn = document.getElementById("webForm-btn");
webformBtn.addEventListener("click", webFormSubmit);

//************************************************************* */

function phoneCall(){
	
	document.getElementById("phone1").classList.toggle("showhidePhone");
	// document.getElementById("webForm1").classList.value("none");
	// document.getElementById("webForm1").style.display = "none";
	// document.getElementById("email1").style.display = "none";
}

var phoneBtn = document.getElementById("phone-btn");
phoneBtn.addEventListener("click", phoneCall);

//************************************************************* */

