<?php require_once("./includes/redireccion.php") ?>
<?php require("./includes/cabecera.php") ?>


<div class="col-12 col-md-8 col-lg-9 align-self-start" id="uno">
    <h3>Modificar mis datos <span class="badge bg-warning"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                height="30" fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
                <path
                    d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5ZM9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8Zm1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z" />
                <path
                    d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12V4Z" />
            </svg></span></h3>
    <div class="card  text-bg-secondary mx-auto w-50">
        <div class="card-header">Mis datos</div>
        <?php if (isset($_SESSION["completado"])): ?>
            <div class='alert alert-success alerta' role='alert'>
                <?php echo $_SESSION['completado'] ?>
            </div>

        <?php elseif (isset($_SESSION["errores"]['general'])): ?>
            <div class='alert alert-danger alerta' role='alert'>
                <?php echo ($_SESSION['errores']['general']) ?>
            </div>
        <?php endif; ?>

        <div class="card-body ">
            <form action="actualizar_usuario.php" method="post">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre"
                    value="<?= $_SESSION["usuario"]["nombre"]; ?>"><br>
                <?php echo isset($_SESSION["errores"]) ? mostrarError($_SESSION["errores"], "nombre") : ""; ?>
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellidos"
                    value="<?= $_SESSION["usuario"]["apellidos"]; ?>"><br>
                <?php echo isset($_SESSION["errores"]) ? mostrarError($_SESSION["errores"], "apellidos") : ""; ?>
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="<?= $_SESSION["usuario"]["email"]; ?>"><br>
                <?php echo isset($_SESSION["errores"]) ? mostrarError($_SESSION["errores"], "email") : ""; ?>
                <button type="submit" class="btn btn-primary" name="modificar">Modificar</button>
            </form>
            <?php borrarErrores(); ?>
        </div>
    </div>
</div>


<?php require_once("./includes/formularios.php") ?>
<?php require_once("./includes/footer.php") ?>