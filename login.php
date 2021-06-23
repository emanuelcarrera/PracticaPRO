<?php
    if(isset($_GET['pagina'])&& $_GET['pagina']==1) {
        include_once 'conexion.php';
    
    $nombre = $_POST['nombre'];
    $clave = $_POST['clave'];

    $consulta = "SELECT * FROM usuarios WHERE nombre='$nombre' AND clave='$clave'";
    $sentencia = $pdo->prepare($consulta); $sentencia->execute(); $filas =

    $sentencia->rowCount(); 
    if($filas>0){ 
      header("location:index.php"); 
    } 
    
    if($filas<=0) { ?>

    <div class="alert alert-danger" role="alert">
      Datos incorrectos
    </div>
<?php }  
    }?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css" />
  </head>
  <body>
    <div id="encabezado">
        <header>
            <div id="contenidoC">
              
              <h3 id="tituloA">SwapArea</h3>
            </div>
            
        </header>
    </div>
    <div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Login</h3>

			</div>
			<div class="card-body">
				<form action="login.php?pagina=1" method="POST" id="formLogin">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre" />
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						  <input type="password" class="form-control" placeholder="Contraseña" id="clave" name="clave" />
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary" style="width: 100%;">Aceptar </button>
						
					</div>
				</form>
			</div>

        </div>
      </div> <br><br>


    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
