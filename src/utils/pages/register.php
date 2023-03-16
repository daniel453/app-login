<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <div class="container mt-5 border p-5">
    <?php
    if (isset($data["createUser"])) {
      if ($data["createUser"]) {
    ?>
        <div class="alert alert-success" role="alert">
          Se creo el usuario correctamente <a href="../">Volver al home</a>
        </div>
      <?php
      } else {
      ?>
        <div class="alert alert-danger" role="alert">
          Ups... algo salio mal y no se pudo crear el usuario, intente de nuevo.
        </div>
    <?php
      }
    }
    ?>
    <h1>Register</h1>
    <form action="register.store" method="post" class="mt-5">

      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" name="email" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" name="password" id="inputPassword3">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Sign in</button>
      <a href="../" class="btn btn-secondary">Back</a>
    </form>
  </div>
</body>

</html>