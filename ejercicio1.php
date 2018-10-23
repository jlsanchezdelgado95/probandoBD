<?php
try{
    $pdo = new PDO('mysql:host=localhost;dbaname=nba','usuario','usuario');
    echo "Bienvenido";
} catch(PDOException $e){
    echo "Error al conectar a la BD";
}
    

?>