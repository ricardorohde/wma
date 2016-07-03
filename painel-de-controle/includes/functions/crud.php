<meta charset="utf-8"/>
<?php 
	require_once 'conexao.php';
		$link = dbConect();

	function create ($tabela, array $campos) {
		$link = dbConect();
		$fields = implode(", ", array_keys($campos));
		$values = "'".implode("', '", $campos)."'";
		$queryInsert = "INSERT INTO $tabela ($fields) VALUES ($values)";
		$insert = mysqli_query($link, $queryInsert);
		if($insert)
			return "Dados cadastrado com sucesso !!!";
		else
			return "Error ao cadastrar: ".mysqli_error($link);
		dbClose($link);
	};

	function read ($tabela, $campos = '*' , $condicao = NULL){
		$link = dbConect();
		$querySelect = "SELECT {$campos} FROM {$tabela} {$condicao}";
		$select = mysqli_query($link, $querySelect);
		if($select):
			while ($query = mysqli_fetch_assoc($select)) {
				$data[] = $query; 
			}
		return $data;
		else:
			return "Consulta não retornou nenhum dados ".mysqli_error($link);
		endif;
		dbClose($link);
	};

	function update ($tabela, array $campos, $condicao=null) {
		$link = dbConect();
		foreach($campos as $key => $value){
			$fields[] = "{$key} = '{$value}'";
		}
		$fields = implode(', ', $fields);
		@$queryUpdate = "UPDATE {$tabela} SET {$fields} {$condicao}";
		$update = mysqli_query($link, $queryUpdate);
		if($update)
			return mysqli_affected_rows($link).' registros atualizados com sucesso ';
		else
			return "Error ao atualizar o banco de dados: ".mysqli_error($link);
		
		dbClose($link);
	};

	function delete ($tabela, $condicao) {
		$link = dbConect();
		$queryDelete = "DELETE FROM {$tabela} {$condicao}";
		$delete = mysqli_query($link, $queryDelete);
		if($delete):
			return mysqli_affected_rows($link).' registros removidos com sucesso ';
		else:
			return "Error ao excluir dados do banco: ".mysqli_error($link).'<br/>';
		endif;
		dbClose($link);
	};	