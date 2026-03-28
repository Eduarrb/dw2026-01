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
            ul.classList.remove('active');
		}
	});
});
