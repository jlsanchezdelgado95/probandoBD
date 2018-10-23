<?php
try {
    $conn = new PDO('mysql:host=127.0.0.1;dbname=nba', 'usuario', 'usuario');
    //$sql = 'SELECT * FROM equipos';
    $sql = 'SELECT * FROM jugadores WHERE Nombre_equipo = :equipo';
    $sth = $conn->prepare($sql);
    $sth->bindParam(':equipo', $_GET["equipo"], PDO::PARAM_STR);
    $sth->execute();
    $resultado = $sth->fetchAll();
    //print_r($resultado);
    //$tabla;
    $tabla = '<table border = 1px solid black><tr><td>Codigo</td><td>Nombre>/td>
    <td>Procedencia</td><td>Altura</td><td>Peso</td><td>Posicion</td><td>Nombre Equipo</td></tr>';
    echo "EQUIPO =>" . $_GET["equipo"];
    foreach ($resultado as $row) {
        //echo "HOLA";
        $tabla .= "<tr><td>" . $row['codigo'] . "</td>" . "<td>" . $row['Nombre'] . "</td>"
        . "<td>" . $row['Procedencia'] . "</td>"
        . "<td>" . $row['Altura'] . "</td><td>" . $row["Peso"] . "</td><td>" . $row["Posicion"] . 
        "</td><td>" . $row["Nombre_equipo"] . "</tr>";
    }
    //echo "Bienvenido";
   echo $tabla;
} catch (PDOException $e) {
    echo "Error al conectar a la BD";
}
?>