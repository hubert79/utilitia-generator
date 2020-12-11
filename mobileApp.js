

const selectMobileApp = document.getElementById('mobApp');
const addInputsMobileApp = document.getElementById('addMobileAppInput');

	selectMobileApp.addEventListener('change', e => {
		e.target.value == 'Nie' ?
		addInputsMobileApp.classList.add('mobileApp-is-hidden')	:
		addInputsMobileApp.classList.remove('mobileApp-is-hidden')
		
	});