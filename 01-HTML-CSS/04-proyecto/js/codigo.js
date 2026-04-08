const circle = document.querySelector('.nav__contenedor__menuIcon__circle');
const menu = document.querySelector('.nav__contenedor__menu');
const menuIcon = document.querySelector('.nav__contenedor__menuIcon');
const filtrosTag = document.querySelector('.contenidoProd__contenedor__filtrosTags');
const inputSearch = document.querySelector('.contenidoProd__contenedor__form__inputSearch input');

menuIcon.addEventListener('click', () => {
	menu.classList.toggle('active');
	circle.classList.toggle('active');
});

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

inputSearch.addEventListener('input', () => {
	const value = inputSearch.value.trim();
	if (!filtrosTag.querySelector('.inputTag')) {
		const span = document.createElement('span');
		span.classList.add('inputTag');
		span.innerHTML = value + ' <i class="fa-solid fa-x"></i>';
		filtrosTag.append(span);
	} else {
		if (value === '') {
			filtrosTag.querySelector('.inputTag').remove();
			return;
		} {
			const tag = filtrosTag.querySelector('.inputTag');
			tag.innerHTML = value + ' <i class="fa-solid fa-x"></i>';
		}
	}
});

filtrosTag.addEventListener('click', (e) => {
	console.log(e)
	if(e.target.tagName === 'SPAN') {
		e.target.remove();
	}
})