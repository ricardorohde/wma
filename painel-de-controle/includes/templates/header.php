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
		<!-- <script src="http://code.jquery.com/jquery-latest.js"></script> -->
		<script src="../js/jquery.min.js"></script>
		<script type="text/javascript" src="../js/funcoes.js"></script>
		<script type="text/javascript" src="../js/bootstrap.js"></script>
	</head>
	<body>
		<header>
			<div class="row-fluid cabecalho">
				<div class="span7 offset1">
					<a href="home.php"><img src="../img/logo.png" class="img-responsive" alt=""></a>
				</div>
				<div class="span2 header-login">
					<span class="label label-info label-usuario" ><i class="icon-user"></i>
						<?php echo $_SESSION['nome'] ?>
					</span>
				</div>
				<div class="span1 div-logof">
					<a href="../actions/LogoffController.php?logof=true" class="btn btn-primary btn-small btn-logof">Sair</a>	
				</div>
			</div>
		</header>
		<nav>
			<div clas="row-fluid">
				<div class="col-lg-12">
				    <div class="navbar navbar-inverse">
						<div class="navbar-inner">
					    	<div class="container">
							      <!-- .btn-navbar é usado como alternador para conteúdo de barra de navegação colapsável -->
							    <button  class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							    </button>
							    <!-- Tudo que você queira escondido em 940px ou menos, coloque aqui -->
							    <div class="nav-collapse collapse menu">
							     <!-- .nav, .navbar-search, .navbar-form, etc -->
							     	<ul class="nav">
							        	<li class="item-menu"><a href="contatos.php">Contatos</a></li>
							      	<li class="item-menu"><a href="servicos.php">Serviços</a></li>
							      	<li class="item-menu"><a href="descricao-servicos.php">Descrição Serviços</a></li>
							      	<?php if(!isset($_SESSION['id_usuario']) || isset($_SESSION['nivel']) && $_SESSION['nivel'] == 1): ?>
							      		<li class="item-menu"><a href="usuario.php">Usuário</a></li>
										<?php endif; ?>
							      	<li class="item-menu"><a href="perfil.php">Meu Perfil</a></li>
							    	</ul>
							    </div>
					    	</div>
					  	</div>
					</div>
				</div>
			</div>
		</nav>