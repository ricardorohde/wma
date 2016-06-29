<?php 

	const HOST = 'localhost';
	const USER = 'root';
	const PASS = '';
	const DBSA = 'wma';

	//=== conexão ===// ============================================================================
	echo "<font size='5'><b>Conexao com o BD<br/></b></font><br/>";
	@$link = mysqli_connect(HOST, USER, PASS, DBSA);
	mysqli_set_charset($link, 'UTF-8');
	if($link)
		echo "Conectou com sucesso :)";
	else
		echo "Nao conectou :( ".mysqli_connect_error();

	echo "<hr/>";
	
	// INSERT ========================================================================================
	echo "<font size='5'><b>Query INSERT<br/></b></font><br/>";
	$pai = 'Paulo';
	$filho = 'Paulinho';
	$queryInsert = "INSERT INTO teste (NM_PAI, NM_FILHO) VALUES ('$pai', '$filho')";
	$insert = mysqli_query($link, $queryInsert);

	if($insert):
		echo "Cadastrado com sucesso !!!";
	else:
		echo "Error ao cadastrar: ",mysqli_error($link);
	endif;
	echo "<hr/>";

	// UPDATE ===========================================================================================
	echo "<font size='5'><b>Query UPDATE<br/></b></font><br/>";
	$queryUpdate = "UPDATE teste SET NM_PAI = 'Paulao' WHERE NM_PAI = 'Paulo'";
	$update = mysqli_query($link, $queryUpdate);

	if($update):
		echo mysqli_affected_rows($link).' registros atualizados com sucesso ';
	else:
		echo "Error ao atualizar o banco de dados: ",mysqli_error($link);
	
	endif;
	echo "<hr/>";

	// DELETE ===========================================================================================
	echo "<font size='5'><b>Query DELETE<br/></b></font><br/>";
	$queryDelete = "DELETE FROM teste WHERE NM_PAI = 'Paulao' AND ID > 4";
	$delete = mysqli_query($link, $queryDelete);
	if($delete):
		echo mysqli_affected_rows($link).' registros removidos com sucesso ';
	else:
		echo "Error ao excluir dados do banco: ",mysqli_error($link).'<br/>';
	endif;
	echo "<hr/>";

	// SELECT =============================================================================================
	echo "<font size='5'><b>Query SELECT<br/></b></font><br/>";

	$querySelect = "SELECT * FROM teste";
	$select = mysqli_query($link, $querySelect);
	if($select):
		echo 'ID | PAI | FILHO<br/>';
		foreach ($select as $res) {
			// echo $res['ID']." - ".$res['NM_PAI']." - ".$res['NM_FILHO'].'<br/>';
			extract($res);
			echo $ID." - ".$NM_PAI." - ".$NM_FILHO.'<br/>';
		};
	else:
		echo "Erro ao ler: ".mysqli_error($link);
	endif;
	//========================================================================================================
	
