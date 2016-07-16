<?php
	session_start();
	include_once '../functions/include_directory_functions.php';
	setIncludePath('../functions/');
	includePhpExtension(array('conexao', 'crud', 'funcoes_auxiliares_crud', 'util', 'form'));

	define('TABELA', 'servicos');

	if(isset($_POST['enviar']) && !empty($_POST['nomeServico']) && $_POST['operacao'] == 0 && $_FILES['arquivo']['size'] > 0 ){

		$serviceName = $_POST['nomeServico'];
		$fileSize = $_FILES['arquivo']['size'];
		$fileType = $_FILES['arquivo']['type'];
		$tempName = $_FILES['arquivo']['tmp_name'];
		$originName = $_FILES['arquivo']['name'];
		$acceptedExtensions = array('image/jpeg', 'image/jpg', 'image/png', 'image/gif');
		$maximumSize = 1024 * 1024;
		$folder = '../img/uploads';
		
		$response = fileValidation($fileSize, $fileType, $acceptedExtensions, $maximumSize);
		if($response === true){
			$extension = getExtension($originName);
			$response = moveUploadFile($extension, $folder, $tempName);
			if($response){
				$array = createArrayServicesTable($serviceName, $response, 'create');
				$_SESSION['success'] = create(TABELA, $array);
				pageRedirects('../view/servicos.php');
			}
			else{
				$_SESSION['error'] = "Falha ao mover o arquivo";
				pageRedirects('../view/form-servicos.php');
			}
		}
		else{
			$_SESSION['error'] = $response;
			pageRedirects('../view/form-servicos.php');
		}
	}
	elseif(isset($_GET['id'])){
		$id = $_GET['id'];
		$data = read(TABELA, "*", "WHERE id_servico = $id");
		foreach($data as $res){
			extract($res);
			$_SESSION['nomeServico'] = $nm_servico;
			$_SESSION['imgServico'] = $img_servico;
			$_SESSION['operacao'] = $id;
		}
		pageRedirects('../view/form-servicos.php');
	}elseif(isset($_POST['enviar']) && !empty($_POST['nomeServico']) && $_POST['operacao'] != 0 && $_FILES['arquivo']['size'] > 0  ){
		$id = $_POST['operacao'];
		$serviceName = $_POST['nomeServico'];
		$fileSize = $_FILES['arquivo']['size'];
		$fileType = $_FILES['arquivo']['type'];
		$tempName = $_FILES['arquivo']['tmp_name'];
		$originName = $_FILES['arquivo']['name'];
		$acceptedExtensions = array('image/jpeg', 'image/jpg', 'image/png', 'image/gif');
		$maximumSize = 1024 * 1024;
		$folder = '../img/uploads';

		$response = fileValidation($fileSize, $fileType, $acceptedExtensions, $maximumSize);
		if($response === true){
			$extension = getExtension($originName);
			$response = moveUploadFile($extension, $folder, $tempName);
			if($response){
				$array = createArrayServicesTable($serviceName, $response, 'update');
				$_SESSION['success'] = update(TABELA, $array, "id_servico = '$id'");
				pageRedirects('../view/servicos.php');
			}
			else{
				$_SESSION['error'] = "Falha ao mover o arquivo";
				pageRedirects('../view/form-servicos.php');
			}
		}
		else{
			$_SESSION['error'] = $response;
			pageRedirects('../view/form-servicos.php');
		}
	}
	else{
		$_SESSION['error'] = 'Todos os campos devem ser preenchido!';
		pageRedirects('../view/form-servicos.php');
	}








		