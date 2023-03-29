


<div class="col-12 col-md-4 col-lg-3 ms-auto" id="dos">



    <?php if (isset($_SESSION["usuario"])): ?>
        <div class="card tres">
            <div class="card-body">
                <h5 class="card-title">
                    <?php echo "Hola " . $_SESSION['usuario']["nombre"] . " " . $_SESSION['usuario']["apellidos"]; ?>
                </h5>

                <p class="card-text">Esperemos que disfrute de su estadía.</p>
                <button type="button" class="btn btn-info m-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path
                            d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                    </svg><a href="cierre.php"
                        class="text-decoration-none link-dark">Crear entradas</button>
                <button type="button" class="btn btn-success m-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path
                            d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                    </svg><a href="categoria.php"
                        class="text-decoration-none link-dark">Crear categoría</button>
                <button type="button" class="btn btn-warning m-2"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path
                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                    </svg><a href="cierre.php"
                        class="text-decoration-none link-dark">Mis datos</button><br><br><br><br>

                <button type="button" class="btn btn-danger"><a href="cierre.php"
                        class="text-decoration-none link-light">Cerrar sesión</a></button>
            </div>
        </div>
    <?php endif; ?><br><br>

    <?php if(!isset($_SESSION["usuario"])): ?>

    <div class="card tres">

        <div class="card-body">

            <form action="login.php" method="post">
                <h5>Identifícate</h5>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Tu email no será compartido con nadie.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="password">
                </div>

                <button type="submit" class="btn btn-primary" name="login">Entrar</button>
                <?php if (isset($_SESSION["errores"]["login"])): ?>
                    <div class='alert alert-danger alerta' role='alert'>
                        <?php echo $_SESSION["errores"]["login"] ?>
                    </div>
                <?php endif; ?>

            </form>

        </div>
    </div>
    <br><br>
    <div class="card tres">
        <div class="card-body">
            <form action="registro.php" method="post">

                <h5>Regístrate</h5>
                <?php if (isset($_SESSION["completado"])): ?>
                    <div class='alert alert-success alerta' role='alert'>
                        <?php echo $_SESSION['completado'] ?>
                    </div>

                <?php elseif (isset($_SESSION["errores"]['general'])): ?>
                    <div class='alert alert-success alerta' role='alert'>
                        <?php echo ($_SESSION['errores']['general']) ?>
                    </div>
                <?php endif; ?>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre">
                    <?php echo isset($_SESSION["errores"]) ? mostrarError($_SESSION["errores"], "nombre") : ""; ?>
                </div>
                <div class="mb-3">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" name="apellidos">
                    <?php echo isset($_SESSION["errores"]) ? mostrarError($_SESSION["errores"], "apellidos") : ""; ?>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Tu email no será compartido con nadie.</div>
                    <?php echo isset($_SESSION["errores"]) ? mostrarError($_SESSION["errores"], "email") : ""; ?>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="password">
                    <?php echo isset($_SESSION["errores"]) ? mostrarError($_SESSION["errores"], "password") : ""; ?>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="terminos">
                    <label class="form-check-label" for="exampleCheck1">Aceptar términos y condiciones del blog</label>
                    <?php echo isset($_SESSION["errores"]) ? mostrarError($_SESSION["errores"], "terminos") : ""; ?>
                </div>
                <button type="submit" class="btn btn-primary" name="registro">Registrar</button>
            </form>
            <?php borrarErrores(); ?>
        </div>
    </div>
    <?php endif; ?>
    
</div>