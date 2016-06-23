<!DOCTYPE HTML>
<html>
    <head> 
        <title>Orden de Venta</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/bootstrap-theme.css" />
        <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/general.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/mostrar_divs.js"></script>
    </head>
    <body onload="crear_variables()">
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
<!-- Aquí empieza la página-->
        <!--JUMBOTRON-->
<?php
    if (isset($_POST['buscar'])){#IF ISSET BUSCAR
        $campo = $_POST['idCliente'];
        if(empty($campo)){#IF CAMPO VACÍO
            header("Location: busqueda_orden.php");
        }#IF CAMPO VACÍO
        else{#ELSE CAMPO VACÍO
            require("cDatos.php");
            $reg = mysqli_fetch_array($registro);
            if(!is_null($reg)){#IF REGISTRO                
                $nombre = $reg['nombre'];
                $aPat = $reg['apellidoPaterno']; 
                $aMat = $reg['apellidoMaterno'];
            }#IF REGISTRO
            else{#ELSE REGISTRO
                header("Location: busqueda_orden.php");
            }#ELSE REGISTRO
        }#ELSE CAMPO VACÍO
    }#IF ISSET BUSCAR
?>
        <div class="jumbotron text-center bottomless">
            <h2>Orden de venta</h2>
            <h3><?php echo"$nombre"?>&nbsp;&nbsp;<?php echo"$aPat"?>&nbsp;&nbsp;<?php echo"$aMat"?></h3>
        </div>
<form method="POST" action="venta_cerrada.php">
        <!--JUMBOTRON-->        
        <!--DIV TABLA-->
        <div class="text-center topless table-responsive bottom_space">
            <table>
                <tr>
                    <th>    </th>
                    <th>ESF</th>
                    <th>CYL</th>
                    <th>EJE</th>
                    <th>ADD</th>
                </tr>
                <tr>
                    <td>OD</td>
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
                    <td>OI</td>
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
        <!--DIV TABLA-->
    <!--DIV DE LOS TIPOS DE LENTE-->
    <div class="container-fluid">
        <div class="text-center bottom_space"><h3>Elije un tipo de lente</h3></div>
            <div class="col-md-2 col-md-offset-1 col-sm-offset-1 col-sm-2 col-xs-12">
  			       <input type="radio" name="tipo_lente" id="monofocal" value="Monofocal" onchange="seleccionar_monofocal()">
  			       <label class="pad_left">  				
				        Monofocal    			
  			       </label>
		     </div>
             <div class="col-md-2 col-sm-2 col-xs-12">
			         <input type="radio" name="tipo_lente" id="bifocalFT" value="Bifocal FT" onchange="material_bifocalFT()">
			         <label class="pad_left">  				
    			         Bifocal FT
  			       </label>	
             </div>
             <div class="col-md-2 col-sm-2 col-xs-12">
			         <input type="radio" name="tipo_lente" id="bifocalInv" value="Bifocal Invisible" >
			         <label class="pad_left">
    			         Bifocal Inv
  			           </label>
		      </div>
		      <div class="col-md-2 col-sm-2 col-xs-12">
			         <input type="radio" name="tipo_lente" id="progresivo" value="Progresivo" >
			         <label class="pad_left">  				
    			         Progresivo
  			         </label>
		      </div>
		      <div class="col-md-2 col-sm-2 col-xs-12">
			         <input type="radio" name="tipo_lente" id="contacto" value="Contacto" >
			         <label class="pad_left">
                         Contacto
                     </label>
             </div>
        </div>
        <!--DIV DE LOS TIPOS DE LENTE-->
        <!--DIV DE LOS MATERILES-->
        <div class="container-fluid">
            <div class="text-center bottom_space escondido" id="header_material"><h3>Ahora un material</h3></div>
            <div class="bottom_space escondido" id="materiales_monofocales">
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="radio" name="material" id="cristal" value="Cristal">
                    <label class="pad_left">
                        Cristal
                    </label>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="radio" name="material" id="cr" value="CR">
                    <label class="pad_left">
                        CR
                    </label>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="radio" name="material" id="asferico" value="Asferico">
                    <label class="pad_left">
                        Asférico
                    </label>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="radio" name="material" id="hi_index" value="Hi Index">
                    <label class="pad_left">
                        Hi Index
                    </label>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="radio" name="material" id="poli" value="Policarbonato">
                    <label class="pad_left">
                        Policarbonato
                    </label>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <input type="radio" name="material" id="thin" value="Thin and Lite">
                    <label class="pad_left">
                        Thin and Lite
                    </label>
                </div>
            </div>
        </div>
        <!--DIV DE LOS MATERILES-->
</form>
<!-- Aquí termina la página-->
    </body>
</html>