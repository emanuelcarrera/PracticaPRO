<?php
include_once 'conexion.php';


$sql = 'SELECT imagen FROM movies';
$sentencia = $pdo->prepare($sql);
$sentencia->execute();

$resultado = $sentencia->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css" />
<body>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 style="text-align: center;" class="display-4">Home SwapArea</h1>
            </div>
          </div>
        </div>
    </div>


</body>
</html>