// Valid

const form = document.querySelector("form");
const inEntityName = form.querySelector("input[name=entityName]");
const inentityURLAdress = form.querySelector("input[name=entityURLAdress]");

const inyearDateOfPublication = form.querySelector("input[name=yearDateOfPublication]");
const inmonthDateOfPublication = form.querySelector("input[name=monthDateOfPublication]");
const indayDateOfPublication = form.querySelector("input[name=dayDateOfPublication]");

const inyearDateOfLastUpdate = form.querySelector("input[name=yearDateOfLastUpdate]");
const inmonthDateOfLastUpdate = form.querySelector("input[name=monthDateOfLastUpdate]");
const indayDateOfLastUpdate = form.querySelector("input[name=dayDateOfLastUpdate]");

const inselectStatus = form.querySelector("input[name=selectStatus]");
const inContentNotAccessibleStatus = form.querySelector("input[name=contentNotAccessibleStatus]");
const inOffStatus = form.querySelector("input[name=offStatus]");
const inLinkStatus = form.querySelector("input[name=linkStatus]");

const indeclarationMade = form.querySelector("input[name=declaration]");
var innameExtermalEntity = document.getElementById('nameExtermalEntity');

var inarchaccess = document.getElementById('archaccess');
const incontentNotAccessible = form.querySelector("input[name=contentNotAccessible]");
const inoffStatus = form.querySelector("input[name=offStatus]");
const inlinkStatus = form.querySelector("input[name=linkStatus]");

const inmobApp = form.querySelector("input[name=mobApp]");
var indescribeMobileApp = document.getElementById('describeMobileApp');
var inlinkMobileApp = document.getElementById('linkMobileApp');

form.addEventListener("submit", e => {
    e.preventDefault();

    var error = false;
	var messageErrors = "Pola formularza, które wymagają poprawy\n";
	
	//Validate entity name
	if(inEntityName.value.length < 1){
		
		messageErrors += "Nazwa podmiotu\n"
		error = true;
	}
	
	//Validate entity URL
	if(inentityURLAdress.value.length < 1){
		
		messageErrors += "Adres URL podmiotu\n";
		error = true;
	}
	
	//validate selectStatus
	var x = document.getElementById('selectStatus').value;
	if(x != 'zgodna'){
		if(inContentNotAccessibleStatus .value.length < 1){
			messageErrors += "Treść niedostępna\n";
			error = true;
		}
		if(inOffStatus  .value.length < 1){
			messageErrors += "Wyłączenia\n";
			error = true;
		}
		if(inLinkStatus  .value.length < 1){
			messageErrors += "Linki\n";
			error = true;
		}
	}
	
	// Date valid
	var yp = parseInt(document.getElementById('yearDateOfPublication').value);
	var mp = parseInt(document.getElementById('monthDateOfPublication').value);
	var dp = parseInt(document.getElementById('dayDateOfPublication').value);
	
	var yu = parseInt(document.getElementById('yearDateOfLastUpdate').value);
	var mu = parseInt(document.getElementById('monthDateOfLastUpdate').value);
	var du = parseInt(document.getElementById('dayDateOfLastUpdate').value);
	
	if(yp > yu){
		messageErrors += "Rok aktulizacji lub publikacji\n";
		error = true;
	} else if(yp == yu){
		if(mp > mu){
			messageErrors += "Miesiąc aktualizacji lub publikacji\n";
			error = true;
		} else if(mp == mu) {
			if(dp > du){
				messageErrors += "Dzień aktualizacji lub publikacji\n";
				error = true;
			}
		}
	}
	
	
	//valid Declaration Made
	 var dm = document.getElementById('declaration').value;
	if(dm == 'Badania przeprowadzonego przez podmiot zewnętrzny'){
		if(innameExtermalEntity.value.length < 1){
			messageErrors += "Nazwa podmiotu zewnętrznego\n";
			error = true;
		}
	}
	
	//inarchaccess
	if(inarchaccess.value.length < 1){
		messageErrors += "Dostępnośćarchitektoniczna\n";
		error = true;
	}
	
	//inmobApp
	var ma = document.getElementById('mobApp').value;
	if(ma == "Tak"){
		if(indescribeMobileApp .value.length < 1){
			messageErrors += "opis aplikacji\n";
			error = true;
		}
		if(inlinkMobileApp .value.length < 1){
			messageErrors += "opis aplikacji\n";
			error = true;
		}
	}
	
	if(error == false){
		form.submit();
	}
	else {
		form.submit();
	}
	
});