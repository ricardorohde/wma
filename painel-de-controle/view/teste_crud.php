<?php 

include('../includes/config/include_directory_function.php');
includePhpExtension(array('conexao', 'crud'));

function createArrayInsert ($nm_pai, $nm_filho) {
	$array = array(
			'nm_pai' => $nm_pai,
			'nm_filho' => $nm_filho
		);
	return $array;
}

$tabela = 'teste';
$array = createArrayInsert('Joao', 'caio') or die();
echo create($tabela, $array);
echo "<hr/>";



// echo delete('teste', "id > '2'");
// echo "<hr/>";







function createArrayUpdate ($nm_pai, $nm_filho) {
	$array = array(
		'nm_pai' => $nm_pai,
		'nm_filho' => $nm_filho
	);
	$newArray = array();
	foreach($array as $key => $value){
		if($value != null)
			$newArray[$key] = $value;
	}
	return $newArray;
}

// echo update('teste', createArrayUpdate('Wanderlei', 'Aguiar'), "id > 14");
// echo "<hr/>";

$data = read('teste');
if(is_array($data)){
	echo "Id ---- Pai -------- Filho<br/>";
	foreach($data as $res){
		extract($res);
		echo $id." ->> ".$nm_pai." - ".$nm_filho."<br/>";
	}
}else
	echo $data;


