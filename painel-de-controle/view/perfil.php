<?php 
	session_start();
	if(!isset($_SESSION['id_usuario']))
		pageRedirects('../view/index.php');
	$id = $_SESSION['id_usuario'];
	include_once('../functions/crud.php');
	include_once ('../includes/templates/header.php');
?>
	<section id="corpo">
		<div class="row-fluid">
			<div class="span10 offset1 ">
				<legend class="legend-form">Meus Dados</legend>
				<div class="dados-usuario">
					<table class="table table-condensed">
						<thead>
							<tr class="info">
								<th>Nome</th>
								<th>Email</th>
								<th>User Name</th>
							</tr>
						</thead>
						<tbody>
						<?php $data = read('usuario', '*', "WHERE id_usuario = '$id'") ?>
						<?php foreach($data as $res): extract($res); ?>
							<tr>
								<td><?php echo $nome; ?></td>
								<td><?php echo $email; ?></td>
								<td><?php echo $user_name; ?></td>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span10 offset1">
				<?php if(isset($_SESSION['error'])): ?>
					<div class="alert alert-error">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong> <?php echo $_SESSION['error']; unset($_SESSION['error']) ?> </strong>
					</div>
				<?php endif; ?>
				<?php if(isset($success)): ?>
					<div class="alert alert-error">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong> <?php echo $success; unset($success) ?> </strong>
					</div>
				<?php endif; ?>
				<legend class="legend-form">Editar Dados</legend>
				<form class="form-horizontal form-crud" id="form"  name="form" onsubmit="return validateUserEditForm();" action="../actions/PerfilController.php" method="post" enctype="multipart/form-data" >
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
					<input type="hidden" id="operacao" name="operacao" value="<?php echo $id_usuario ; ?> ">
					<div class="control-group">
						<div class="controls">
							<input type="submit" class="btn btn-inverse" name="alterar" value="Alterar">
							<input type="reset" class="btn btn-inverse" name="limpar" value="Limpar">
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
<?php require_once '../includes/templates/footer.php'; ?>