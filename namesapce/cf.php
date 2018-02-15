<?php

spl_autoload_register(function($nomeClasse){

	$dirClasse = "classes";
	$filename = $dirClasse . DIRECTORY_SEPARATOR . $nomeClasse . ".class.php";

	if (file_exists($filename)) {
		
		require_once($filename);
	}
});




?>