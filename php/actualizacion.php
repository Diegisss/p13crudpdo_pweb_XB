<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $nombre = filter_input(INPUT_POST, 'fNombre');
        $alias = filter_input(INPUT_POST, 'fAlias');
        $edad = (int) filter_input(INPUT_POST, 'fEdad');
        
        include_once('conexion.php');

        try{
            $database = new Connection();
            $db = $database->openConnection();

            $stm = $db->prepare("UPDATE contacto SET nombre = ? , alias = ? , edad = ? WHERE id = ?");
            $stm->execute([$nombre, $alias, $edad, $id]);
            echo "Actualizado con exito";
        }catch(PDOException $e){
            echo "Problema con la conexión: " . $e->getMessage();
        }

    ?>
</body>
</html>