<?php
	session_start();
	if(!isset($_SESSION['id_usuario']))
		header('Location: ../index.php');
	include_once '../functions/include_directory_functions.php';
	set_include_path('../functions/');
	includePhpExtension(array('crud', 'crud_auxiliar', 'general', 'form'));

	define('TABELA', 'descricao_servicos');

	if(isset($_POST['enviar']) && !empty($_POST['selectServico']) && !empty($_POST['descricaoServico']) && $_POST['operacao'] == 0  ){
		$serviceId = $_POST['selectServico'];
		$descriptionService = $_POST['descricaoServico'];
		$array = createArrayServicesDescriptionTable($serviceId, $descriptionService, 'create');
		$_SESSION['success'] = create(TABELA, $array);
		pageRedirects('../view/descricao-servicos.php');
	}
	elseif(isset($_GET['id'])){
		$id = $_GET['id'];
		$data = read(TABELA, "*", "WHERE id_servicos = $id");
		foreach($data as $res){
			extract($res);
			$_SESSION['id_servicos'] = $id_servicos;
			$_SESSION['descricaoServicos'] = $ds_servicos;
			$_SESSION['operacao'] = $id;
		}
		pageRedirects('../view/form-descricao-servicos.php');
	}elseif(isset($_POST['enviar']) && !empty($_POST['selectServico']) && !empty($_POST['descricaoServico']) && $_POST['operacao'] != 0){
		$id = $_POST['operacao'];
		$serviceId = $_POST['selectServico'];
		$descriptionService = $_POST['descricaoServico'];
		$array = createArrayServicesDescriptionTable($serviceId, $descriptionService, 'update');
		$_SESSION['success'] = update(TABELA, $array, "id_servicos = '$id'");
		pageRedirects('../view/descricao-servicos.php');
	}else{
		$_SESSION['error'] = 'Todos os campos devem ser preenchido!';
		pageRedirects('../view/form-descricao-servicos.php');
	}