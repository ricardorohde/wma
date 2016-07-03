<?php 

include('../includes/config/include_directory_function.php');
includePhpExtension(array('conexao', 'crud'));

function createArray ($nm_pai, $nm_filho) {
	$array = array(
			'nm_pai' => $nm_pai,
			'nm_filho' => $nm_filho
		);
	return $array;
}
$data = createArray('Osvaldo', 'Breno');
var_dump($data);

$tabela = 'teste';
// $data = create($tabela, createArray('Osvaldo', 'Breno'));
// echo $data."<hr/>";

// $data = read('teste');
// if(is_array($data)){
// 	foreach($data as $res){
// 		extract($res);
// 		echo "Pai : ".$nm_pai."<br/>";
// 	}
// }else
// 	echo $data;

// echo "<hr/>";
// foreach($campos as $key => $value)
// 	echo $key." - ".$value."<br/>";