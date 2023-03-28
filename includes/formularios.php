<?php require_once("./includes/help.php") ?>
<div class="col-12 col-md-4 col-lg-3 align-self-end " id="dos">
    <div class="card tres">
        <div class="card-body">
            <form>
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

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <br><br>
    <div class="card tres">
        <div class="card-body">
            <form action="registro.php" method="post">
               
                <h5>Regístrate</h5>
                <?php  if(isset($_SESSION["completado"])):?>
                   <div class='alert alert-success alerta' role='alert'>
                   <?php  echo $_SESSION['completado'] ?> 
                   </div>
                
                <?php elseif(isset($_SESSION["errores"]['general'])): ?>
                 <div class='alert alert-success alerta' role='alert'>
                   <?php  echo ($_SESSION['errores']['general'])?>
                 </div>
                <?php endif; ?> 
                
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre">
                    <?php echo isset($_SESSION["errores"])?mostrarError($_SESSION["errores"], "nombre"):""; ?>
                </div>
                <div class="mb-3">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" name="apellidos">
                    <?php echo isset($_SESSION["errores"])?mostrarError($_SESSION["errores"], "apellidos"):""; ?>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Tu email no será compartido con nadie.</div>
                    <?php echo isset($_SESSION["errores"])?mostrarError($_SESSION["errores"], "email"):""; ?>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="password">
                    <?php echo isset($_SESSION["errores"])?mostrarError($_SESSION["errores"], "password"):""; ?>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="terminos">
                    <label class="form-check-label" for="exampleCheck1">Aceptar términos y condiciones del blog</label>
                    <?php echo isset($_SESSION["errores"])?mostrarError($_SESSION["errores"], "terminos"):""; ?>
                </div>
                <button type="submit" class="btn btn-primary" name="registro">Registrar</button>
            </form>
            <?php borrarErrores(); ?>
        </div>
    </div>
</div>