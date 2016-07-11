<?php 
	require_once 'conexao.php';

	function executeQuery ($query) {
		$link = dbConect();
		$response = mysqli_query($link, $query)or die("Erro na execução da query!!!<br/>".mysqli_error($link));
		return array($response, $link);
		dbClose($link);
	};

	function create ($tabela, array $campos) {
		$fields = implode(", ", array_keys($campos));
		$values = "'".implode("', '", $campos)."'";
		$queryInsert = "INSERT INTO $tabela ($fields) VALUES ($values)";
		executeQuery($queryInsert);
		return "Dados cadastrado com sucesso !!!"; 
	};

	function read ($tabela, $campos = '*' , $condicao = NULL){
		@$querySelect = "SELECT {$campos} FROM {$tabela}  {$condicao}";
		list($select, $link) = executeQuery($querySelect);
		if(mysqli_num_rows($select)){
			while ($dados = mysqli_fetch_assoc($select))
				$data[] = $dados; 
			return $data;
		}else
			return false;
	};

	function update ($tabela, array $campos, $condicao=null) {
		foreach($campos as $key => $value)
			$fields[] = "{$key} = '{$value}'";
		$fields = implode(', ', $fields);
		@$queryUpdate = "UPDATE {$tabela} SET {$fields} WHERE {$condicao}";
		list( , $link) = executeQuery($queryUpdate);
		return mysqli_affected_rows($link).' Registros atualizados com sucesso ';
	};

	function delete ($tabela, $condicao) {
		$queryDelete = "DELETE FROM {$tabela} WHERE {$condicao}";
		list( , $link) = executeQuery($queryDelete);
		return mysqli_affected_rows($link).' Registros removidos com sucesso ';
	};	