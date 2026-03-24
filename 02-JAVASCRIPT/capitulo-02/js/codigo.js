/*
    PASOS
    1. Manipular el DOM y agregar una tarea a la lista con un evento
    2. Al hacer click borrar una tarea de la lista (forma errónea)
    3. La forma correcta con delegacion de eventos.
*/

const tareaInput = document.querySelector('.tarea');
const btn = document.querySelector('button');

btn.addEventListener('click', function(){
    console.log('hiciste click');
});
