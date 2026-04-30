<div class="contenido">
    <div class="contenido__header">
        <div class="contenido__header__titulos">
            <h1>Productos</h1>
            <p>6 productos</p>
        </div>
        <a href="#" class="btn btn--secondary addProducto">
            <i class="fa-solid fa-plus mr-1"></i> Agregar Producto
        </a>
    </div>
    <div class="contenido__prodSearch">
        <div class="contenido__prodSearch__box">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Buscar producto...">
        </div>
    </div>
    <div class="contenido__table mt-4">
        <div class="contenido__table__header">
            <div>Imagen</div>
            <div>Nombre</div>
            <div>Categoría</div>
            <div>Precio</div>
            <div>Stock</div>
            <div>Estado</div>
            <div>Acciones</div>
        </div>
        <div class="contenido__table__body">
            <?php getProductos(); ?>
        </div>
    </div>
</div>
<div class="formulario <?php echo isset($_GET['edit']) ? 'active' : ''; ?>">
    <div class="formulario__box">
        <h2>Nuevo Producto</h2>
        <div class="closeForm close">&times;</div>
        <?php showSwalMensaje(); ?>
        <?php isset($_GET['edit']) ? $prod = getProductoEdit() : postProducto(); ?>
        <form class="formulario__form mt-3" method="POST" enctype="multipart/form-data">
            <div class="formGroup">
                <label for="nombre">Nombre</label>
                <input 
                    type="text" 
                    id="nombre" 
                    name="nombre"
                    value="<?php echo isset($_GET['edit']) ? $prod['nombre'] : ''; ?>"
                >
            </div>
            <div class="formGroup">
                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion" rows="3"><?php echo isset($_GET['edit']) ? $prod['descripcion'] : ''; ?></textarea>
            </div>
            <div class="rowGroup">
                <div class="formGroup">
                    <label for="precio">Precio</label>
                    <input 
                        type="number" 
                        id="precio" 
                        name="precio" 
                        step="0.01" 
                        value="<?php echo isset($_GET['edit']) ? $prod['precio'] : ''; ?>"
                    >
                </div>
                <div class="formGroup">
                    <label for="stock">Categoria</label>
                    <select name="catId" id="categoria">
                        <option value="" selected disabled>Seleccionar categoría</option>
                        <?php getSelectCategorias((int)$prod['catId'], isset($_GET['edit'])); ?>
                    </select>
                </div>
            </div>
            <div class="rowGroup">
                <div class="formGroup">
                    <label for="stock">Stock</label>
                    <input 
                        type="number" 
                        id="stock" 
                        name="stock" 
                        value="<?php echo isset($_GET['edit']) ? $prod['stock'] : ''; ?>"
                    >
                </div>
                <div class="formGroup">
                    <label for="destacado">Imagen</label>
                    <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png, image/webp">
                </div>
            </div>
            <div class="checkBoxGroup">
                <h3>Tallas</h3>
                <div class="checkBoxGroup__box">
                    <?php isset($_GET['edit']) ? getCheckTallasEdit($prod['id']) : getCheckTallas(); ?>     
                </div>
            </div>
            <div class="checkBoxGroup mt-2">
                <h3>Colores</h3>
                <div class="checkBoxGroup__box">
                    <?php getCheckColores(); ?>
                </div>
            </div>
            <div class="rowGroup mt-2">
                <div class="checkBoxActive">
                    <input type="checkbox" name="destacado" id="destacado">
                    <label for="destacado"> 
                    </label>
                    <h3>Producto Destacado</h3>
                </div>
                <div class="checkBoxActive">
                    <input type="checkbox" name="activo" id="activo">
                    <label for="activo"> 
                    </label>
                    <h3>Activo</h3>
                </div>
            </div>
            <div class="formGroup d-flex justify-content-end flex-row mt-3">
                <a href="" class="btn btn--primary mr-2 closeProd">Cancelar</a>
                <button type="submit" class="btn btn--secondary">Crear Producto</button>
            </div>
        </form>
    </div>
</div>