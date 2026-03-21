/*
    JAVASCRIPT

    - Es un lenguaje de programación
    - Se ejecuta del lado del cliente 
    - JS es key sensitive (diferencia entre mayúsculas y minúsculas)
    - el punto y coma no es obligatorio, pero es buena práctica usarlo para separar las instrucciones
    - JS es un lenguaje basado en objetos, lo que significa que todo en JS es un objeto, incluso las funciones
    - No es de tipado fuerte
    - JS se basa y manipula el DOM (Document Object Model) para interactuar con el HTML y CSS
    - la ultima version JS es ES2024, pero la mayoría de los navegadores soportan ES6 (ECMAScript 2015) y versiones posteriores
*/

// TIPOS DE DATOS EN JAVASCRIPT

// 💥💥💥 1. String (cadena de texto) 💥💥💥
// let y const
//  el signo igual es de asignación, no de comparación
let nombre = "Eduardo";
let apellido = 'García';
const anioNacimiento = 'nací en el año 1990';
console.log(anioNacimiento);
console.log(nombre);
nombre = "Juan";
console.log(nombre);
console.log(nombre[3]);
let parrafo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptate.";

// objeto.propiedad
console.log(parrafo.length)
console.log(parrafo[parrafo.length - 1])

// concatenar en JS -> "+"
let nombreCompleto = nombre + ' ' + apellido;
console.log(nombreCompleto);
console.log(nombreCompleto.length);

// objeto.metodo()
console.log(nombreCompleto.toUpperCase());

let edad2 = "30";
console.log(edad2);

// anioNacimiento = 1990; // no se puede cambiar el valor de una constante
// console.log(anioNacimiento);

// 💥💥💥 2. Number (número) 💥💥💥
let edad = 30;
console.log(edad);

let num1 = 10;
// let num2 = +'3';
// let num2 = Number('3');
let num2 = parseInt('3');
console.log(num1 + num2);
console.log(num1)

       //10 + 5 
num1 = num1 + 5;
console.log(num1);
num1 += 5;
num1 -= 3;
console.log(num1); // 17
num1 *= 2;
console.log(num1); // 34
num1 /= 4;
console.log(num1); // 8.5
num1 = 1;
// agregar y sutraer una unidad
num1++;
console.log(num1);
num1--;
console.log(num1);
// --num1 y num1-- o ++num1 y num1++

let nota = 10.5;
console.log(Math.floor(nota)); // redondea hacia abajo hacia el entero más cercano
console.log(Math.ceil(nota)); // redondea hacia arriba hacia el entero más cercano
console.log(Math.round(nota)); // redondea al entero más cercano


// para comparacion => '==' igualdad simple, '===' igualdad estricta (compara valor y tipo de dato)

