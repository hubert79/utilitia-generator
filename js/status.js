// statusDropDown

const select = document.getElementById('selectStatus');
const addInputs = document.getElementById('addStatusInput');

select.addEventListener('change', (e) => {
	e.target.value === 'zgodna' ?
		addInputs.classList.add('status-is-hidden') :
		addInputs.classList.remove('status-is-hidden');
});
window.addEventListener('load', () => {
	select.value === 'zgodna' ?
		addInputs.classList.add('status-is-hidden') :
		addInputs.classList.remove('status-is-hidden');
});