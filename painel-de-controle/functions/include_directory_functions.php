<?php
	function setIncludePath($path) {	
		set_include_path($path);
	};

	function includePhpExtension($includes){	
		if(is_array($includes)) {
			foreach ($includes as $inc)
				include_once($inc.".php");
		}
		else
			echo "<h2 style='red'>Parâmetro passado para a Função: <b> \"includePhpExtension\" </b> do arquivo <b> \"include_directory_functions.php\" <b/> não é um Array!</h2>";
	};
	