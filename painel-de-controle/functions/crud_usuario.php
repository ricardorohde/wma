<?php 
	include_once('conexao.php');

	function executeQuery ($query) {
		$link = dbConect();
		$response = mysqli_query($link, $query)or die("Erro na execução da query!!!<br/>".mysqli_error($link));
		return array($response, $link);
		dbClose($link);
	};

	function update ($tabela, array $campos, $condicao=null) {
		foreach($campos as $key => $value)
			$fields[] = "{$key} = '{$value}'";
		$fields = implode(', ', $fields);
		@$queryUpdate = "UPDATE {$tabela} SET {$fields} WHERE {$condicao}";
		list( , $link) = executeQuery($queryUpdate);
		return mysqli_affected_rows($link).' Registros atualizados com sucesso ';
	};