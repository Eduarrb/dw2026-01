// 🔥🔥 EJECUCIONES SINCORNAS Y ASINCRONAS 🔥🔥

// 1️⃣ SINCRONAS
// let num = 10;
// console.log(num);

// function sumar(a, b) {
//     console.log(a + b);
// }

// sumar(5, 3);

// 2️⃣ ASINCRONAS
// son ejecuciones que realizan en un segundo plano, y esperan muchas veces a que termine, perono interrumpe el flujo o ejecucion del resto del algoritmo

// setInterval(function(){
//     console.log('hola mundo')
// }, 1000);

// let num = 10;
// console.log(num);

// JSON => JavaScript Object Notation
// es un formato de texto del cual JS entiende y procesa datos de intercambio

const btn = document.querySelector(".btn");

// fetch('data/usuarios.json')
fetch('https://thesimpsonsapi.com/api/characters/1')
    .then(
        async function(res){
            let data = await res.json()
            console.log(data);
        }
    )
    .catch(
        // console.log(error)
        function(error) {
            console.log(error);
        }
    );
