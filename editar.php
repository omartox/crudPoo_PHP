<?php
    require_once "clases/conexion.php";
    require_once "clases/clientes.php";
    $id= $_GET['id'];
    $objCliente = new clientes();
    $cliente = $objCliente->mostrarCliente($id);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
</head>
<body>
<form action="proceso.php" method="POST" enctype="multipart/form-data" >
        <input type="hidden" name="id" value="<?php echo $cliente[0];?>">
        <label for="Nombre">Nombre:</label>
        <input type="text" name="Nombre" id="Nombre" value="<?php echo $cliente[1];?>">
        <br>
        <label for="Apellidos">Apellidos:</label>
        <input type="text" name="Apellidos" id="Apellidos" value="<?php echo $cliente[2];?>"> 
        <br>
        <label for="Correo">Correo</label>
        <input type="email" name="Correo" id="Correo" value="<?php echo $cliente[3];?>">
        <br>
        <label for="Foto">Foto</label>
        <br>
        <img src="<?php echo $cliente[4];?>" alt="" width="150">
        <br>
        <input type="file" name="Foto" id="Foto">
        <br>
        <button type="submit" name="editar" value="1">Enviar</button>
    </form>
</body>
</html>