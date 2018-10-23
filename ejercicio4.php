<?php
try {
    $conn = new PDO('mysql:host=127.0.0.1;dbname=nba', 'usuario', 'usuario');
    //$sql = 'SELECT * FROM equipos';
    $sql = 'SELECT * FROM equipos';
    
    foreach ($conn->query($sql) as $row) {
        //echo "<option value=<?=$row["Nombre"]?>><?=$row
    }
} catch (PDOException $e) {
    echo "Error al conectar a la BD";
}

/*<select name=lista>
<?
$result = mysql_query("SELECT*FROM tu tabla");
while ($row = mysql_fetch_array($result)) {
?>
<option value=<?=$row["campo de tu tabla"]?>><?=$row["campo de tu tabla"]?></option>
<?
}
?>
</select> */
?>