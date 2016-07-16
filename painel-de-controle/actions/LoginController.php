<?php
	session_start();
	include_once '../functions/include_directory_functions.php';
	setIncludePath('../functions/');
	includePhpExtension(array('crud', 'funcoes', 'util'));
	if(isset($_POST['user'], $_POST['senha']) && !empty($_POST['user']) && !empty($_POST['senha'])){

		$user  = addslashes(trim($_POST['user']));
		$senha = addslashes(trim($_POST['senha']));
		//$senha = md5($senha);
		// $password = crypt('mypassword'); 
		// if (crypt($user_input, $password) == $password) { 
		//    echo "Password verified!";
		// }
		$data = read('usuario', '*', "WHERE user_name = '$user' AND senha = '$senha'");
		if($data){
			startSession($data);
			pageRedirects('../view/home.php');
		}else
			pageRedirects('../view/?error=1');
	}else
		pageRedirects('../view/index.php');

		
