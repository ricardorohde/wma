<?php 
/*
	======= Funções de login =======
 */

function startSession ($data) {
	foreach ($data as $res){
		extract($res);
		$_SESSION['nivel']=$nivel;
		$_SESSION['email']=$email;
		$_SESSION['nome']=$nome;
		$_SESSION['id_usuario']=$id_usuario;
	}
}

function closeSession () {
	session_start();
	unset($_SESSION['nome']);
	unset($_SESSION['email']);
	unset($_SESSION['nivel']);	
	unset($_SESSION['id_usuario']);
	session_destroy();
}