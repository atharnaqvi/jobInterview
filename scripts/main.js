const toggleButton = document.getElementsByClassName("toggle-button")[0];
const navbarLink = document.getElementsByTagName("ul")[1];

toggleButton.addEventListener('click', () => {
	navbarLink.classList.toggle("active");
})


function GetAnswers() {
	var x = document.getElementById("SelectTopic").selectedIndex;
	var y = document.getElementById("SelectTopic").options;
	if (x===1){
			document.getElementById("CV").style.display = "block";
			document.getElementById("Men").style.display = "none";
			document.getElementById("MockI").style.display = "none";
			document.getElementById("comp").style.display = "none";
			document.getElementById("yUs").style.display = "none";
	}else if(x===2){
			document.getElementById("CV").style.display = "none";
			document.getElementById("Men").style.display = "block";
			document.getElementById("MockI").style.display = "none";
			document.getElementById("comp").style.display = "none";
			document.getElementById("yUs").style.display = "none";
	}else if(x===3){
			document.getElementById("CV").style.display = "none";
			document.getElementById("Men").style.display = "none";
			document.getElementById("MockI").style.display = "block";
			document.getElementById("comp").style.display = "none";
			document.getElementById("yUs").style.display = "none";
	}else if(x===4){
			document.getElementById("CV").style.display = "none";
			document.getElementById("Men").style.display = "none";
			document.getElementById("MockI").style.display = "none";
			document.getElementById("comp").style.display = "block";
			document.getElementById("yUs").style.display = "none";
	}else if(x===5){
			document.getElementById("CV").style.display = "none";
			document.getElementById("Men").style.display = "none";
			document.getElementById("MockI").style.display = "none";
			document.getElementById("comp").style.display = "none";
			document.getElementById("yUs").style.display = "block";
	 }
	
}
//*************************************************************** */



function webFormSubmit(){
	
	document.getElementById("webForm1").classList.toggle("showhideWeb").focus();
	document.getElementById("webForm1").focus();
	// document.getElementById("phone1").classList.value("none");
	// document.getElementById("phone1").style.display = "none";
	// document.getElementById("email1").style.display = "none";
}

var webformBtn = document.getElementById("webForm-btn");
webformBtn.addEventListener("click", webFormSubmit);

//************************************************************* */

// function phoneCall(){
	
// 	document.getElementById("phone1").classList.toggle("showhidePhone");
// 	// document.getElementById("webForm1").classList.value("none");
// 	// document.getElementById("webForm1").style.display = "none";
// 	// document.getElementById("email1").style.display = "none";
// }

// var phoneBtn = document.getElementById("phone-btn");
// phoneBtn.addEventListener("click", phoneCall);

//************************************************************* */

//***********************IT.html (Moke Interview page) ************/
function pathway(sel){
	var status = document.getElementById("selPathway");
	if (status.value === "App Developer"){
		document.getElementById("AppDev").style.display = "block";
		sel.style.color = "#000";
		document.getElementById("AppInt").style.display = "none";
		document.getElementById("Broadcast").style.display = "none";
		document.getElementById("CloudServices").style.display = "none";
		document.getElementById("Data").style.display = "none";
		document.getElementById("eCommerce").style.display = "none";
		document.getElementById("ITSupport").style.display = "none";
		document.getElementById("JavascriptDev").style.display = "none";
		document.getElementById("NetworkEng").style.display = "none";
		document.getElementById("ProjectTeam").style.display = "none";
		document.getElementById("Secuirty").style.display = "none";
		document.getElementById("SEO").style.display = "none";
		document.getElementById("SoftwareDev").style.display = "none";
		document.getElementById("Testing").style.display = "none";
		document.getElementById("WebDev").style.display = "none";
		document.getElementById("ITform").style.display = "none";
	}
	else if (status.value === "App Integration"){
		document.getElementById("AppDev").style.display = "none";
		document.getElementById("AppInt").style.display = "block";
		sel.style.color = "#000";
		document.getElementById("Broadcast").style.display = "none";
		document.getElementById("CloudServices").style.display = "none";
		document.getElementById("Data").style.display = "none";
		document.getElementById("eCommerce").style.display = "none";
		document.getElementById("ITSupport").style.display = "none";
		document.getElementById("JavascriptDev").style.display = "none";
		document.getElementById("NetworkEng").style.display = "none";
		document.getElementById("ProjectTeam").style.display = "none";
		document.getElementById("Secuirty").style.display = "none";
		document.getElementById("SEO").style.display = "none";
		document.getElementById("SoftwareDev").style.display = "none";
		document.getElementById("Testing").style.display = "none";
		document.getElementById("WebDev").style.display = "none";
		document.getElementById("ITform").style.display = "none";
	}
	else if (status.value === "Broadcast"){
		document.getElementById("AppDev").style.display = "none";
		document.getElementById("AppInt").style.display = "none";
		document.getElementById("Broadcast").style.display = "block";
		sel.style.color = "#000";
		document.getElementById("CloudServices").style.display = "none";
		document.getElementById("Data").style.display = "none";
		document.getElementById("eCommerce").style.display = "none";
		document.getElementById("ITSupport").style.display = "none";
		document.getElementById("JavascriptDev").style.display = "none";
		document.getElementById("NetworkEng").style.display = "none";
		document.getElementById("ProjectTeam").style.display = "none";
		document.getElementById("Secuirty").style.display = "none";
		document.getElementById("SEO").style.display = "none";
		document.getElementById("SoftwareDev").style.display = "none";
		document.getElementById("Testing").style.display = "none";
		document.getElementById("WebDev").style.display = "none";
		document.getElementById("ITform").style.display = "none";
	}
	else if (status.value === "Cloud Services"){
		document.getElementById("AppDev").style.display = "none";
		document.getElementById("AppInt").style.display = "none";
		document.getElementById("Broadcast").style.display = "none";
		document.getElementById("CloudServices").style.display = "block";
		sel.style.color = "#000";
		document.getElementById("Data").style.display = "none";
		document.getElementById("eCommerce").style.display = "none";
		document.getElementById("ITSupport").style.display = "none";
		document.getElementById("JavascriptDev").style.display = "none";
		document.getElementById("NetworkEng").style.display = "none";
		document.getElementById("ProjectTeam").style.display = "none";
		document.getElementById("Secuirty").style.display = "none";
		document.getElementById("SEO").style.display = "none";
		document.getElementById("SoftwareDev").style.display = "none";
		document.getElementById("Testing").style.display = "none";
		document.getElementById("WebDev").style.display = "none";
		document.getElementById("ITform").style.display = "none";
	}
	else if (status.value === "Data"){
		document.getElementById("AppDev").style.display = "none";
		document.getElementById("AppInt").style.display = "none";
		document.getElementById("Broadcast").style.display = "none";
		document.getElementById("CloudServices").style.display = "none";
		document.getElementById("Data").style.display = "block";
		sel.style.color = "#000";
		document.getElementById("eCommerce").style.display = "none";
		document.getElementById("ITSupport").style.display = "none";
		document.getElementById("JavascriptDev").style.display = "none";
		document.getElementById("NetworkEng").style.display = "none";
		document.getElementById("ProjectTeam").style.display = "none";
		document.getElementById("Secuirty").style.display = "none";
		document.getElementById("SEO").style.display = "none";
		document.getElementById("SoftwareDev").style.display = "none";
		document.getElementById("Testing").style.display = "none";
		document.getElementById("WebDev").style.display = "none";
		document.getElementById("ITform").style.display = "none";
	}
	else if (status.value === "eCommerce"){
		document.getElementById("AppDev").style.display = "none";
		document.getElementById("AppInt").style.display = "none";
		document.getElementById("Broadcast").style.display = "none";
		document.getElementById("CloudServices").style.display = "none";
		document.getElementById("Data").style.display = "none";
		document.getElementById("eCommerce").style.display = "block";
		sel.style.color = "#000";
		document.getElementById("ITSupport").style.display = "none";
		document.getElementById("JavascriptDev").style.display = "none";
		document.getElementById("NetworkEng").style.display = "none";
		document.getElementById("ProjectTeam").style.display = "none";
		document.getElementById("Secuirty").style.display = "none";
		document.getElementById("SEO").style.display = "none";
		document.getElementById("SoftwareDev").style.display = "none";
		document.getElementById("Testing").style.display = "none";
		document.getElementById("WebDev").style.display = "none";
		document.getElementById("ITform").style.display = "none";
	}
	else if (status.value === "IT Support"){
		document.getElementById("AppDev").style.display = "none";
		document.getElementById("AppInt").style.display = "none";
		document.getElementById("Broadcast").style.display = "none";
		document.getElementById("CloudServices").style.display = "none";
		document.getElementById("Data").style.display = "none";
		document.getElementById("eCommerce").style.display = "none";
		document.getElementById("ITSupport").style.display = "block";
		sel.style.color = "#000";
		document.getElementById("JavascriptDev").style.display = "none";
		document.getElementById("NetworkEng").style.display = "none";
		document.getElementById("ProjectTeam").style.display = "none";
		document.getElementById("Secuirty").style.display = "none";
		document.getElementById("SEO").style.display = "none";
		document.getElementById("SoftwareDev").style.display = "none";
		document.getElementById("Testing").style.display = "none";
		document.getElementById("WebDev").style.display = "none";
		document.getElementById("ITform").style.display = "none";
	}
	else if (status.value === "Javascript Dev"){
		document.getElementById("AppDev").style.display = "none";
		document.getElementById("AppInt").style.display = "none";
		document.getElementById("Broadcast").style.display = "none";
		document.getElementById("CloudServices").style.display = "none";
		document.getElementById("Data").style.display = "none";
		document.getElementById("eCommerce").style.display = "none";
		document.getElementById("ITSupport").style.display = "none";
		document.getElementById("JavascriptDev").style.display = "block";
		sel.style.color = "#000";
		document.getElementById("NetworkEng").style.display = "none";
		document.getElementById("ProjectTeam").style.display = "none";
		document.getElementById("Secuirty").style.display = "none";
		document.getElementById("SEO").style.display = "none";
		document.getElementById("SoftwareDev").style.display = "none";
		document.getElementById("Testing").style.display = "none";
		document.getElementById("WebDev").style.display = "none";
		document.getElementById("ITform").style.display = "none";
	}
	else if (status.value === "Networking & Engineering"){
		document.getElementById("AppDev").style.display = "none";
		document.getElementById("AppInt").style.display = "none";
		document.getElementById("Broadcast").style.display = "none";
		document.getElementById("CloudServices").style.display = "none";
		document.getElementById("Data").style.display = "none";
		document.getElementById("eCommerce").style.display = "none";
		document.getElementById("ITSupport").style.display = "none";
		document.getElementById("JavascriptDev").style.display = "none";
		document.getElementById("NetworkEng").style.display = "block";
		sel.style.color = "#000";
		document.getElementById("ProjectTeam").style.display = "none";
		document.getElementById("Secuirty").style.display = "none";
		document.getElementById("SEO").style.display = "none";
		document.getElementById("SoftwareDev").style.display = "none";
		document.getElementById("Testing").style.display = "none";
		document.getElementById("WebDev").style.display = "none";
		document.getElementById("ITform").style.display = "none";
	}
	else if (status.value === "Project Team"){
		document.getElementById("AppDev").style.display = "none";
		document.getElementById("AppInt").style.display = "none";
		document.getElementById("Broadcast").style.display = "none";
		document.getElementById("CloudServices").style.display = "none";
		document.getElementById("Data").style.display = "none";
		document.getElementById("eCommerce").style.display = "none";
		document.getElementById("ITSupport").style.display = "none";
		document.getElementById("JavascriptDev").style.display = "none";
		document.getElementById("NetworkEng").style.display = "none";
		document.getElementById("ProjectTeam").style.display = "block";
		sel.style.color = "#000";
		document.getElementById("Secuirty").style.display = "none";
		document.getElementById("SEO").style.display = "none";
		document.getElementById("SoftwareDev").style.display = "none";
		document.getElementById("Testing").style.display = "none";
		document.getElementById("WebDev").style.display = "none";
		document.getElementById("ITform").style.display = "none";
	}
	else if (status.value === "Secuirty"){
		document.getElementById("AppDev").style.display = "none";
		document.getElementById("AppInt").style.display = "none";
		document.getElementById("Broadcast").style.display = "none";
		document.getElementById("CloudServices").style.display = "none";
		document.getElementById("Data").style.display = "none";
		document.getElementById("eCommerce").style.display = "none";
		document.getElementById("ITSupport").style.display = "none";
		document.getElementById("JavascriptDev").style.display = "none";
		document.getElementById("NetworkEng").style.display = "none";
		document.getElementById("ProjectTeam").style.display = "none";
		document.getElementById("Secuirty").style.display = "block";
		sel.style.color = "#000";
		document.getElementById("SEO").style.display = "none";
		document.getElementById("SoftwareDev").style.display = "none";
		document.getElementById("Testing").style.display = "none";
		document.getElementById("WebDev").style.display = "none";
		document.getElementById("ITform").style.display = "none";
	}
	else if (status.value === "SEO"){
		document.getElementById("AppDev").style.display = "none";
		document.getElementById("AppInt").style.display = "none";
		document.getElementById("Broadcast").style.display = "none";
		document.getElementById("CloudServices").style.display = "none";
		document.getElementById("Data").style.display = "none";
		document.getElementById("eCommerce").style.display = "none";
		document.getElementById("ITSupport").style.display = "none";
		document.getElementById("JavascriptDev").style.display = "none";
		document.getElementById("NetworkEng").style.display = "none";
		document.getElementById("ProjectTeam").style.display = "none";
		document.getElementById("Secuirty").style.display = "none";
		document.getElementById("SEO").style.display = "block";
		sel.style.color = "#000";
		document.getElementById("SoftwareDev").style.display = "none";
		document.getElementById("Testing").style.display = "none";
		document.getElementById("WebDev").style.display = "none";
		document.getElementById("ITform").style.display = "none";
	}
	else if (status.value === "Software Development"){
		document.getElementById("AppDev").style.display = "none";
		document.getElementById("AppInt").style.display = "none";
		document.getElementById("Broadcast").style.display = "none";
		document.getElementById("CloudServices").style.display = "none";
		document.getElementById("Data").style.display = "none";
		document.getElementById("eCommerce").style.display = "none";
		document.getElementById("ITSupport").style.display = "none";
		document.getElementById("JavascriptDev").style.display = "none";
		document.getElementById("NetworkEng").style.display = "none";
		document.getElementById("ProjectTeam").style.display = "none";
		document.getElementById("Secuirty").style.display = "none";
		document.getElementById("SEO").style.display = "none";
		document.getElementById("SoftwareDev").style.display = "block";
		sel.style.color = "#000";
		document.getElementById("Testing").style.display = "none";
		document.getElementById("WebDev").style.display = "none";
		document.getElementById("ITform").style.display = "none";
	}
	else if (status.value === "Software Testing and QA"){
		document.getElementById("AppDev").style.display = "none";
		document.getElementById("AppInt").style.display = "none";
		document.getElementById("Broadcast").style.display = "none";
		document.getElementById("CloudServices").style.display = "none";
		document.getElementById("Data").style.display = "none";
		document.getElementById("eCommerce").style.display = "none";
		document.getElementById("ITSupport").style.display = "none";
		document.getElementById("JavascriptDev").style.display = "none";
		document.getElementById("NetworkEng").style.display = "none";
		document.getElementById("ProjectTeam").style.display = "none";
		document.getElementById("Secuirty").style.display = "none";
		document.getElementById("SEO").style.display = "none";
		document.getElementById("SoftwareDev").style.display = "none";
		document.getElementById("Testing").style.display = "block";
		sel.style.color = "#000";
		document.getElementById("WebDev").style.display = "none";
		document.getElementById("ITform").style.display = "none";
	}
	else if (status.value === "Web Development"){
		document.getElementById("AppDev").style.display = "none";
		document.getElementById("AppInt").style.display = "none";
		document.getElementById("Broadcast").style.display = "none";
		document.getElementById("CloudServices").style.display = "none";
		document.getElementById("Data").style.display = "none";
		document.getElementById("eCommerce").style.display = "none";
		document.getElementById("ITSupport").style.display = "none";
		document.getElementById("JavascriptDev").style.display = "none";
		document.getElementById("NetworkEng").style.display = "none";
		document.getElementById("ProjectTeam").style.display = "none";
		document.getElementById("Secuirty").style.display = "none";
		document.getElementById("SEO").style.display = "none";
		document.getElementById("SoftwareDev").style.display = "none";
		document.getElementById("Testing").style.display = "none";
		document.getElementById("WebDev").style.display = "block";
		sel.style.color = "#000";
		document.getElementById("ITform").style.display = "none";
	}
	else {
		document.getElementById("AppDev").style.display = "none";
		document.getElementById("AppInt").style.display = "none";
		document.getElementById("Broadcast").style.display = "none";
		document.getElementById("CloudServices").style.display = "none";
		document.getElementById("Data").style.display = "none";
		document.getElementById("eCommerce").style.display = "none";
		document.getElementById("ITSupport").style.display = "none";
		document.getElementById("JavascriptDev").style.display = "none";
		document.getElementById("NetworkEng").style.display = "none";
		document.getElementById("ProjectTeam").style.display = "none";
		document.getElementById("Secuirty").style.display = "none";
		document.getElementById("SEO").style.display = "none";
		document.getElementById("SoftwareDev").style.display = "none";
		document.getElementById("Testing").style.display = "none";
		document.getElementById("WebDev").style.display = "none";
		document.getElementById("ITform").style.display = "none";
		
	}
}

//************************************************************************************** */
//*******************************************IT Form -----Show/Hide********************* */

function itMainFORM(sel){
	var status1 = document.getElementById("selPathway");
	var ApplicationDev = document.getElementById("AppDevSelect");
	var AppIntSelect = document.getElementById("AppIntSelect");
	var Broadcast = document.getElementById("BroadcastSelect");
	var CloudServices = document.getElementById("CloudServicesSelect");
	var Data = document.getElementById("DataSelect");
	var eCommerce = document.getElementById("eCommerceSelect");
	var ITSupport = document.getElementById("ITSupportSelect");
	var JavaScript = document.getElementById("JavascriptDevSelect");
	var NetworkEng = document.getElementById("NetworkEngSelect");
	var ProjectTeam = document.getElementById("ProjectTeamSelect");
	var Security = document.getElementById("SecuirtySelect");
	var SEO = document.getElementById("SEOSelect");
	var SoftwareDev = document.getElementById("SoftwareDevSelect");
	var Testing = document.getElementById("TestingSelect");
	var WebDev = document.getElementById("WebDevSelect");
	var targetPosition = document.getElementById("position");
	var Package = document.getElementById("package");
	var nextBtn = document.getElementById("nextBtn");


	if (ApplicationDev.value !== "0" ||  AppIntSelect.value !== "0" || Broadcast.value !== "0" || CloudServices.value !== "0" 
		|| Data.value !== "0" || eCommerce.value !== "0" || ITSupport.value !== "0" || JavaScript.value !== "0"
		|| NetworkEng.value !=="0" || ProjectTeam.value !=="0" || Security.value !== "0" || SEO.value !== "0" || SoftwareDev.value !== "0"
		|| Testing.value !== "0" || WebDev.value !== "0"){
		sel.style.color = "#000";
		document.getElementById("ITform").style.display = "block";
		document.getElementById("position").style.display = "block";
		document.getElementById("package").style.display = "block";
		document.getElementById("nextBtn").style.display = "block";
		
	}else if( ApplicationDev.value == "0" ||  AppIntSelect.value == "0" || Broadcast.value == "0" || CloudServices.value == "0"
		|| Data.value == "0" || eCommerce.value == "0" || ITSupport.value == "0" || JavaScript.value == "0"
		|| NetworkEng.value =="0" || ProjectTeam.value =="0" || Security.value == "0" || SEO.value == "0" || SoftwareDev.value == "0"
		|| Testing.value == "0" || WebDev.value == "0"){
		document.getElementById("ITform").style.display = "none";
		document.getElementById("position").style.display = "none";
		document.getElementById("package").style.display = "none";
		document.getElementById("nextBtn").style.display = "none";
	}

	}
function changeSelCol(sel){
var contactTopic = document.getElementById("subject");

	
		if (contactTopic.value !== "0"){
			sel.style.color = "#000";
		}
	}
