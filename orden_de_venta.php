<!DOCTYPE html>
<?php 
      if (isset($_POST['buscar'])) 
      {#IF ISSET
         $campo = $_POST['idCliente'];
         if ($campo == "") 
         {#IF CAMPO VACÍO
           header ("Location: busqueda_orden.php");
         }#IF CAMPO VACÍO
         else
         {#ELSE CAMPO VACÍO         	
            require("cDatos.php");
            $registro = mysqli_query($conexion, "SELECT * FROM clientes WHERE idCliente = '$_POST[idCliente]'");
            $reg  = mysqli_fetch_array($registro);
			if (!is_null($reg)) 
			{#IF REGISTRO
				  $id = $reg['idCliente'];
				  $nombre = $reg['nombre'];
				  $aPat = $reg['apellidoPaterno'];
				  $aMat = $reg['apellidoMaterno'];
  				$edad = $reg['edad'];
  				$telefono = $reg['tel'];
  				$correo = $reg['correo'];
  				$calle= $reg['calle'];
  				$numero = $reg['numero'];
  				$manzana = $reg['manzana'];
  				$lote = $reg['lote'];
  				$colonia = $reg['colonia'];
  				$municipio = $reg['municipio'];
  				$estado = $reg['estado'];
  				$codigo = $reg['codigoPostal'];
  				$referencias = $reg['referencias'];
			}#IF REGISTRO 
			else
			{
				header ("Location: busqueda_orden.php");
			}            
         }#ELSE CAMPO VACÍO
       } #IF ISSET
?>
<script>
</script>
<html>
<head>
	<title>Orden De Venta</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/bootstrap-theme.css" />
        <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/general.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/validar_botones.js"></script>      
</head>
	<body onload="crear_variables()">
		<div class="container-fluid pag_general">
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
        <li><a href="historia_clinica.php"><span class="glyphicon glyphicon-list-alt pad_span" aria-hidden="true"></span>Historia clínica</a></li>
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
	<div class="page-header">
  		<center><h2>Orden de venta</h2></center>
	</div>
	<div class="row">
	<h3>
		<div class="col-md-2"><font color="red">ID:</font>&nbsp;&nbsp;&nbsp;<?php echo "$id";?></div>
		<div class="col-md-5"><font color="red">Nombre:</font>&nbsp;&nbsp;<?php echo "$nombre";?> &nbsp;&nbsp;&nbsp; <?php echo "$aPat";?> &nbsp;&nbsp;&nbsp; <?php echo "$aMat";?></div>		
	</h3>	
	</div>
	<hr>
<!--********************FORM CHINGON GENERAL*************************-->
<form method="POST" action="venta_cerrada.php">
	<div class="row-fluid">
		<table width = "610px">
			<tr>
				<th>&nbsp;&nbsp;&nbsp;</th>
				<th><font color="red">ESF</font></th>
				<th><font color="red">CYL</font></th>
				<th><font color="red">EJE</font></th>
				<th><font color="red">ADD</font></th>
			</tr>
			<tr>
				<td><font color="red">OD</font></td>
				<td>
                    <select name = 'esf_der'>
                       	<script>
                           	for (i = -25; i <= 25; i = i + .25)
                           	{
                               	//document.write("<option value>Hola</option>");
                               	document.write("<option value = '" + i + "' name = 'esf_der'>" + i + "</option>");
                           	}   
                      	</script>
                    </select>
                </td>
                <td>
                    <select name = 'cyl_der'>
                        <script>
                            for(i = -15; i <= 0; i = i + .25)
                            {
                                document.write("<option value = '" + i + "' name = 'cyl_der'>" + i + "</option>");
                            }
                        </script>
                    </select>
                </td>
                <td>
                    <select name = 'eje_der'>
                        <script>
                            for(i = 0; i <= 180; i = i + 5)
                            {
                                document.write("<option value = '" + i + "' name = 'eje_der'>" + i + "°</option>");
                            }
                        </script>
                    </select>
                </td>
                <td>
                    <select name = 'add_der'>
                        <script>
                            for(i = 1; i <= 3.50; i = i + .25)
                            {
                                document.write("<option value = '" + i + "' name = 'add_der'> +" + i + "</option>");
                            }
                        </script>
                    </select>
                </td>
			</tr>
			<tr>
				<td><font color="red">OI</font></td>
				<td>
                    <select name = 'esf_izq'>
                       	<script>
                           	for (i = -25; i <= 25; i = i + .25)
                           	{                               	
                               	document.write("<option value = '" + i + "' name = 'esf_izq'>" + i + "</option>");
                           	}   
                      	</script>
                    </select>
                </td>
                <td>
                    <select name = 'cyl_izq'>
                        <script>
                            for(i = -15; i <= 0; i = i + .25)
                            {
                                document.write("<option value = '" + i + "' name = 'cyl_izq'>" + i + "</option>");
                            }
                        </script>
                    </select>
                </td>
                <td>
                    <select name = 'eje_izq'>
                        <script>
                            for(i = 0; i <= 180; i = i + 5)
                            {
                                document.write("<option value = '" + i + "' name = 'eje_izq'>" + i + "°</option>");
                            }
                        </script>
                    </select>
                </td>
                <td>
                    <select name = 'add_izq'>
                        <script>
                            for(i = 1; i <= 3.50; i = i + .25)
                            {
                                document.write("<option value = '" + i + "' name = 'add_izq'> +" + i + "</option>");
                            }
                        </script>
                    </select>
                </td>
			</tr>
		</table>
	</div>
	<hr>
	<div class="row-fluid">
		<div class="page-header">
  			<center><h4>Tipo de lente</h4></center>
		</div>
		<div class="col-md-2 col-md-offset-1 col-sm-4 col-xs-12">
  			<input type="radio" name="tipo_lente" id="monofocal" value="Monofocal" onchange="habilitar_material(this.id);">
  			<label class="pad_left">  				
				Monofocal    			
  			</label>
		</div>
		<div class="col-md-2 col-sm-4 col-xs-12">
			<input type="radio" name="tipo_lente" id="bifocalFT" value="Bifocal FT"  onchange="habilitar_material(this.id);">
			<label class="pad_left">  				
    			Bifocal FT
  			</label>	
		</div>
		<div class="col-md-2 col-sm-4 col-xs-12">
			<input type="radio" name="tipo_lente" id="bifocalInv" value="Bifocal Invisible" onchange="habilitar_material(this.id);">
			<label class="pad_left">
    			Bifocal Inv
  			</label>
		</div>
		<div class="col-md-2 col-sm-4 col-xs-12">
			<input type="radio" name="tipo_lente" id="progresivo" value="Progresivo" onchange="habilitar_material(this.id);">
			<label class="pad_left">  				
    			Progresivo
  			</label>
		</div>
		<div class="col-md-2 col-sm-4 col-xs-12">
			<input type="radio" name="tipo_lente" id="contacto" value="Contacto" onchange="habilitar_material(this.id);">
			<label class="pad_left">
    			Contacto
  			</label>
		</div>
	</div>
	<br><br>
	
	<div class="row">
		<div class="page-header">
  			<center><h4>Material</h4></center>
		</div>
		<div class="col-md-2 col-sm-4 col-xs-12">
			<input type="radio" name="material" id="cristal" value="Cristal" disabled onchange="habilitar_tratamiento(this.id);">
			<label class="pad_left">
				Cristal
			</label>
		</div>
		<div class="col-md-2 col-sm-4 col-xs-12">
			<input type="radio" name="material" id="cr" value="CR" disabled onchange="habilitar_tratamiento(this.id);">
			<label class="pad_left">
			CR
			</label>
		</div>
		<div class="col-md-2 col-sm-4 col-xs-12">
			<input type="radio" name="material" id="asferico" value="Asferico" disabled onchange="habilitar_tratamiento(this.id);">
			<label class="pad_left">
				Asferico
			</label>
		</div>
		<div class="col-md-2 col-sm-4 col-xs-12">
			<input type="radio" name="material" id="hi_index" value="Hi Index" disabled onchange="habilitar_tratamiento(this.id);">
			<label class="pad_left">
				Hi Index
			</label>
		</div>
		<div class="col-md-2 col-sm-4 col-xs-12">
			<input type="radio" name="material" id="poli" value="Policarbonato" disabled onchange="habilitar_tratamiento(this.id);">
			<label class="pad_left">
				Policarbonato
			</label>
		</div>
		<div class="col-md-2 col-sm-4 col-xs-12">
			<input type="radio" name="material" id="thin_and_lite" value="Thin and Lite" disabled onchange="habilitar_tratamiento(this.id);">
			<label class="pad_left">  				
    			Thin & Lite 
  			</label>
		</div>
    <!--MATERIALES DEL LENTE DE CONTACTO-->
        <div class="col-md-2 col-sm-4 col-xs-12">
      <input type="radio" name="material" id="baush" value="Baush and Lomb" disabled onchange="habilitar_tratamiento(this.id);">
      <label class="pad_left">
        Baush & Lomb
      </label>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-12">
      <input type="radio" name="material" id="cooper" value="Cooper Vision" disabled onchange="habilitar_tratamiento(this.id);">
      <label class="pad_left">
      Cooper Vision
      </label>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-12">
      <input type="radio" name="material" id="jhonson" value="Jhonson and Jhonson" disabled onchange="habilitar_tratamiento(this.id);">
      <label class="pad_left">
        Jhonson
      </label>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-12">
      <input type="radio" name="material" id="ciba" value="Ciba Vision" disabled onchange="habilitar_tratamiento(this.id);">
      <label class="pad_left">
        Ciba Vision
      </label>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-12">
      <input type="radio" name="material" id="fresh" value="Fresh Look" disabled onchange="habilitar_tratamiento(this.id);">
      <label class="pad_left">
        Fresh Look
      </label>
    </div>
	</div>
	<br><br>	
	<div class="row">
		<div class="page-header">
  			<center><h4>Tratamiento</h4></center>
		</div>
		<div class="col-md-2 col-sm-4 col-xs-12">
			<input type="radio" name="tratamiento" id="white" value="White" disabled>
			<label class="pad_left">	
    			White
  			</label>
		</div>
		<div class="col-md-2 col-sm-4 col-xs-12">
  			<input type="radio" name="tratamiento" id="anti" value="Antireflejante" disabled>		
			<label class="pad_left">
    			Antireflejante
  			</label>	
		</div>
		<div class="col-md-2 col-sm-4 col-xs-12">
			<input type="radio" name="tratamiento" id="fotocromatico" value="Fotocromatico" disabled>
			<label class="pad_left">  				
    			Fotocromático
  			</label>
		</div>
		<div class="col-md-2 col-sm-4 col-xs-12">
			<input type="radio" name="tratamiento" id="teflon" value="Teflon" disabled>
			<label class="pad_left">  				
    			Teflón
  			</label>	
		</div>
		<div class="col-md-2 col-sm-4 col-xs-12">
			<input type="radio" name="tratamiento" id="transition" value="Transition" disabled>
			<label class="pad_left">  				
    			Transition
  			</label>
		</div>
		<div class="col-md-2 col-sm-4 col-xs-12">
			<input type="radio" name="tratamiento" id="fotofusion" value="Fotofusion" disabled>
			<label class="pad_left">
    			Fotofusion
  			</label>
		</div>
		<div class="col-md-2 col-sm-4 col-xs-12">
			<input type="radio" name="tratamiento" id="polarizado" value="Polarizado" disabled>
			<label class="pad_left">
    			Polarizado
  			</label>
		</div>
		<div class="col-md-2 col-sm-4 col-xs-12">
			<input type="radio" name="tratamiento" id="crizaluv" value="Crizal UV" disabled>
			<label class="pad_left">
    			Crizal UV
  			</label>
		</div>
		<div class="col-md-2 col-sm-4 col-xs-12">
			<select id="tinta" name="tratamiento" disabled>
				<option></option>
				<option value="Cafe">Café</option>
				<option value="Rosa">Rosa</option>
				<option value="Gris">Gris</option>
			</select>
        <label class="pad_span">
          Entintado
        </label>
		</div>
    <div class="col-md-2 col-sm-4 col-xs-12">
        <input type="radio" name="tratamiento" id="esferico" value="Esferico" disabled>   
      <label class="pad_left">
          Esférico
        </label>  
    </div>
    <div class="col-md-2 col-sm-4 col-xs-12">
      <input type="radio" name="tratamiento" id="torico" value="Torico" disabled>
      <label class="pad_left">          
          Torico
        </label>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-12">
      <input type="radio" name="tratamiento" id="color" value="Color" disabled>
      <label class="pad_left">          
          Color
        </label>  
    </div>
	</div>			
	<div class="row pad_top">
    <center><button type="submit" class ="btn btn-success">Aceptar</button>&nbsp;&nbsp;&nbsp;
      <button type="reset" class="btn btn-danger" onclick="desactivar_todo();">Cancelar</button></center>
  </div>
	</form>	
</div>
		</div>
	</body>
</html>