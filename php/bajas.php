<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bajas</title>
</head>
<body>
    <?php
        $id = (int)filter_input(INPUT_POST, 'fID');
        include_once('conexion.php');

        try{
            echo "<h2>Bajas</h2>";
            $database = new Connection();
            $db = $database->openConnection();
            $stm = $db->prepare("DELETE FROM contacto where id = ?");
            $stm->execute([$id]);
            if($stm->rowCount() > 0){
                echo "Se elimino el registro exitosamente";
            }else{
                echo "No se encontro el registro con id: " . $id;
            }
        }catch(PDOException $e){
            echo "Problema con la conexión: " . $e->getMessage();
        }
    ?>
</body>
</html>