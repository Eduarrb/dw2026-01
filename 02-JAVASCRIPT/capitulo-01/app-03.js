// 💥💥 TEMPLATE STRINGS 💥💥
let nombre = "Eduardo";
let apellido = "García";
let edad = 30;

// Mi nombre es Eduardo Garcia y tengo 30 años
let mensaje = "Mi nombre es " + nombre + " " + apellido + " y tengo " + edad + " años";
// console.log(mensaje);

let mensaje2 = `Mi nombre es: ${nombre} ${apellido}`;
// console.log(mensaje2);

// window => objeto global del navegador o pricipal
// window.document => objeto que representa el documento HTML

const htmlBloque = document.querySelector('.contenido');
// console.log(htmlBloque);

htmlBloque.innerHTML = `
    <h1>
        ${mensaje2}
    </h1>
`;


// 💥💥 FUNCTIONS 💥💥

// function declaration
//  las funciones son bloques de codigo REUTILIZABLES, que se pueden ejecutar cada vez que se necesiten

function saludar() {
    console.log('Hola a todo el mundo');
}

// saludar();

// function calcEdad() {
//     const fechaNacimiento = 1994;
//     const fechaActual = 2026;
//     const edad = fechaActual - fechaNacimiento;
//     console.log(edad);
// }

// calcEdad(1999);

// Pasar parametros a las funciones
function calcEdad(fechaNacimiento) {
    const fechaActual = 2026;
    const edad = fechaActual - fechaNacimiento;
    console.log(edad);
}

// cuando ejecutamos o llamamos una funcion, pasamos argumentos
// calcEdad(1994);
// calcEdad(1975);
// calcEdad(2019);

// return
function multi(num1, num2) {
    res = num1 * num2;;
    // console.log(res);
    return [res, 'hola', true];
}

const resDeMulti = multi(5, 3);
htmlBloque.textContent = resDeMulti;