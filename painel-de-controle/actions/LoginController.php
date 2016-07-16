<?php
	session_start();
	include_once '../functions/include_directory_functions.php';
	setIncludePath('../functions/');
	includePhpExtension(array('crud', 'funcoes', 'util'));
	if(!empty($_POST['user']) && !empty($_POST['senha'])){
		$user  = addslashes(trim($_POST['user']));
		$senha = addslashes(trim($_POST['senha']));
		//$senha = md5($senha);
		// $password = crypt('mypassword'); 
		// if (crypt($user_input, $password) == $password) { 
		//    echo "Password verified!";
		// }
		$data = read('usuario', '*', "WHERE USER = '$user' AND SENHA = '$senha'");
		if($data){
			startSession($data);
			pageRedirects('../view/home.php');
		}else
			pageRedirects('../view/?error=1');
	}else
		include_once('../view/index.php');

		
