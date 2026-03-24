// ⚡⚡ OBJETOS⚡⚡

// los objetos son estructuras de datos que nos permiten almacenar información de manera organizada, con propiedades y valores asociados. Son fundamentales en JavaScript y se utilizan para representar entidades del mundo real, como personas, productos, vehículos, etc.
// key value pair

const celular = {
    marca: "Apple",
    modelo: "iPhone 14 Pro Max",
    color: "Espacial Black",
    almacenamiento: "512GB",
    camara: "48MP",
    precio: 3500,
    liberdo: true,
    accesorios: ['cargador', 'audifonos', 'funda']
}

// console.log(celular['marca']);
// console.log(celular.precio);

const usuario = {
    nombre: "Eduardo",
    apellido: "García",
    edad: 30,
    correo: "eduardo@gmial.com",
    rol: "admin",
    // METODOS -> funciones dentro de un objeto, tanto declarativas o de flecha
    saludar: function() {
        console.log('hola soy Eduardo');
        console.log(this.nombre);
    },
    iniciarSesion: () => {
        console.log('iniciando sesion');
        console.log(this)
    }
    // A LA PALABRA RESERVADA "THIS" -> hace referencia al objeto en el que se encuentra o ejecuta
}

// usuario.iniciarSesion();
// console.log(window);
// console.log(this);
// usuario.saludar();

const personaje = {
    nombre: "Mario",
    tipo: "plomero",
    color: "rojo",
    edad: 40,
    skills: ['saltar', 'correr', 'golpear'],
    saludar: function() {
        return `Hola soy ${this.nombre} y soy un ${this.tipo}`;
    },
    plantilla: '',
    crearPlantillaSkills: function() {
        for (let i = 0; i < this.skills.length; i++) {
            this.plantilla += `<h2>${this.skills[i]}</h2>`
        }
        return this.plantilla;
    },
    printPlantilla: function(){
        const bloque = document.querySelector('.contenido');
        bloque.innerHTML = this.crearPlantillaSkills();
    }
}

personaje.printPlantilla();