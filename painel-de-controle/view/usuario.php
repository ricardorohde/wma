<?php
	session_start();
	if(!isset($_SESSION['id_usuario']) || isset($_SESSION['nivel']) && $_SESSION['nivel'] == 2)
		header('Location: index.php');
	include_once('../functions/crud.php');
	include_once('../includes/templates/header.php');
?>
	<section id="corpo">
		<div class="row-fluid">
			<div class="span10 offset1">
				<?php if(isset($_SESSION['success'])): ?>
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong> <?php echo $_SESSION['success']; unset($_SESSION['success']) ?> </strong>
					</div>
				<?php elseif(isset($_SESSION['error'])): ?>
					<div class="alert alert-error">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong> <?php echo $_SESSION['error']; unset($_SESSION['error']) ?> </strong>
					</div>
				<?php endif; ?>
				<button class="btn btn-primary pull-right" href="#" onclick="pageRedirectsJs('form-usuario.php')">Novo Contato</button>
				<table class="table table-striped">
					<legend>Tabela Usuários</legend>
					<thead class="thead">
						<tr>
							<th>#</th>
							<th>Nome</th>
							<th>Email</th>
							<th>User Name</th>
							<th>Nivel Acesso</th>
							<th>Excluir</th>
						</tr>
					</thead>
					<tbody>
						<?php $data = @read('usuario'); foreach($data as $res):	@extract($res); ?>
						<tr>
							<td><?php echo $id_usuario; ?></td>
							<td><?php echo $nome; ?></td>
							<td><?php echo $email; ?></td>
							<td><?php echo $user_name; ?></td>
							<td><?php echo $nivel; ?></td>
							<td>
							<?php
								$table = 'usuario';
								$page = 'usuario';
								echo"<a href='../actions/ExcluirController.php?id=$id_usuario&table=$table&idName=id_usuario&page=$page'onclick='return confirmDelete();' class='btn btn-warning'><i class='icon-remove-sign'></i></a>";
							?>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</section>
<?php require_once '../includes/templates/footer.php'; ?>