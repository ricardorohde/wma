<?php
	session_start();
	if(!isset($_SESSION['id_usuario']))
		header('Location: ../index.php');
	include_once '../functions/include_directory_functions.php';
	set_include_path('../functions/');
	includePhpExtension(array('crud', 'crud_auxiliar', 'general', 'form'));
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
	}
	else{
		$_SESSION['error'] = 'Todos os campos devem ser preenchido!';
		pageRedirects('../view/perfil.php');
	}
