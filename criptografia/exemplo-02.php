<?php

define('SECRET_IV', pack('a16', 'senha'));
define('SECRET', pack('a16', 'senha'));

$data = [
  "nome"=>"Hcode"
];

$openssl = openssl_encrypt(
  json_encode($data),
  'AES-128-CBC',
  SECRET,
  0,
  SECRET_IV
);

echo $openssl;



?>
