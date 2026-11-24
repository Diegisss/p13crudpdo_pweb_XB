<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insercion</title>
</head>
<body>
    <?php
        $nombre = filter_input(INPUT_POST, 'fNombre');
        $alias = filter_input(INPUT_POST, 'fAlias');
        $edad = (int)(filter_input(INPUT_POST, 'fEdad'));
        $sql = "INSERT INTO contacto(nombre, alias, edad)" . "VALUES ('".$nombre."','".$alias."','".$edad."');";
    ?>
</body>
</html>