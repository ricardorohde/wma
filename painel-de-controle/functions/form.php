<?php
function fileValidation($fileSize, $fileType, array $acceptedExtensions, $maximumSize) {
	if(!in_array($fileType, $acceptedExtensions))
		return "Arquivo inválido. Os tipos suportados são: <strong>".implode(', ', $acceptedExtensions)."</strong>";
	elseif($fileSize > $maximumSize)
		return "O tamanho maximo permito do arquivo é de: <strong>{$maximumSize}</strong>";
	else
		return true;
}

function getFileExtension($originName){
	$index = strpos($originName,'.');
	$extension = substr($originName, $index  + 1);
	return $extension;
}

function moveUploadFile($extension, $folder, $tempName){
	$imageName = md5(time()).$extension;
	if(move_uploaded_file($tempName, $folder.'/'.$imageName))
		return $imageName;
	else
		return false;
}