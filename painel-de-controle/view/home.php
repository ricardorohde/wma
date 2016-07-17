<?php
	session_start();
	if(!isset($_SESSION['id_usuario']))
		header('Location: ../view/index.php');
	require_once '../includes/templates/header.php';
?>
	<section id="corpo">
		
	</section>
<?php require_once '../includes/templates/footer.php'; ?>