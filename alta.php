<?php  
	
  $nombre = $_POST['nombre'];
  $aPat = $_POST['aPat'];
  $aMat = $_POST['aMat'];
  $edad = $_POST['edad'];
  $telefono = $_POST['telefono'];
  $correo = $_POST['email'];
  $calle= $_POST['calle'];
  $numero = $_POST['numero'];
  $manzana = $_POST['manzana'];
  $lote = $_POST['lote'];
  $colonia = $_POST['colonia'];
  $municipio = $_POST['municipio'];
  $estado = $_POST['estado'];
  $codigo = $_POST['codigo'];
  $referencias = $_POST['referencias'];

  require("cDatos.php");
  $insert = "INSERT INTO clientes(nombre, apellidoPaterno, apellidoMaterno,edad,tel,correo,calle,numero,manzana,lote,colonia,municipio,estado,codigoPostal,referencias) VALUES('$nombre','$aPat','$aMat','$edad','$telefono','$correo','$calle','$numero','$manzana','$lote','$colonia','$municipio','$estado','$codigo','$referencias')";
   if (mysqli_query($conexion, $insert)) {
      $lastID = mysqli_insert_id($conexion);
      echo "<script type='text/javascript'> alert('¡Registro exitoso! *En la parte de abajo se muestra su ID*'); </script>";
      echo ("<center><h1>El ID del paciente es: " .$lastID. "</h1></center>");
    }else {
    echo "Error bien cabron";
	}

?>