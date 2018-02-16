<?php

require_once ("cf.php");

$user = new Usuarios();
$user ->loadById(4);

echo $user;

?>