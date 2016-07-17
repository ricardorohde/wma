<?php
	session_start();
	if(!isset($_SESSION['id_usuario']))
		header('Location: index.php');
	include_once('../functions/include_directory_functions.php');
	includePhpExtension(array('crud'));
?>
<?php require_once '../includes/templates/header.php'; ?>
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
				<button class="btn btn-primary pull-right" onclick="pageRedirectsJs('form-servicos.php')">Novo Serviço</button>
				<table class="table table-striped">
					<legend>Tabela Serviço</legend>
					<thead class="thead">
						<tr>
							<th>#</th>
							<th>Nome</th>
							<th>Imagem</th>
							<th>Editar</th>
							<th>Excluir</th>
						</tr>
					</thead>
					<tbody>
						<?php $data = @read('servicos'); foreach($data as $res):	@extract($res); ?>
						<tr>
							<td><?php echo $id_servico; ?></td>
							<td><?php echo $nm_servico; ?></td>
							<td><?php echo "<img src='../img/uploads/{$img_servico}' alt='' width='50' >" ?></td>
							<td>
							<?php
								echo"<a onclick='displayOnCss();' href='../actions/ServicosController.php?id=$id_servico' class='btn btn-primary'  ><i class='icon-pencil icon-white'></i></a></td>";
							?>
							<td>
							<?php
								$table = 'servicos';
								$page = 'servicos';
								echo"<a href='../actions/ExcluirController.php?id=$id_servico&table=$table&idName=id_servico&page=$page'onclick='return confirmDelete();' class='btn btn-warning'><i class='icon-remove-sign'></i></a>";
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