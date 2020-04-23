<?php

    require_once "clases/conexion.php";
    require_once "clases/clientes.php";

    $objCliente = new clientes();

    $objCliente->setNombre($_POST['Nombre']);
    $objCliente->setApellidos($_POST['Apellidos']);
    $objCliente->setCorreo($_POST['Correo']);
    
    $img=$_FILES["Foto"]["name"]; 
	$ruta=$_FILES["Foto"]["tmp_name"]; 
	$destino="img/".$img;
	copy($ruta, $destino);

    $objCliente->setFoto($destino);

    $objCliente->insertar();


?>