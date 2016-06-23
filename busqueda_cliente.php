<!DOCTYPE html>
<html>
<head>
	<title>Busqueda</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/bootstrap-theme.css" />
        <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/general.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="js/bootstrap.js"/></script>      
</head>
<body>
	<div class="container-fluid">
		<!-- Empiezaael menú-->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<!-- Esta es la marca y el ícono de hamburguesa en el responsivo ¡¡NO LO QUITES PENDEJIN!! -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Desplegar navegación</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand">Vision y estilo</a>
    </div>
<!-- Aquí va lo que se desplegará en el responsive -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav">
        <li><a href="index.php "><span class="glyphicon glyphicon-book pad_span" aria-hidden="true"></span>Registro de clientes</a></li>
        <li><a href="busqueda_orden.php"><span class="glyphicon glyphicon-file pad_span" aria-hidden="true"></span>Orden de venta</a></li>
        <li><a href=" "><span class="glyphicon glyphicon-list-alt pad_span" aria-hidden="true"></span>Historia clínica</a></li>
      </ul>
          <ul class="nav navbar-nav navbar-right pad_span">
        <form class="navbar-form" role="search" action="busqueda_cliente.php" method="POST">
          <div class="form-group ">
            <input type="text" class="form-control" placeholder="Ingresa el nombre" name="nombreCliente" required>
          </div>
            <button type="submit" class="btn btn-info">Buscar</button>
        </form>      
    </ul>
    </div>    
  </nav>
<!-- Aquí termina el menú-->
<!--Empieza la página en general-->
	<div class="row-fluid pad_general">
		<?php  
			$nombre = $_POST['nombreCliente'];
			if ($nombre == "") { //IF ISSET
				echo "<h1><center>Ingrese un nombre</center></h1>";				
			}//IF ISSET
			else{
				require("cDatos.php");
				$result = mysqli_query($conexion, "SELECT * FROM clientes WHERE nombre LIKE '%$nombre%' ORDER BY idCliente");
				if ($row = mysqli_fetch_array($result)) {
					echo "<table>";
					echo "<tr>";
						while ($field = mysqli_fetch_field($result)) {
							echo "<td>$field->name</td>";
						}
						echo "</tr>";
						do{
							echo "<tr>";
							echo "<td>".$row['idCliente']."</td>";
							echo "<td>".$row['nombre']."</td>";
							echo "<td>".$row['apellidoPaterno']."</td>";
							echo "<td>".$row['apellidoMaterno']."</td>";
							echo "<td>".$row['edad']."</td>";
							echo "<td>".$row['tel']."</td>";
							echo "<td>".$row['correo']."</td>";
							echo "<td>".$row['calle']."</td>";
							echo "<td>".$row['numero']."</td>";
							echo "<td>".$row['manzana']."</td>";
							echo "<td>".$row['lote']."</td>";
							echo "<td>".$row['colonia']."</td>";
							echo "<td>".$row['municipio']."</td>";
							echo "<td>".$row['estado']."</td>";
							echo "<td>".$row['codigoPostal']."</td>";
							echo "<td>".$row['referencias']."</td>";
							echo "</tr>";
						}	while ($row = mysqli_fetch_array($result));
							echo "</table>";
						}
						 else{
							echo "<h1><center>Ira men deja te etsplico no hay naiden que se llame así</center></h1>";
						}				
			}
		?>
	</div>
	</div>
</body>
</html>