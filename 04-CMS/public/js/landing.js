const circle = document.querySelector('.nav__contenedor__menuIcon__circle');
const menu = document.querySelector('.nav__contenedor__menu');
const menuIcon = document.querySelector('.nav__contenedor__menuIcon');
const landProductosBox = document.querySelector('.productos__contenedor__box');

menuIcon.addEventListener('click', () => {
	menu.classList.toggle('active');
	circle.classList.toggle('active');
});

const obtenerProductosJson = async () => {
	try {
		const res = await axios.get('publicApi/productos.php', {
			params: {
				action: 'obtenerLandingProductos',
				url: window.location.pathname,
			},
		});
		return res.data;
	} catch (error) {
		console.error(error);
	}
};

async function renderProductos($productos) {
	const prod = await obtenerProductosJson();
	let plantilla = '';
	prod.forEach((e) => {
		let tallas = '';
		e.tallas.forEach((talla) => {
			tallas += `<span>${talla.sigla}</span>`;
		});
		plantilla += `
			<article class="productos__contenedor__box__item">
                <div class="productos__contenedor__box__item__top">
                    <img src="img/productos/${e.imagen}" alt="${e.nombre}" />
                    <div></div>
                    <span>destacado</span>
					<form method="POST">
						<input type="hidden" name="prodId" value="${e.id}">
						<button href="#" type="submit">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
								<path
									stroke-linecap="round"
									stroke-linejoin="round"
									d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z"
								/>
							</svg>
							añadir
						</button>
					</form>
                </div>
                <div class="productos__contenedor__box__item__buttom">
                    <h4>${e.nombre}</h4>
                    <p>${e.descripcion}</p>
                    <span class="productos__contenedor__box__item__buttom--precio">$${e.precio}</span>
                    <div class="productos__contenedor__box__item__buttom__tallas">
                        ${tallas}
                    </div>
                </div>
            </article>
		`;
	});

	landProductosBox.innerHTML = plantilla;
}

renderProductos();
