// Declaration Drop down list and add input

const selectDeclaration = document.getElementById('declaration');
const addInputsDeclaration = document.getElementById('addDeclarationInput');

selectDeclaration.addEventListener('change', (e) => {
	e.target.value === 'samooceny przeprowadzonej przez podmiot publiczny' ?
		addInputsDeclaration.classList.add('declaration-is-hidden') :
		addInputsDeclaration.classList.remove('declaration-is-hidden');
});
window.addEventListener('load', () => {
	selectDeclaration.value === 'samooceny przeprowadzonej przez podmiot publiczny' ?
		addInputsDeclaration.classList.add('declaration-is-hidden') :
		addInputsDeclaration.classList.remove('declaration-is-hidden');
});