<?php require("cabecera.php") ?>

<div class="container-fluid" id="contenedor">
  <div class="row g-0 ">
    <div class="col-12 col-md-8 align-self-start" id="uno">
      <h3>Últimas entradas del BLOG <span class="badge bg-primary">New</span></h3>

      <div class="card cartas">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        </div>
      </div>
      <div class="card cartas">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        </div>
      </div>
      <div class="card cartas">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        </div>
      </div>


    </div>

    <div class="col-12 col-md-4 align-self-end" id="dos">
      <div class="card" id="tres">
        <div class="card-body">
          <form>
            <h4>Identifícate</h4>
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
      </div><br><br>
      <div class="card" id="tres">
        <div class="card-body">
          <form>
            <h4>Regístrate</h4>
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
              <label for="apellidos" class="form-label">Apellidos</label>
              <input type="text" class="form-control" name="apellidos">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">Tu email no será compartido con nadie.</div>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Contraseña</label>
              <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Aceptar términos y condiciones del blog</label>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
          </form>

        </div>
      </div>

    </div>
  </div>
</div>
<footer class="py-3 mt-5" id="pie">
  <div class="container">
    <p>© 2023 Blog VideoJuegos</p>
  </div>
</footer>

</body>

</html>