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
        include_once('conexion.php');

        try{
            echo "<h2>Altas</h2>";
            $database = new Connection();
            $db = $database->openConnection();
            $stm = $db->prepare("INSERT INTO contacto(nombre, alias, edad) VALUES (?,?,?)");
            $stm->execute([$nombre, $alias, $edad]);

        }catch(PDOException $e){
            echo "Problema de conexión: " .$e->getMessage();
        }
    ?>
</body>
</html>