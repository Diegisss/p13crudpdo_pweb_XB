<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para actualizar los contactos</title>
</head>

<body>
    <?php
    $id = (int) filter_input(INPUT_POST, 'fID');
    include('conexion.php');

    $database = new Connection();
    $db = $database->openConnection();

    $stm = $db->prepare("SELECT * FROM contacto WHERE id = ?");
    $stm->execute([$id]);
    $contacto = $stm->fetch(PDO::FETCH_ASSOC);

    if (!$contacto) {
        echo "No existe el id";
        exit;
    }
    ?>
    <h2>Actualizar contacto</h2>
    <form action="actualizacion.php" method="post">
        <input type="hidden" name="fID" value="<?php echo $contacto['nombre']; ?>">
        <label>Nombre:</label>
        <input type="text" name="fNombre" value="<?php echo $contacto['nombre']; ?>"><br>

        <label>Alias:</label>
        <input type="text" name="fAlias" value="<?php echo $contacto['alias']; ?>"><br>

        <label>Edad:</label>
        <input type="number" name="fEdad" value="<?php echo $contacto['edad']; ?>"><br>

        <button type="submit">Actualizar</button>
    </form>

</body>

</html>