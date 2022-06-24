<?php

session_id('gg9l5e27b3a36pkqfg2a8qssk2');
require_once("config.php");

session_regenerate_id();

echo session_id();

echo "<br>";

var_dump($_SESSION);

 ?>
