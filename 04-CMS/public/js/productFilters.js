const filtrosTag = document.querySelector('.contenidoProd__contenedor__filtrosTags');
const inputSearch = document.querySelector('.contenidoProd__contenedor__form__inputSearch input');

const inputSelects = document.querySelectorAll('.inputSelect');

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

	ul.addEventListener('click', async (e) => {
		if (e.target.tagName === 'LI') {
			const listas = ul.querySelectorAll('li');
			listas.forEach((li) => {
				const icon = li.querySelector('i');
				if (icon) icon.remove();
			});
			e.target.innerHTML += '<i class="fa-solid fa-check"></i>';
			e.target.parentElement.parentElement.firstElementChild.innerHTML = `${e.target.textContent} <i class="fa-solid fa-angle-down"></i>`;
			if (e.target.parentElement.parentElement.classList.contains('contenidoProd__contenedor__form__todos')) {
				await renderProductos(prodName = '', e.target.textContent.trim());
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
			} else {
				
			}
		}
	});
});

inputSearch.addEventListener('input', async () => {
	const value = inputSearch.value.trim();
	if (!filtrosTag.querySelector('.inputTag')) {
		const span = document.createElement('span');
		span.classList.add('inputTag');
		span.innerHTML = value + ' <i class="fa-solid fa-x"></i>';
		filtrosTag.append(span);
		await renderProductos(value);
	} else {
		if (value === '') {
			filtrosTag.querySelector('.inputTag').remove();
			await renderProductos(value);
			return;
		} else {
			const tag = filtrosTag.querySelector('.inputTag');
			tag.innerHTML = value + ' <i class="fa-solid fa-x"></i>';
			await renderProductos(value);
		}
	}
});

filtrosTag.addEventListener('click', async (e) => {
	if (e.target.tagName === 'SPAN') {
		inputSearch.value = '';
		await renderProductos('');
		e.target.remove();
	}
});

