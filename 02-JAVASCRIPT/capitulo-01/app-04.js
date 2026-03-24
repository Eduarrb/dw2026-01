// ⚡⚡ ARROW FUNCTIONS ⚡⚡

saludar();

function saludar() {
    console.log('Hola a todo el mundo');
}

const saludar2 = () => {
    console.log('hola desde la funcion tipo flecha');
}

saludar2();


// constante global o variable global
const fechaNacimiento = 1990;

// scope, ambito, alcance o contexto de la funcion
const calcEdad = () => {
    const fechaActual = 2026;
    const edad = fechaActual - fechaNacimiento;
    console.log(edad);
}

calcEdad();

