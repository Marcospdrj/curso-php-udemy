<?php

$connection = new PDO("mysql:host=localhost;dbname=dbphp7", "marcos", "root036037");
$stmt = $connection->prepare("UPDATE tb_usuarios SET deslogin = LOGIN , dessenha = :PASSWORD WHERE idusuario= :ID");

$login ="mario";
$password = "qwerty";
$id = 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Alterado OK!";

 ?>
