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

const eliminarProductoAsync = async (id) => {
	try {
		const res = await axios.get('adminApi/apiCaller.php', {
			params: {
				action: 'deleteProducto',
				id
			},
		});
		return res.data;
	} catch (error) {
		console.log(error);
	}
};

productosBoxBody.addEventListener('click', (e) => {
	if (e.target.classList.contains('delete-link')) {
		e.preventDefault();
		const id = e.target.dataset.id;
		Swal.fire({
			title: '¿Estas seguro?',
			text: '¡Estas a punto de eliminar un producto!',
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: '¡Si, Eliminar!',
		}).then(async (result) => {
			if (result.isConfirmed) {
				const res = await eliminarProductoAsync(id);
				console.log(res);
				if(res.msg === 'ok') {
					// quitar el elemento del DOM
					const productoItem = e.target.closest('.contenido__table__body__item');
					// console.log(productoItem);
					productoItem.remove();
					Swal.fire({
						title: '¡Eliminado!',
						text: 'Tu archivo ha sido eliminado.',
						icon: 'success',
					});
				} else {
					Swal.fire({
						title: '¡Error!',
						text: 'No se pudo eliminar el producto.',
						icon: 'error',
					});
				}
			}
		});
	}
});
