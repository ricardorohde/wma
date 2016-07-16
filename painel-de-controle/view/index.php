<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
		<title>Painel de Controle WMA</title>
		<!-- Bootstrap -->
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/bootstrap-responsive.css">
		<link rel="stylesheet" href="../css/estilo.css">
		<link rel="stylesheet" href="../css/index.css">
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script type="text/javascript" src="../js/bootstrap.js"></script>
		<script type="text/javascript" src="../js/funcoes.js"></script>
	</head>
	<body>
		<section>
			<div class="row-fluid">
				<div class="sapn12 login" id="login">
					<legend>Painel Administrativo <small>WMA Desenvolvimento</small></legend>
					<?php if(isset($_GET['error']) && $_GET['error'] == '1' ): ?>
					<div class="alert alert-error">
						<strong>Usuário ou senha inválidos !</strong>
					</div>
					<?php endif; ?>
					<form class="form form-login " method="post" action="../actions/LoginController.php" >
						<div class="control-group">
							<label class="control-label muted" for="user">User</label>
							<div class="controls">
								<input type="text" id="user" name="user" class="span12" required />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label muted" for="senha">Senha</label>
							<div class="controls">
								<input type="password" id="senha" name="senha" class="span12" accept="image/*" data-file-type="zip|png" data-max-size="1048576" required />
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<input type="submit" name="entrar" id="btn-entrar" class="btn btn-inverse btn-entrar" value="Entrar">
								<input type="reset" name="limpar" id="btn-limpar" class="btn btn-inverse btn-limpar" value="Limpar">
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
	</body>
</html>