<?php require_once("./includes/cabecera.php") ?>
<div class="col-12 col-md-8 col-lg-9 align-self-start" id="uno">
    <!--PASAMOS EL ID QUE MANDAMOS POR LA URL (VARIABLE GLOBAL $_GET)-->
    <?php $entrada_actual = verEntrada_individual($bd, $_GET['id']);
    if (!isset($entrada_actual["id"])) {
        header("Location:index.php");
    }
    ?>

    <h3>
        <?= $entrada_actual['titulo'] ?> <span class="badge bg-success">Entrada completa</span>
    </h3>



    <div class="card cartas">
        <div class="card-body">
            <h4 class="card-title">
                <?= $entrada_actual["titulo"] ?>
            </h4>
            <a href="categoria.php?id=<?= $entrada_actual["categoria_id"] ?>" class="text-decoration-none link-light">
                <h6 class="card-subtitle mb-2 text-body-secondary">
                    <?= $entrada_actual["categoria"] ?>
                </h6>
            </a>
            <p class="card-text">
                <?= $entrada_actual["descripcion"] ?>
            </p><br><br>
            <footer class="blockquote-footer">
                <?= $entrada_actual["fecha"].' | '. $entrada_actual['usuario']?>
            </footer>

        </div>
    </div>
<?php if(isset($_SESSION['usuario']) && $_SESSION['usuario']['id'] == $entrada_actual['usuario_id']): ?>
<button type="button" class="btn btn-warning"><a href="editar_entrada.php" class="text-decoration-none link-light">Editar entrada</a></button>

<button type="button" class="btn btn-danger"><a href="borrar_entrada.php" class="text-decoration-none link-light">Borrar entrada</a></button>
<?php endif; ?>   

</div>

<?php require_once("./includes/formularios.php") ?>



<?php require_once("./includes/footer.php") ?>