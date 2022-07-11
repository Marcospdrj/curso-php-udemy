<?php

$connection = new PDO("sqlsrv:Database=hcodedb;server=localhost\SQLEXPRESS", "marcos", "root036037");

$stmt = $connection->prepare("DELETE FROM  tb_usuarios WHERE idusuario= :ID");

$login ="mario";
$password = "qwerty";
$id = 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Alterado OK!";

 ?>
