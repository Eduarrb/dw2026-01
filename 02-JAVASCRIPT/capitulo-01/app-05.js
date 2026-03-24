// ⚡⚡ TIPOS DE OBJETOS ⚡⚡

// 1. STRING
// 2. NUMBER
// 3. BOOLEAN
// 4. NULL
// 5. UNDEFINED
// 6. OBJECT
// 7. FUNCTION
// 8. ARRAY

//  los arrayas e manipulan por indices
//                     0        1        2        3
const personajes = ['Mario', 'Luigi', 'Peach', 'Bowser', 'Yoshi', 'toad'];

// ITERAR SOBRE UN ARRAY
//                  4

// LOOPS O CICLOS -> for, while, do while
// for (let contador = 0; contador < 4; contador++) {
//     console.log(personajes[contador]);
// }

for (let i = 0; i < personajes.length; i++) {
    // console.log(i, personajes[i]);
}


let plantilla = '';

for (let i = 0; i < personajes.length; i++) {
    // plantilla = plantilla + `<h1>${personajes[i]}</h1>`;
    plantilla += `<h1>${personajes[i]}</h1>`;
}

const htmlBloque = document.querySelector('.contenido');
htmlBloque.innerHTML = plantilla;

console.log(plantilla);