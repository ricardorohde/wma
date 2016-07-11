<?php
	session_start();
	include_once '../functions/include_directory_functions.php';
	setIncludePath('../functions/');
	includePhpExtension(array('conexao', 'crud', 'funcoes_auxiliares_crud', 'util', 'form'));
	if(isset($_POST['enviar']) && !empty($_POST['nomeContato']) && !empty($_POST['descricaoContato']) && $_FILES['arquivo']['size'] > 0 ){

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
			$extension = getExtension($originName);
			$response = moveUploadFile($extension, $folder, $tempName);
			if($response){
				$array = createArrayContactsTable($contactName, $descriptionContact, $response, 'create');
				$_SESSION['success'] = create("contatos", $array);
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








		