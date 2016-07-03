<?php 
	define('PATH_INCLUDE', '../includes/');
	set_include_path(PATH_INCLUDE."functions/");
	function includePhpExtension($includes){	
		if(is_array($includes)) {
			foreach ($includes as $inc)
				include $inc.".php";
		}
		else
			echo "Parâmetro passado não é um Array!";
	};
	