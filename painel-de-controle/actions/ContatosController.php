<?php
	session_start();
	if(!isset($_SESSION['id_usuario']))
		header('Location: ../view/index.php');
	include_once '../functions/include_directory_functions.php';
	set_include_path('../functions/');
	includePhpExtension(array('crud', 'crud_auxiliar', 'general', 'form'));


	//Declaração de constantes
	define('TABELA', 'contatos');
	//Declaração de variaveis
	
	if(isset($_POST['enviar']) && !empty($_POST['nomeContato']) && !empty($_POST['descricaoContato']) && $_POST['operacao'] == 0 && $_FILES['arquivo']['size'] > 0 ){

		$contactName = $_POST['nomeContato'];
		$descriptionContact = $_POST['descricaoContato'];
		$fileSize = $_FILES['arquivo']['size'];
		$fileType = $_FILES['arquivo']['type'];
		$tempName = $_FILES['arquivo']['tmp_name'];
		$originName = $_FILES['arquivo']['name'];
		$acceptedExtensions = array('image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'image/icon');
		$maximumSize = 1024 * 1024;
		$folder = '../img/uploads';
		
		$response = fileValidation($fileSize, $fileType, $acceptedExtensions, $maximumSize);
		if($response === true){
			$extension = getFileExtension($originName);
			$response = moveUploadFile($extension, $folder, $tempName);
			if($response){
				$array = createArrayContactsTable($contactName, $descriptionContact, $response, 'create');
				$_SESSION['success'] = create(TABELA, $array);
				pageRedirects('../view/contatos.php');
			}
			else{
				$_SESSION['error'] = "Falha ao mover o arquivo";
				pageRedirects('../view/form-contatos.php');
			}
		}
		else{
			$_SESSION['error'] = $response;
			pageRedirects('../view/form-contatos.php');
		}
	}
	elseif(isset($_GET['id'])){
		$id = $_GET['id'];
		$data = read(TABELA, "*", "WHERE id_contato = $id");
		foreach($data as $res){
			extract($res);
			$_SESSION['nomeContato'] = $nm_contato;
			$_SESSION['descricaoContato'] = $ds_contato;
			$_SESSION['iconContato'] = $icon_contato;
			$_SESSION['operacao'] = $id;
		}
		pageRedirects('../view/form-contatos.php');
	}elseif(isset($_POST['enviar']) && !empty($_POST['nomeContato']) && !empty($_POST['descricaoContato']) && $_POST['operacao'] != 0 && $_FILES['arquivo']['size'] > 0 ){
		$id = $_POST['operacao'];
		$contactName = $_POST['nomeContato'];
		$descriptionContact = $_POST['descricaoContato'];
		$fileSize = $_FILES['arquivo']['size'];
		$fileType = $_FILES['arquivo']['type'];
		$tempName = $_FILES['arquivo']['tmp_name'];
		$originName = $_FILES['arquivo']['name'];
		$acceptedExtensions = array('image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'image/icon');
		$maximumSize = 1024 * 1024;
		$folder = '../img/uploads';

		$response = fileValidation($fileSize, $fileType, $acceptedExtensions, $maximumSize);
		if($response === true){
			$extension = getFileExtension($originName);
			$response = moveUploadFile($extension, $folder, $tempName);
			if($response){
				$array = createArrayContactsTable($contactName, $descriptionContact, $response, 'update');
				$_SESSION['success'] = update(TABELA, $array, "id_contato = '$id'");
				pageRedirects('../view/contatos.php');
			}
			else{
				$_SESSION['error'] = "Falha ao mover o arquivo";
				pageRedirects('../view/form-contatos.php');
			}
		}
		else{
			$_SESSION['error'] = $response;
			pageRedirects('../view/form-contatos.php');
		}
	}
	else{
		$_SESSION['error'] = 'Todos os campos devem ser preenchido!';
		pageRedirects('../view/form-contatos.php');
	}








		