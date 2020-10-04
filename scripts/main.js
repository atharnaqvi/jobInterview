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
function pathway(){
	var status = document.getElementById("selPathway");
	if (status.value === "1"){
		document.getElementById("AppDev").style.display = "block";
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
	else if (status.value === "2"){
		document.getElementById("AppDev").style.display = "none";
		document.getElementById("AppInt").style.display = "block";
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
	else if (status.value === "3"){
		document.getElementById("AppDev").style.display = "none";
		document.getElementById("AppInt").style.display = "none";
		document.getElementById("Broadcast").style.display = "block";
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
	else if (status.value === "4"){
		document.getElementById("AppDev").style.display = "none";
		document.getElementById("AppInt").style.display = "none";
		document.getElementById("Broadcast").style.display = "none";
		document.getElementById("CloudServices").style.display = "block";
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
	else if (status.value === "5"){
		document.getElementById("AppDev").style.display = "none";
		document.getElementById("AppInt").style.display = "none";
		document.getElementById("Broadcast").style.display = "none";
		document.getElementById("CloudServices").style.display = "none";
		document.getElementById("Data").style.display = "block";
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
	else if (status.value === "6"){
		document.getElementById("AppDev").style.display = "none";
		document.getElementById("AppInt").style.display = "none";
		document.getElementById("Broadcast").style.display = "none";
		document.getElementById("CloudServices").style.display = "none";
		document.getElementById("Data").style.display = "none";
		document.getElementById("eCommerce").style.display = "block";
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
	else if (status.value === "7"){
		document.getElementById("AppDev").style.display = "none";
		document.getElementById("AppInt").style.display = "none";
		document.getElementById("Broadcast").style.display = "none";
		document.getElementById("CloudServices").style.display = "none";
		document.getElementById("Data").style.display = "none";
		document.getElementById("eCommerce").style.display = "none";
		document.getElementById("ITSupport").style.display = "block";
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
	else if (status.value === "8"){
		document.getElementById("AppDev").style.display = "none";
		document.getElementById("AppInt").style.display = "none";
		document.getElementById("Broadcast").style.display = "none";
		document.getElementById("CloudServices").style.display = "none";
		document.getElementById("Data").style.display = "none";
		document.getElementById("eCommerce").style.display = "none";
		document.getElementById("ITSupport").style.display = "none";
		document.getElementById("JavascriptDev").style.display = "block";
		document.getElementById("NetworkEng").style.display = "none";
		document.getElementById("ProjectTeam").style.display = "none";
		document.getElementById("Secuirty").style.display = "none";
		document.getElementById("SEO").style.display = "none";
		document.getElementById("SoftwareDev").style.display = "none";
		document.getElementById("Testing").style.display = "none";
		document.getElementById("WebDev").style.display = "none";
		document.getElementById("ITform").style.display = "none";
	}
	else if (status.value === "9"){
		document.getElementById("AppDev").style.display = "none";
		document.getElementById("AppInt").style.display = "none";
		document.getElementById("Broadcast").style.display = "none";
		document.getElementById("CloudServices").style.display = "none";
		document.getElementById("Data").style.display = "none";
		document.getElementById("eCommerce").style.display = "none";
		document.getElementById("ITSupport").style.display = "none";
		document.getElementById("JavascriptDev").style.display = "none";
		document.getElementById("NetworkEng").style.display = "block";
		document.getElementById("ProjectTeam").style.display = "none";
		document.getElementById("Secuirty").style.display = "none";
		document.getElementById("SEO").style.display = "none";
		document.getElementById("SoftwareDev").style.display = "none";
		document.getElementById("Testing").style.display = "none";
		document.getElementById("WebDev").style.display = "none";
		document.getElementById("ITform").style.display = "none";
	}
	else if (status.value === "10"){
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
		document.getElementById("Secuirty").style.display = "none";
		document.getElementById("SEO").style.display = "none";
		document.getElementById("SoftwareDev").style.display = "none";
		document.getElementById("Testing").style.display = "none";
		document.getElementById("WebDev").style.display = "none";
		document.getElementById("ITform").style.display = "none";
	}
	else if (status.value === "11"){
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
		document.getElementById("SEO").style.display = "none";
		document.getElementById("SoftwareDev").style.display = "none";
		document.getElementById("Testing").style.display = "none";
		document.getElementById("WebDev").style.display = "none";
		document.getElementById("ITform").style.display = "none";
	}
	else if (status.value === "12"){
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
		document.getElementById("SoftwareDev").style.display = "none";
		document.getElementById("Testing").style.display = "none";
		document.getElementById("WebDev").style.display = "none";
		document.getElementById("ITform").style.display = "none";
	}
	else if (status.value === "13"){
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
		document.getElementById("Testing").style.display = "none";
		document.getElementById("WebDev").style.display = "none";
		document.getElementById("ITform").style.display = "none";
	}
	else if (status.value === "14"){
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
		document.getElementById("WebDev").style.display = "none";
		document.getElementById("ITform").style.display = "none";
	}
	else if (status.value === "15"){
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

function itMainFORM(){
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

	if (ApplicationDev.value !== "0" ||  AppIntSelect.value !== "0" || Broadcast.value !== "0" || CloudServices.value !== "0" 
		|| Data.value !== "0" || eCommerce.value !== "0" || ITSupport.value !== "0" || JavaScript.value !== "0"
		|| NetworkEng.value !=="0" || ProjectTeam.value !=="0" || Security.value !== "0" || SEO.value !== "0" || SoftwareDev.value !== "0"
		|| Testing.value !== "0" || WebDev.value !== "0"){
		document.getElementById("ITform").style.display = "block";
	}else if( ApplicationDev.value === "0" ||  AppIntSelect.value === "0" || Broadcast.value === "0" || CloudServices.value === "0"
		|| Data.value === "0" || eCommerce.value === "0" || ITSupport.value === "0" || JavaScript.value === "0"
		|| NetworkEng.value ==="0" || ProjectTeam.value ==="0" || Security.value === "0" || SEO.value === "0" || SoftwareDev.value === "0"
		|| Testing.value === "0" || WebDev.value === "0"){
		document.getElementById("ITform").style.display = "none";
	}

	}

