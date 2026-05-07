const circle = document.querySelector('.nav__contenedor__menuIcon__circle');
const menu = document.querySelector('.nav__contenedor__menu');
const menuIcon = document.querySelector('.nav__contenedor__menuIcon');

menuIcon.addEventListener('click', () => {
	menu.classList.toggle('active');
	circle.classList.toggle('active');
});

const obtenerProductosJson = async () => {
	try {
		const res = await axios.get('publicApi/productos.php', {
			params: {
				action: 'obtenerLandingProductos'
			}
		});
		console.log(res.data);	
	} catch (error) {
		console.error(error);
	}
}

obtenerProductosJson();