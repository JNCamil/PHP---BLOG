<?php require_once("./includes/redireccion.php") ?>
<?php require("./includes/cabecera.php") ?>





<div class="col-12 col-md-8 col-lg-9 align-self-start" id="uno">
    <h3>Crear categorías <span class="badge bg-success">New</span></h3>
    <br>
    <div class="card  text-bg-secondary mx-auto w-50">
        <div class="card-header">Crear Categoría</div>

        <div class="card-body ">
            <form action="guardar_categoria.php" method="post">
                <label for="nombre" class="form-label">Nombre de la categoría</label>
                <input type="text" name="nombre" class="form-control"><br>

                <button type="submit" class="btn btn-primary" name="guardar">Guardar</button>
            </form>


        </div>
    </div>
</div>

<?php require_once("./includes/formularios.php") ?>



<?php require_once("./includes/footer.php") ?>