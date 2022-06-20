<?php

session_id('ildp80js64qkfu983dlknrl0dv');

require_once("config.php");

session_regenerate_id();

echo session_id();

echo("<br>");

var_dump($_SESSION);
?>