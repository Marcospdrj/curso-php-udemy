<?php

$connection = new PDO("sqlsrv:Database=hcodedb;server=localhost\SQLEXPRESS", "marcos", "root036037");

$stmt = $connection ->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login ="jsoe";
$password = "123456789";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido OK!";

 ?>
