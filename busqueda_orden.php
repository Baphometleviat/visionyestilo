<!DOCTYPE html>
<html>
<head>
	<title>Orden de venta</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/bootstrap-theme.css" />
        <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/general.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.js"/></script>      
</head>
	<body>
		<div class="container-fluid pad_general">
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
        <li class="active"><a href="busqueda_orden.php"><span class="glyphicon glyphicon-file pad_span" aria-hidden="true"></span>Orden de venta</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-list-alt pad_span" aria-hidden="true"></span>Historia clínica</a></li>
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
<div class="row-fluid pad_general">
<!--************************FORM********************-->
    <form  class="form-horizontal" method="POST" action="orden_de_venta.php">
       <div class="form-group">    
          <div class="col-md-2 col-md-offset-5 col-sm-2 col-sm-offset-5 col-xs-4 col-xs-offset-4">
              <input type="text" class="form-control" placeholder="ID" name="idCliente" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <center><button type="submit" class="btn btn-default" name="buscar">Buscar</button></center>
          </div>
        </div>
    </form>
    <?php 
      if(isset($_POST['buscar'])){
        $campo = $_POST['idCliente'];
        if ($campo == "") {
          echo "<script type='text/javascript'> alert('¡Ingresa un ID!'); </script>";
        }
      }
    ?>
<!--************************FORM********************-->
</div>
		</div>
	</body>
</html>