<?php 
	session_start();
	if(!isset($_SESSION['id_usuario']) || isset($_SESSION['nivel']) && $_SESSION['nivel'] == 2)
		header('Location: index.php');
	include_once '../includes/templates/header.php';
?>
	<section id="corpo">
		<div class="row-fluid">
			<div class="span10 offset1">
				<?php if(isset($_SESSION['error'])): ?>
					<div class="alert alert-error">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong> <?php echo $_SESSION['error']; unset($_SESSION['error']) ?> </strong>
					</div>
				<?php endif; ?>
				<button class="btn btn-primary pull-right" href="" onclick="pageRedirectsJs('usuario.php')"><i class="icon-arrow-left icon-white"></i> Voltar</button>
				<legend class="legend-form">Incluir Usuários</legend>

				<form class="form-horizontal form-crud" id="form"  name="form" onsubmit="return validateUserForm();" action="../actions/UsuarioController.php" method="post" enctype="multipart/form-data" >
					<div class="control-group">
						<label class="control-label" for="nomeUsuario">Nome</label>
						<div class="controls">
							<input type="text" class="span6" id="nomeUsuario" name="nomeUsuario" placeholder="Nome do Usuário" >
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="emailUsuario">Email</label>
						<div class="controls">
							<input type="email" class="span6" id="emailUsuario" name="emailUsuario" placeholder="Email do Usuário" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="user">User Name</label>
						<div class="controls">
							<input type="text" class="span6" id="userName" name="userName" placeholder="username" pattern="[a-zA-Z0-9]{8,12}$" maxlength="12" minlength="8" required>
							<span class="label label-info">Podem conter de 8 a 12 caracteres: letras maiúsculas, minúsculas e números</span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="senhaUsuario">Senha:</label>
						<div class="controls">
							<input type="password" class="span6" id="senhaUsuario" name="senhaUsuario" placeholder="Senha do Usuário" pattern="[a-zA-Z0-9]{6,8}$" required>
							<span class="label label-info">Podem conter de 6 a 8 caracteres: letras maiúsculas, minúsculas e números</span><br>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="nivelUsuario">Nível</label>
						<div class="controls">
							<select class="span6" id="nivelUsuario" name="nivelUsuario" required  >
								<option value="2">2</option>
								<option value="1">1</option>
							</select>
						</div>
					</div>
					<input type="hidden" id="operacao" name="operacao" value="0">
					<div class="control-group">
						<div class="controls">
							<input type="submit" class="btn btn-inverse" name="cadastrar" value="Cadastrar">
							<input type="reset" class="btn btn-inverse" name="limpar" value="Limpar">
						</div>
					</div>
				</form>
			
			</div>
		</div>
	</section>
<?php require_once '../includes/templates/footer.php'; ?>