// 3. Boolean (booleano)
// true o false -> condicionales, lógica, etc.

let num1 = 3;
let num2 = 5;
let num3 = 8;

if(num1 > num2) {
    console.log("num1 es mayor que num2");
} else {
    console.log("num1 no es mayor que num2");
}

if (num1 > num2) {
    console.log('num1 es mayor que el num2');
} else if(num3 > num2) {
    console.log('num3 es mayor que num2');
} else {
    console.log('Ningún número es mayor que el otro');
}

// SIGNOS DE COMPARACIÓN
// > mayor que
// < menor que
// >= mayor o igual que 
// <= menor o igual que
// == igualdad simple (compara el valor, no el tipo de dato)
// === estrictamente igual a (compara el valor y el tipo de dato)
// != diferente simple (compara el valor, no el tipo de dato)
// !== estrictamente diferente a (compara el valor y el tipo de dato)

// 4. Null (nulo)
// que no tiene ningún valor, es un valor asignado que indica la ausencia de valor
let valorNulo = null;
console.log(valorNulo);

// 5. Undefined (indefinido)
// que no ha sido asignado ningún valor, es el valor por defecto de una variable que no ha sido inicializada

let valorIndefinido;
console.log(valorIndefinido);


// 6. Object (objeto) ⚡⚡⚡