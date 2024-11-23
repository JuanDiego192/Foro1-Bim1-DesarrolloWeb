<?php 
  require_once 'config/validar_sesion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/styles.css">
  <title>Inicio de Sesión</title>
</head>
<body class="text-center">
<div class="container">
    <div class="row">
      <div class="col-12">
        <p>Bienvenido al sistema</p>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <?php include 'session_paragraph.php'; ?>
      </div>
    </div>
  </div>
</body>
</html>