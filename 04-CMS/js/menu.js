const circle = document.querySelector('.nav__contenedor__menuIcon__circle');
const menu = document.querySelector('.nav__contenedor__menu');
const menuIcon = document.querySelector('.nav__contenedor__menuIcon');

menuIcon.addEventListener('click', () => {
	menu.classList.toggle('active');
	circle.classList.toggle('active');
});