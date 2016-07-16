<?php 
	session_start();
	if(isset($_GET['id']) && empty(!$_GET['id'])){
		include_once '../functions/include_directory_functions.php';
		setIncludePath('../functions/');
		includePhpExtension(array('crud','util'));

		$id = $_GET['id'];
		$table = $_GET['table'];
		$idName = $_GET['idName'];
		$page = $_GET['page'];

		$response = delete($table, "$idName = '$id'");
		if($response)
			$_SESSION['success'] = $response;
		else
			$_SESSION['error'] = 'Falha ao excluir !';
		
		pageRedirects("../view/$page.php");
	}