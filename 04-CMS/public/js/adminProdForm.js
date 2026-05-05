const addProducto = document.querySelector('.addProducto');
const formulario = document.querySelector('.formulario');
const closeForm = document.querySelectorAll('.closeForm');

addProducto.addEventListener('click', (e) => {
	e.preventDefault();
	formulario.classList.add('active');
});

closeForm.forEach((btn) => {
	btn.addEventListener('click', (e) => {
		e.preventDefault();
		formulario.classList.remove('active');
	});
});

const productosBoxBody = document.querySelector('.contenido__table__body');


const eliminarProductoAsync = async () => {
	try {
		const res = await axios.get("adminApi/apiCaller.php", {
			action: 'deleteProducto'
		})
		console.log(res);

	} catch (error) {
		console.log(error)
	}
}

productosBoxBody.addEventListener('click', (e) => {
	if (e.target.classList.contains('delete-link')) {
		e.preventDefault();
		Swal.fire({
			title: '¿Estas seguro?',
			text: "¡Estas a punto de eliminar un producto!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: '¡Si, Eliminar!',
		}).then(async (result) => {
			if (result.isConfirmed)
				console.log(await eliminarProductoAsync());
				
				// ejecutar axios hacia nuestro backend
				// quitar el elemento borrado del DOM
				Swal.fire({
					title: '¡Eliminado!',
					text: 'Tu archivo ha sido eliminado.',
					icon: 'success',
				});
		});
	}
});
