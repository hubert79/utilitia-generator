// Valid

const form = document.querySelector("form");
const inEntityName = form.querySelector("input[name=entityName]");
const inentityURLAdress = form.querySelector("input[name=entityURLAdress]");
const inserviceName = form.querySelector("input[name=serviceName]");

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

var filterEmail  = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
var filterTel =  /^[0-9\+]{8,13}$/;

form.addEventListener("submit", e => {
    e.preventDefault();

	


    var error = false;
	var messageErrors = "Pola formularza, które wymagają poprawy\n";
	
	//Validate entity name
	if(inEntityName.value.length < 1){
		
		var e = document.getElementById('entityNameError').innerHTML = '<span>Błąd</span><span>To pole jest wymagane do wygenerowania deklaracji!</spann>';
		error = true;
	} else {
		var e = document.getElementById('entityNameError').innerHTML = '';
	}
	
	//Validate Service name
	if(inserviceName.value.length < 1){
		var e = document.getElementById('serviceNameError').innerHTML = '<span>Błąd</span><span>To pole jest wymagane do wygenerowania deklaracji!</spann>';
		error = true;
	} else {
		var e = document.getElementById('serviceNameError').innerHTML = '';
	}
	
	//Validate entity URL
	if(inentityURLAdress.value.length < 1){
		
		var e = document.getElementById('entityURLAdressError').innerHTML = '<span>Błąd</span><span>To pole jest wymagane do wygenerowania deklaracji!</spann>';
		error = true;
	} else {
		var e = document.getElementById('entityURLAdressError').innerHTML = '';
	}
	
	//validate selectStatus
	var x = document.getElementById('contentNotAccessibleStatus').value;
	var y = document.getElementById('selectStatus');
	if(x == "" && y.value != "zgodna"){
		
		var e = document.getElementById('contentNotAccessibleStatusError').innerHTML = '<span>Błąd</span><span>To pole jest wymagane do wygenerowania deklaracji!</spann>';
		error = true;
	} else {
		var e = document.getElementById('contentNotAccessibleStatusError').innerHTML = '';
	}
	
	//Valid Personal data
	//Contact name
	var cn = document.getElementById('contactName');
	if(cn.value.length < 1){
		
		var e = document.getElementById('contactNameError').innerHTML = '<span>Błąd</span><span>To pole jest wymagane do wygenerowania deklaracji!</spann>';
		error = true;
} else {
	var e = document.getElementById('contactNameError').innerHTML = '';
}
	
	//Contact E-mail
	var ce = document.getElementById('contactEmail');
	if(ce.value.length < 1 ){
		
		var e = document.getElementById('contactEmailError').innerHTML = '<span>Błąd</span><span>To pole jest wymagane do wygenerowania deklaracji!</spann>';
		error = true;
	}
	else if(ce.value.length > 1 && filterEmail.test(ce.value) == false){
		
		var e = document.getElementById('contactEmailError').innerHTML = '<span>Błąd</span><span>Wymagane jest wpisanie poprawnego adresu e-mail!</spann>';
		error = true;
	}
	else if(ce.value.length > 1 && filterEmail.test(ce.value) == true){
		
		var e = document.getElementById('contactEmailError').innerHTML = '';
	}
	
	//Contact Telephone
	var ct = document.getElementById('contactTelephon');
	if(ct.value.length < 1 ){
		alert("jeden");
		var e = document.getElementById('contactTelephonError').innerHTML = '<span>Błąd</span><span>To pole jest wymagane do wygenerowania deklaracji!</spann>';
		error = true;
	}
	else if(ct.value.length > 1 && filterTel.test(ct.value) == false){
		alert("dwa");
		var e = document.getElementById('contactTelephonError').innerHTML = '<span>Błąd</span><span>Wymagane jest wpisanie poprawnego numeru telefonu!</spann>';
		error = tre;
	}
	else if(ct.value.length > 1 && filterTel.test(ct.value) == true){
		alert("trzy");
		var e = document.getElementById('contactTelephonError').innerHTML = '';
	}
	
	//valid Declaration Made
	var decm = document.getElementById('declaration');
	var dme = document.getElementById('nameExtermalEntity');
	if(dme.value == "" && decm.value == "badania przeprowadzonego przez podmiot zewnętrzny"){
		
		var e = document.getElementById('declarationError').innerHTML = '<span>Błąd</span><span>To pole jest wymagane do wygenerowania deklaracji!</spann>';
		error = true;
	} else {
		var e = document.getElementById('declarationError').innerHTML = '';
	}
	
	//inarchaccess
	if(inarchaccess.value.length < 1){
		
		var e = document.getElementById('archaccessError').innerHTML = '<span>Błąd</span><span>To pole jest wymagane do wygenerowania deklaracji!</spann>';
		error = true;
	} else {
		var e = document.getElementById('archaccessError').innerHTML = "";
	}
	
	var ma = document.getElementById('mobApp');
	if(ma.value != "Nie"){
		if(indescribeMobileApp .value.length < 1){
		 	var e = document.getElementById('describeMobileAppError').innerHTML = '<span>Błąd</span><span>To pole jest wymagane do wygenerowania deklaracji!</spann>';
			error = true;
		} else { 
			var e = document.getElementById('describeMobileAppError').innerHTML = "";
		}
		if(inlinkMobileApp.value.length < 1){
		 	var e = document.getElementById('linkMobileAppError').innerHTML = '<span>Błąd</span><span>To pole jest wymagane do wygenerowania deklaracji!</spann>';
			error = true;
		} else { 
			var e = document.getElementById('linkMobileAppError').innerHTML = "";
		}
	}
	
	if(error == true){
		
		//form.submit();
		error = false;
	}
	else {
		form.submit();
	}
	
});