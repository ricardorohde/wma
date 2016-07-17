<?php 
	if(!isset($_SESSION['id_usuario']))
		header('Location: ../view/index.php');
	if(isset($_GET['logof']) && $_GET['logof'] == true){
		include_once '../functions/include_directory_functions.php';
		set_include_path('../functions/');
		includePhpExtension(array('general'));
		closeSession();
		header("location:../view/");
	}
	else
		echo "Passagem de parametros via get para a Pagina: <b> \"logout.php\" </b> deu <b>Error</b>  !!!";





