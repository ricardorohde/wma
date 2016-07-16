<?php
	session_start();
	include_once('../functions/util.php');
	if(!isset($_SESSION['id_usuario']))
		pageRedirects('../view/index.php');
	require_once '../includes/templates/header.php';
?>
	<section id="corpo">
		
	</section>
<?php require_once '../includes/templates/footer.php'; ?>