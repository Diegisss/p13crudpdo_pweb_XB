<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas</title>
</head>
<body>
    <?php
        echo "<h2>Consultar contactos</h2>";
        include_once('conexion.php');
        try{
            $database = new Connection();
            $db = $database->openConnection();
            $stm = "SELECT * FROM contacto";
            foreach ($db->query($stm) as $row){
                echo "Id: ".$row['id']. "<br>";
                echo "Nombre: ".$row['nombre']."<br>";
                echo "Alias: ".$row['alias']."<br>";
                echo "Edad: ".$row['edad']."<br>";
            }
        }catch(PDOException $e){
            echo "Problema con la conexión: " . $e->getMessage();
        }



    ?>
</body>
</html>