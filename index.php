<?php require("./includes/cabecera.php") ?>


  
  
    <div class="col-12 col-md-8 col-lg-9 align-self-start" id="uno">
      <h3>Últimas entradas del BLOG <span class="badge bg-success">New</span></h3>

      <?php $entradas=verUltimasEntradas($bd);
            if(!empty($entradas)):
            foreach($entradas as $entrada): ?>

      <div class="card cartas">
        <div class="card-body">
          <h4 class="card-title"><?php echo $entrada["titulo"] ?></h4>
          <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $entrada["categoria"]." | ". $entrada["fecha"]?></h6>
          <p class="card-text"><?php echo substr($entrada["descripcion"], 0, 100)."..." ?></p>
          <!--Ajusta la cadena para que sólo aparezcan 100 caracteres, en caso de ser una entrada grande-->
        </div>
      </div>
      <?php endforeach;
            endif;
       ?>
      
      <div class="container text-center">
        <button type="button" class="btn btn-secondary"> Ver Todas las entradas</button>
      </div>




    </div>
    <?php require_once("./includes/formularios.php") ?>

    
<?php require_once("./includes/footer.php") ?>