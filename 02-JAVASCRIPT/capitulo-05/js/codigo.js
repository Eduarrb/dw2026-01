// const obtenerJson = async () => {
//     try {
//         const res = await axios.get('https://pokeapi.co/api/v2/pokemon/ditto');
//         console.log(res.data);
//     } catch (error) {
//         console.log(error);
//     }
// }

const obtenerJson = async (nombrePokemon) => {
    try {
        const res = await axios.get(`https://pokeapi.co/api/v2/pokemon/${nombrePokemon}`);
        return res.data;
    } catch (error) {
        console.log(error);
    }
}

const form = document.querySelector('form');
const pokemonInput = document.querySelector('input[type="text"]');
const pokeData = document.querySelector('.pokeData');
const poekImg = document.querySelector('.pokeImagen');
const poekNombre = document.querySelector('.data h2');

// 👀
/*
    Cada vez que una funcion(metodo) devuleva o ejecute una promesa
    se debe ejecutar si o si ejecutar async -> await
*/

form.addEventListener('submit', async e => {
    e.preventDefault();
    const nombrePokemon = pokemonInput.value;
    const pokemon = await obtenerJson(nombrePokemon);
    console.log(pokemon);
    const plantilla = `
        <ul>
            <li><strong>HP:</strong> ${pokemon.stats[0].base_stat}</li>
            <li><strong>Attack:</strong> ${pokemon.stats[1].base_stat}</li>
            <li><strong>Defense:</strong>  ${pokemon.stats[2].base_stat}</li>
            <li><strong>Special-Attack:</strong> ${pokemon.stats[3].base_stat}</li>
            <li><strong>Special-Defense:</strong>  ${pokemon.stats[4].base_stat}</li>
            <li><strong>Speed:</strong>  ${pokemon.stats[5].base_stat}</li>
        </ul>
    `;

    pokeData.innerHTML = plantilla;
    poekImg.innerHTML = `<img src="${pokemon.sprites.front_default}" alt="${pokemon.name}">`;


});