<?php

$connection = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $connection->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "João";
$password = "qwerty";
$id = 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Alterado OK!";

?>
