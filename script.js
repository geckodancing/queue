
function showCitizen(){
	document.getElementById("organisationFields").style.display = "none";
	document.getElementById("citizenFields").style.display = "";
	document.getElementById("customerType").style.display = "";
	document.getElementById("customerType").value = "citizen";
	document.getElementById("citizenButton").style.backgroundColor = "Blue";
	document.getElementById("organisationButton").style.backgroundColor = "DodgerBlue";
	document.getElementById("anonymousButton").style.backgroundColor = "DodgerBlue";
}

function showOrganisation(){
	document.getElementById("citizenFields").style.display = "none";
	document.getElementById("organisationFields").style.display = "";
	document.getElementById("customerType").value = "organisation";
	document.getElementById("organisationButton").style.backgroundColor = "Blue";
	document.getElementById("citizenButton").style.backgroundColor = "DodgerBlue";
	document.getElementById("anonymousButton").style.backgroundColor = "DodgerBlue";

}

function showAnonymous(){
	document.getElementById("citizenFields").style.display = "none";
	document.getElementById("organisationFields").style.display = "none";
	document.getElementById("customerType").value = "anonymous";
	document.getElementById("anonymousButton").style.backgroundColor = "Blue";
	document.getElementById("organisationButton").style.backgroundColor = "DodgerBlue";
	document.getElementById("citizenButton").style.backgroundColor = "DodgerBlue";
}
