<?php
	session_start();
	include_once '../functions/include_directory_functions.php';
	setIncludePath('../functions/');
	includePhpExtension(array('crud', 'funcoes_auxiliares_crud', 'util', 'form'));
	define('TABELA', 'usuario');
	
	if(!empty($_POST['userName']) && !empty($_POST['senhaUsuario']) && !empty($_POST['operacao'])){
		$id = $_POST['operacao'];
		$userName = $_POST['userName'];
		$password = $_POST['senhaUsuario'];
		$crud = 'update';
		$array = createArrayUserTable('', '', $userName, $password, '', $crud);
		$response = update(TABELA, $array, "id_usuario = $id");
		$_SESSION['success'] = $response;
		pageRedirects('../view/perfil.php');
	}else{
		$_SESSION['error'] = 'Todos os campos devem ser preenchido!';
		pageRedirects('../view/perfil.php');
	}
