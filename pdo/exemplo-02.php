<?php

$conn = new PDO("sqlsrv:database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "03603789199", "036037");

$stmt = $conn -> prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt -> execute();

$results = $stmt->fetchall(PDO::FETCH_ASSOC);

foreach ($results as $row) {

  foreach ($row as $key => $value) {

    echo "<strong>" . $key . ":</strong>" . $value . "<br/>";

  }

  echo "=================================================<br>";
}


 ?>
