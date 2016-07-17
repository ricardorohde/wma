<?php
	session_start();
	if(!isset($_SESSION['id_usuario']) || isset($_SESSION['nivel']) && $_SESSION['nivel'] == 2)
		header('Location: ../index.php');
	include_once '../functions/include_directory_functions.php';
	set_include_path('../functions/');
	includePhpExtension(array('crud', 'crud_auxiliar', 'general', 'form'));

	define('TABELA', 'usuario');

 	if(isset($_POST['cadastrar']) && !empty($_POST['nomeUsuario']) && !empty($_POST['emailUsuario']) && !empty($_POST['userName']) && !empty($_POST['senhaUsuario']) && !empty($_POST['nivelUsuario']) && $_POST['operacao'] == 0){
		$name = $_POST['nomeUsuario'];
		$email = $_POST['emailUsuario'];
		$userName = $_POST['userName'];
		$password = $_POST['senhaUsuario'];
		$level = $_POST['nivelUsuario'];
		$crud = 'create';

		$array = createArrayUserTable($name, $email, $userName, $password, $level, $crud);
		$_SESSION['success'] = create(TABELA, $array);
		pageRedirects('../view/usuario.php');
	}
	elseif(isset($_GET['id'])){
		$id = $_GET['id'];
		$data = read(TABELA, "*", "WHERE id_usuario = $id");
		foreach($data as $res){
			extract($res);
			$_SESSION['nomeUsuario'] = $nome;
			$_SESSION['emailUsuario'] = $email;
			$_SESSION[''] = $email;
			$_SESSION['emailUsuario'] = $email;
			$_SESSION['operacao'] = $id;
		}
		pageRedirects('../view/form-servicos.php');

	}else{
		$_SESSION['error'] = 'Todos os campos devem ser preenchido!';
		// pageRedirects('../view/form-usuario.php');
	}