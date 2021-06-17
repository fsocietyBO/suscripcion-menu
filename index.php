<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Suscripción al menú</title>
</head>

<body>
  <h1 class="p-5 text-center bg-light">Formulario de Suscripción de Marcello's Pizzeria</h1>

  <div class="container">
    <?php
      if(isset($_GET["suscrito"])){
        echo('<div class="alert alert-success" role="alert">
          Te suscribiste correctamente!
        </div>');
      }
    ?>
    <form action="suscribirse.php" method="POST">
      <div class="form-outline mb-4">
        <label class="form-label" for="nombre">Nombre Completo</label>
        <input type="text" id="nombre" class="form-control" name="nombre" placeholder="Juanito Perez" />
      </div>

      <div class="form-outline mb-4">
        <label class="form-label" for="email">Email</label>
        <input type="email" id="email" class="form-control" name="email" placeholder="ejemplo@ejemplo.com" />
      </div>

      <div class="form-outline mb-4">
        <label class="form-label" for="email">Mensaje (opcional)</label>
        <textarea class="form-control" name="mensaje" id="" rows="4"></textarea>
      </div>

      <button type="submit" class="btn btn-primary btn-block mb-4">Suscribirse</button>
    </form>

  </div>
</body>

</html>
