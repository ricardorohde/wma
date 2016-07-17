<?php 
include_once('../includes/templates/head.php');
// function teste ($a, $b, $c){
// 	if(!isset($a, $b, $c))
// 		die("Um ou mais parametro esta com valor indefinido");
// 	if( empty($a) || empty($b) || empty($c) )
// 		die("Um dos parametros estar com valor vazio");
// };

// @teste('Joao', 'Paulo', 'kk');
echo "Anda <b> \"Logo\"</b> ";
$NOME = 'NOME';
$nome = 'nome';
// echo $NOME."<br/>".$nome;

echo "<hr/>";

// $array = array('Joao', '0', 'Paulo');
// $p = '';

// if(isset($array))
// 	echo "Earrayite array";
// else
// 	echo "Nao existe";

// echo "<hr/>";

// if(empty($array))
// 	echo "Esta Vazio";
// else
// 	echo " Nao Esta Vazio";

// echo "<hr/>";

// foreach ($array as $key => $value)
// 	if(empty($value) && $value != '0')
// 		echo "este array contem posicao(s) vazia(s)";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Teste</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1 class="info">Teste</h1>
	<form class="form-horizontal">
		<div class="control-group">
			<label class="control-label" for="nomeUsuario">Nome</label>
			<div class="controls">
				<input type="text" class="span6" id="nomeUsuario" placeholder="Nome do Usuário" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="emailUsuario">Email</label>
			<div class="controls">
				<input type="email" class="span6" id="emailUsuario" placeholder="Email do Usuário" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="senhaUsuario">Senha</label>
			<div class="controls">
				<input type="password" class="span6" id="senhaUsuario" placeholder="Senha do Usuário" required>
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<input type="submit" class="btn btn-inverse" value="Cadastrar">
				<input type="reset" class="btn btn-inverse" name="limpar" value="Limpar">
			</div>
		</div>
	</form>
</body>
</html>