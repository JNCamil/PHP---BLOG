<?php require_once("./includes/cabecera.php") ?>
<div class="col-12 col-md-8 col-lg-9 align-self-start" id="uno">
    <!--PASAMOS EL ID QUE MANDAMOS POR LA URL (VARIABLE GLOBAL $_GET)-->
    <?php $categoria_actual = verCategoria($bd, $_GET['id']);
    if (!isset($categoria_actual["id"])) {
        header("Location:index.php");
    }
    ?>

    <h3>Últimas entradas de
        <?= $categoria_actual['nombre'] ?> <span class="badge bg-success">New</span>
    </h3>

    <?php $entradas = verEntradas($bd, null, $_GET['id']);
    if (!empty($entradas)):
        foreach ($entradas as $entrada): ?>

            <div class="card cartas">
                <div class="card-body">
                    <h4 class="card-title">
                    <a href="entrada_individual.php?id=<?= $entrada["id"] ?>" class="text-decoration-none link-dark">
                        <?php echo $entrada["titulo"] ?>
                    </h4>
                    <h6 class="card-subtitle mb-2 text-body-secondary">
                        <?php echo $entrada["categoria"] . " | " . $entrada["fecha"] ?>
                    </h6>
                    <p class="card-text">
                        <?php echo substr($entrada["descripcion"], 0, 100) . "..." ?>
                    </p>
        </a>
                    <!--Ajusta la cadena para que sólo aparezcan 100 caracteres, en caso de ser una entrada grande-->
                </div>
            </div>
    <?php endforeach;
    else:  
    ?>
    <div class='alert alert-danger alerta' role='alert'>No hay entradas en esta categoria</div>
    <?php  endif; ?>




</div>

<?php require_once("./includes/formularios.php") ?>



<?php require_once("./includes/footer.php") ?>