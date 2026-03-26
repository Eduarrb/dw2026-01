/*
    PASOS
    1. Manipular el DOM y agregar una tarea a la lista con un evento
    2. Al hacer click borrar una tarea de la lista (forma errónea)
    3. La forma correcta con delegacion de eventos.
*/

const tareaInput = document.querySelector('.tarea');
const btn = document.querySelector('button');
const listaBox = document.querySelector('ul');
const alerta = document.querySelector('.alerta');

btn.addEventListener('click', function () {
	// console.log(tareaInput.value);
	// listaBox.innerHTML += `<li>${tareaInput.value}</li>`;
    if(tareaInput.value !== '') {
        alerta.textContent = '';
        const tarea = `<li class="item">${tareaInput.value}</li>`;
        listaBox.insertAdjacentHTML('beforeend', tarea);
        tareaInput.value = '';
    } else {
        alerta.textContent = 'El campo no debe estar vacio 💥💥';
    }
});

// borrar tarea (forma errónea) 💥💥
// const listaTareas = document.querySelectorAll('.item');
// console.log(listaTareas[1]);
// listaTareas.forEach(function(elemento, indice){
//     // console.log(indice, elemento);
// })

// listaTareas.forEach((e) => {
// 	// console.log(e);
// 	e.addEventListener('click', function () {
// 		e.remove();
// 	});
// });

// borrar tarea (forma correcta) ✅✅
listaBox.addEventListener('click', function (evento) {
	// console.log(evento);
	// Solo tengo que detectar si el elemento es un 'li' donde hago click
	if (evento.target.tagName === 'LI') {
		evento.target.remove();
	}
});
