const addProducto = document.querySelector('.addProducto');
const formulario = document.querySelector('.formulario');
const closeForm = document.querySelectorAll('.closeForm');

addProducto.addEventListener('click', (e) => {
	e.preventDefault();
	formulario.classList.add('active');
});

closeForm.forEach((btn) => {
	btn.addEventListener('click', (e) => {
		e.preventDefault();
		formulario.classList.remove('active');
	});
});
