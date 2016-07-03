<meta charset="utf-8"/>
<?php 
	require_once 'conexao.php';
	$link = dbConect();

	function executeQuery ($query) {
		$link = dbConect();
		$result = mysqli_query($link, $query);
		return $result;
		dbClose($link);
	};

	function create ($tabela, array $campos) {
		$fields = implode(", ", array_keys($campos));
		$values = "'".implode("', '", $campos)."'";
		$queryInsert = "INSERT INTO $tabela ($fields) VALUES ($values)";
		$insert = executeQuery($queryInsert);
		if($insert)
			return "Dados cadastrado com sucesso !!!";
		else
			return "Error ao cadastrar: ".mysqli_error($link);
	};

	function read ($tabela, $campos = '*' , $condicao = NULL){
		@$querySelect = "SELECT {$campos} FROM {$tabela} {$condicao}";
		$select = executeQuery($querySelect);
		if($select){
			while ($dados = mysqli_fetch_assoc($select))
				$data[] = $dados; 
		return $data;
		}else
			return "Consulta não retornou nenhum dados ".mysqli_error($link);
	};

	function update ($tabela, array $campos, $condicao=null) {
		foreach($campos as $key => $value)
			$fields[] = "{$key} = '{$value}'";
		$fields = implode(', ', $fields);
		@$queryUpdate = "UPDATE {$tabela} SET {$fields} {$condicao}";
		$update = executeQuery($queryUpdate);
		if($update)
			return mysqli_affected_rows($link).' registros atualizados com sucesso ';
		else
			return "Error ao atualizar o banco de dados: ".mysqli_error($link);
	};

	function delete ($tabela, $condicao) {
		$queryDelete = "DELETE FROM {$tabela} WHERE {$condicao}";
		$delete = executeQuery($queryDelete);
		if($delete):
			return mysqli_affected_rows($link).' registros removidos com sucesso ';
		else:
			return "Error ao excluir dados do banco: ".mysqli_error($link).'<br/>';
		endif;
	};	