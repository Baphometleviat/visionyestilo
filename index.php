<!DOCTYPE html>
<html>
	<head>
		<title>Vision y Estilo</title>
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
        <li class="active"><a href="registro_clientes.php "><span class="glyphicon glyphicon-book pad_span" aria-hidden="true"></span>Registro de clientes</a></li>
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
<!-- Toda la página-->
<div class="row-fluid pad_general">  
     <center><h3>Datos generales</h3><small>Los campos con (*) son obligatorios</small></center>
     <hr>
  <form class="form-horizontal" method="POST">
      <div class="form-group">
          <label for="nombre" class="col-md-1 col-md-offset-1 control-label">Nombre(s)*</label>
          <div class="col-md-2">
            <input type="text" class="form-control" id="nombre" placeholder="Nombre" required name="nombre">
          </div>
          <label for="aPat" class="col-md-1 control-label"></label>
          <div class="col-md-2">
            <input type="text" class="form-control" id="aPat" placeholder="Apellido paterno" required name="aPat">
          </div>
          <label for="aMat" class="col-md-1 control-label"></label>
          <div class="col-md-2">
            <input type="text" class="form-control" id="aMat" placeholder="Apellido materno" name="aMat">
          </div>          
      </div>        
      <div class="form-group">
          <label for="edad" class="col-md-1 col-md-offset-1 control-label">Edad*</label>
          <div class="col-md-2">
            <input type="text" class="form-control" id="edad" placeholder="Edad" maxlength="2" required name="edad">
          </div>          
          <label for="telefono" class="col-md-1 control-label">Telefono</label>
          <div class="col-md-2">
            <input type="text" class="form-control" id="telefono" placeholder="Telefono" name="telefono">
          </div>
          <label for="email" class="col-md-1 control-label">E-mail</label>
          <div class="col-md-2" >
            <input type="email" class="form-control" id="email" placeholder="E-mail" name="email">
          </div>
      </div>     
      <div class="form-group">
          <label for="calle" class="col-md-offset-1 col-md-1 control-label">Calle*</label>
          <div class="col-md-2">
            <input type="text" class="form-control" id="calle" placeholder="calle" required name="calle">
          </div>
          <label for="numero" class="col-md-1 control-label">Numero</label>
          <div class="col-md-2">
            <input type="text" class="form-control" id="numero" placeholder="#" name="numero">
          </div>
          <label for="manzana" class="col-md-1 control-label">Manzana</label>
          <div class="col-md-2">
            <input type="text" class="form-control" id="manzana" placeholder="Mz" name="manzana">
          </div>
      </div>
      <div class="form-group">
          <label for="lote" class="col-md-offset-1 col-md-1 control-label">Lote</label>
          <div class="col-md-2">
            <input type="text" class="form-control" id="lote" placeholder="Lote" name="lote">
          </div>
          <label for="colonia" class="col-md-1 control-label">Colonia*</label>
          <div class="col-md-2">
            <input type="text" class="form-control" id="colonia" placeholder="Colonia" required name="colonia">
          </div>
          <label for="municipio" class="col-md-1 control-label">Municipio*</label>
          <div class="col-md-2">
            <input type="text" class="form-control" id="municipio" placeholder="Municipio" required name="municipio">
          </div>
      </div>
      <div class="form-group">
          <label for="estado" class="col-md-offset-1 col-md-1 control-label">Estado*</label>
          <div class="col-md-2">
            <input type="text" class="form-control" id="estado" placeholder="Estado" required name="estado">
          </div>          
          <label for="codigo" class="col-md-1 col-md-offset-3 control-label">CP*</label>
          <div class="col-md-2">
            <input type="text" class="form-control" id="codigo" placeholder="CP" required name="codigo">
          </div>          
      </div>
      <div class="form-group">
         <label for="referencias" class="col-md-offset-1 col-md-1 control-label">Referencias</label>
         <div class="col-md-2">
            <textarea class="form-control" id="referencias" placeholder="Referencias" rows="10" name="referencias"></textarea>
          </div>
      </div>
      <center><button type="submit" class ="btn btn-success" name="submit">Aceptar</button>&nbsp;&nbsp;&nbsp;
      <button type="reset" class="btn btn-danger">Cancelar</button></center>
  </form>
  <?php
      if (isset($_POST['submit'])) {
        require("alta.php");
      }
   ?>
</div>    
</div>
<!-- Termina la página-->
	</body>
</html> 