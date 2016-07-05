<?php
	function setIncludePath($path) {	
		set_include_path($path);
	};

	function includePhpExtension($includes){	
		if(is_array($includes)) {
			foreach ($includes as $inc)
				include $inc.".php";
		}
		else
			echo "Parâmetro passado não é um Array!";
	};
	