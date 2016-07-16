<?php 

include('../functions/crud.php');
include('../functions/funcoes_auxiliares_crud.php');
// includePhpExtension(array('conexao', 'crud'));

function createArrayInsert ($nm_pai, $nm_filho, $senha) {
	$array = array(
			'nm_pai' => $nm_pai,
			'nm_filho' => $nm_filho,
			'senha' => $senha
		);
	return $array;
}

$tabela = 'teste';
$sen = 'carlos10';
$senha = @crypt($sen);
// $array = createArrayInsert('Carlos', 'caio', $senha);
// echo create($tabela, $array);
// echo "<hr/>";



// echo delete('teste', "id = '22'");
// echo "<hr/>";

function createArrayUpdate ($nm_pai, $nm_filho, $senha) {
	$array = array(
		'nm_pai' => $nm_pai,
		'nm_filho' => $nm_filho,
		'senha' => $senha
	);
	$newArray = array();
	foreach($array as $key => $value){
		if($value != null)
			$newArray[$key] = $value;
	}
	return $newArray;
}

// echo update('teste', createArrayUpdate('Wanderlei', 'Aguiar', $senha), "id > 14");
// echo "<hr/>";

$data = read('teste', 'senha', "WHERE senha = $senha");
var_dump($data);
// if(is_array($data)){
// 	echo "Id ---- Pai -------- Filho --------- Senha<br/>";
// 	foreach($data as $res){
// 		extract($res);
// 		echo $id." ->> ".$nm_pai." - ".$nm_filho." - ".$senha."<br/>";
// 	}
// }else
// 	echo $data;


