<?php

require_once("cf.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad-> setNome("Marco Aurélio");
$cad-> setEmail("msantos@mainfo.com.br");
$cad-> setSenha("123456");

$cad-> registrarVenda();