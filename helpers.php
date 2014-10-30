<?php
	function controller($nombre){
		if (empty($nombre)){
			$nombre = 'home';
		}
		
		$archivo = "controllers/".$nombre.".php";
		if (file_exists($archivo)){
			require $archivo;
		}
		else{
			echo "No existe la pagina";
		}
	}
	
	function view($template, $variables){
		extract($variables);
		require "views/".$template.".tpl.php";
	}
?>