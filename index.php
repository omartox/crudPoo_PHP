<?php
    require_once "clases/conexion.php";
    require_once "clases/clientes.php";

    $objCliente = new clientes();
    $array_clientes = $objCliente->mostrar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud_Poo</title>
</head>
<body>
    <form action="proceso.php" method="POST" enctype="multipart/form-data" >
        <label for="Nombre">Nombre:</label>
        <input type="text" name="Nombre" id="Nombre">
        <br>
        <label for="Apellidos">Apellidos:</label>
        <input type="text" name="Apellidos" id="Apellidos">
        <br>
        <label for="Correo">Correo</label>
        <input type="email" name="Correo" id="Correo">
        <br>
        <label for="Foto">Foto</label>
        <input type="file" name="Foto" id="Foto">
        <br>
        <button type="submit">Enviar</button>
    </form>
<br>
<hr>
<br>
    <table>
        <tr>
            <th>Id Cliente</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Foto</th>
        </tr>
    <?php
        foreach ($array_clientes as $key => $datos) {
            # code...
            ?>
        <tr>
            <td><?php echo $datos['id_cliente']; ?></td>
            <td><?php echo $datos['Nombre']; ?></td>
            <td><?php echo $datos['Apellidos']; ?></td>
            <td><?php echo $datos['Correo']; ?></td>
            <td><img src="<?php echo $datos['Imagen']; ?>" alt="" width="150"></td>
        </tr>
    <?php
        }
    ?>
    </table>
</body>
</html>