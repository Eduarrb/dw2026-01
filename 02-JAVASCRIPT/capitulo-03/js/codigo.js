const btn = document.querySelector('button');
const popupCaja = document.querySelector('.popup-caja');
const xClose = document.querySelector('.popup-close');

btn.addEventListener('click', () => {
	popupCaja.classList.add('mostrarCaja');
});

xClose.addEventListener('click', () => {
	popupCaja.classList.remove('mostrarCaja');
});

popupCaja.addEventListener('click', (e) => {
	// console.log(e);
	if (e.target.classList.contains('mostrarCaja')) {
		e.target.classList.remove('mostrarCaja');
	}
});

window.addEventListener('keyup', (e) => {
	console.log(e);
	if (e.code === 'Escape') {
		popupCaja.classList.remove('mostrarCaja');
	}
});
