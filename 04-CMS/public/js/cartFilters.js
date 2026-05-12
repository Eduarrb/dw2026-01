const inputSelects = document.querySelectorAll('.inputSelect_cart');
const cartCantiItem = document.querySelectorAll('.cart__contenedor__box__producto__item');

inputSelects.forEach((input) => {
	const div = input.querySelector('div');
	const ul = input.querySelector('ul');
	div.addEventListener('click', () => {
		inputSelects.forEach((i) => {
			const otroul = i.querySelector('ul');
			if (otroul !== ul) {
				otroul.classList.remove('active');
			}
		});

		ul.classList.toggle('active');
	});

	ul.addEventListener('click', (e) => {
		if (e.target.tagName === 'LI') {
			const listas = ul.querySelectorAll('li');
			listas.forEach((li) => {
				const icon = li.querySelector('i');
				if (icon) icon.remove();
			});
			e.target.innerHTML += '<i class="fa-solid fa-check"></i>';
			e.target.parentElement.parentElement.firstElementChild.innerHTML = `${e.target.textContent} <i class="fa-solid fa-angle-down"></i>`;
			if (e.target.parentElement.parentElement.classList.contains('contenidoProd__contenedor__form__todos')) {
				if (e.target.textContent === 'Todas') {
					if (filtrosTag.firstChild) {
						filtrosTag.firstChild.remove();
					}
				} else {
					if (filtrosTag.firstChild) {
						filtrosTag.firstChild.remove();
					}
					const span = document.createElement('span');
					span.innerHTML = e.target.textContent + ' <i class="fa-solid fa-x"></i>';
					filtrosTag.prepend(span);
					ul.classList.remove('active');
				}
			}
		}
	});
});

cartCantiItem.forEach((item) => {
	const cartCantiBox = item.querySelector('.cart__contenedor__box__producto__item__data__col__canti');
	const cartCantiNum = item.querySelector('.cart__contenedor__box__producto__item__data__col__canti .num');

	cartCantiBox.addEventListener('click', (e) => {
		if (e.target.classList.contains('menos') || (e.target.classList.contains('fa-solid') && e.target.classList.contains('fa-minus'))) {
			if (cartCantiNum.textContent > 1) cartCantiNum.textContent--;
		}
		if (e.target.classList.contains('mas') || (e.target.classList.contains('fa-solid') && e.target.classList.contains('fa-plus'))) {
			cartCantiNum.textContent++;
		}
	});
});

const getResumenJson = async () => {
	try {
		const res = await axios.get('publicApi/productos.php', {
			params: {
				action: 'obtenerResumen',
			},
		});
		return res.data;
	} catch (error) {
		console.error(error);
	}
};

const resumenBox = document.querySelector('.cart__contenedor__box__resumen');

const renderResumen = async () => {
	const resumen = await getResumenJson();
	const plantilla = `
		<div class="cart__contenedor__box__resumen--title">
            resumen
		</div>
		<div class="cart__contenedor__box__resumen__subtotal">
			<span>Subtotal</span>
			<span>$${resumen.subtotal.toFixed(2)}</span>
		</div>
		<div class="cart__contenedor__box__resumen__envio">
			<span>Envío</span>
			<span>Gratis</span>
		</div>
		<hr>
		<div class="cart__contenedor__box__resumen__total">
			<span>Total</span>
			<span>$${resumen.total.toFixed(2)}</span>
		</div>
		<form class="cart__contenedor__box__resumen__form">
			<button type="submit" class="btn btn--secondary">FINALIZAR COMPRA</button>
		</form>
	`;
	resumenBox.innerHTML = plantilla;
}

renderResumen();