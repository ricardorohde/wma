<?php 
	if(isset($_GET['logof']) && $_GET['logof'] == true){
		include_once '../functions/include_directory_functions.php';
		setIncludePath('../functions/');
		includePhpExtension(array('login'));
		closeSession();
		header("location:../view/");
	}
	else
		echo "Passagem de parametros via get deu error !!!";





