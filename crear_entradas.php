<?php require_once("./includes/redireccion.php") ?>
<?php require("./includes/cabecera.php") ?>


<div class="col-12 col-md-8 col-lg-9 align-self-start" id="uno">
    <h3>Crear entradas <span class="badge bg-success">New</span></h3>
    <br>
    <div class="card  text-bg-secondary mx-auto w-50">
        <div class="card-header">Crear entrada</div>

        <div class="card-body ">
            <form action="guardar_entradas.php" method="post">
                <label for="titulo" class="form-label">Título:</label>
                <input type="text" name="titulo" class="form-control"><br>
                <?php echo isset($_SESSION["errores_entrada"]) ? mostrarError($_SESSION["errores_entrada"], "titulo") : ""; ?>
                <label for="descripcion" class="form-label">Descripción:</label>
                <textarea name="descripcion" class="form-control"></textarea><br>
                <?php echo isset($_SESSION["errores_entrada"]) ? mostrarError($_SESSION["errores_entrada"], "descripcion") : ""; ?>
                <label for="categoria" class="form-label">Categoría: </label>
                <select name="categoria">
                    <?php $categorias = verCategorias($bd);
                    if (isset($categorias)):
                        foreach ($categorias as $categoria): ?>
                            <option value="<?php echo $categoria["id"] ?>">
                            <?php echo $categoria["nombre"] ?>
                            </option>

                        <?php endforeach;
                    endif; ?>
                </select>
                <br>
                <?php echo isset($_SESSION["errores_entrada"]) ? mostrarError($_SESSION["errores_entrada"], "categoria") : ""; ?>
                <button type="submit" class="btn btn-primary" name="guardar">Guardar</button>
            </form>
            <?php borrarErrores(); ?>

        </div>
    </div>
</div>

<?php require_once("./includes/formularios.php") ?>



<?php require_once("./includes/footer.php") ?>