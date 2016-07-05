<?php 
function startSession ($data) {
	foreach ($data as $res){
		extract($res);
		session_start();
		$_SESSION['nivel']=$NIVEL;
		$_SESSION['email']=$EMAIL;
		$_SESSION['nome']=$NOME;
		$_SESSION['id_usuario']=$ID_USUARIO;
	}
}

function closeSession () {
	session_start();
	unset($_SESSION['nome']);
	unset($_SESSION['email']);
	unset($_SESSION['nivel']);	
	unset($_SESSION['id_usuario']);
}