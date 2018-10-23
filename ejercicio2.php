<?php
try {
    $conn = new PDO('mysql:host=127.0.0.1;dbname=nba', 'usuario', 'usuario');
    //$sql = 'SELECT * FROM equipos';
    $sql = 'SELECT * FROM equipos';
    //$tabla;
    $tabla = '<table border = 1px solid black><tr><td>Nombre</td><td>Ciudad
    </td><td>Conferencia</td><td>Division</td></tr>';
    //echo "Sentencia: " . $sql;
    foreach ($conn->query($sql) as $row) {
        //echo "HOLA";
        $tabla .= "<tr><td>" . $row['Nombre'] . "</td>" . "<td>" . $row['Ciudad'] . "</td>"
        . "<td>" . $row['Conferencia'] . "</td>"
        . "<td>" . $row['Division'] . "</td></tr>";
    }
    //echo "Bienvenido";
   echo $tabla;
} catch (PDOException $e) {
    echo "Error al conectar a la BD";
}
?>