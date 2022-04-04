

const selectMobileApp = document.getElementById('mobApp');
const addInputsMobileApp = document.getElementById('addMobileAppInput');
const handleChangeMobileApp = () => {
	selectMobileApp.value == 'nie' ?
	addInputsMobileApp.classList.add('mobileApp-is-hidden') :
	addInputsMobileApp.classList.remove('mobileApp-is-hidden');
}

selectMobileApp.addEventListener('change', (e) => {
	e.target.value === 'Nie' ?
		addInputsMobileApp.classList.add('mobileApp-is-hidden') :
		addInputsMobileApp.classList.remove('mobileApp-is-hidden');
});
window.addEventListener('load', () => {
	selectMobileApp.value === 'Nie' ?
		addInputsMobileApp.classList.add('mobileApp-is-hidden') :
		addInputsMobileApp.classList.remove('mobileApp-is-hidden');
});