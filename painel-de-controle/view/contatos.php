<?php	
	session_start();
	if(!isset($_SESSION['id_usuario']))
		header('Location: index.php');
	include('../functions/crud.php');	
	include_once('../includes/templates/header.php');
?>
<section id="corpo" >
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
			<button class="btn btn-primary pull-right" href="#tab" onclick="pageRedirectsJs('form-contatos.php')">Novo Contato</button>
			<table class="table table-striped table-bordered table-crud">
				<legend class="table">Dados Tabela Contatos</legend>
				<thead class="thead">
					<tr>
						<th>#</th>
						<th>Nome</th>
						<th>Descrição</th>
						<th>Icone</th>
						<th>Editar</th>
						<th>Excluir</th>
					</tr>
				</thead>
				<tbody>
					<?php $data = @read('contatos'); foreach($data as $res):	extract($res); ?>
					<tr>
						<td><?php echo $id_contato; ?></td>
						<td><?php echo $nm_contato; ?></td>
						<td><?php echo $ds_contato; ?></td>
						<td><?php echo "<img src='../img/uploads/{$icon_contato}' alt='' width='25' >" ?></td>
						<td>
						<?php
							echo"<a onclick='displayOnCss();' href='../actions/ContatosController.php?id=$id_contato' class='btn btn-primary'  ><i class='icon-pencil icon-white'></i></a></td>";
						?>
						<td>
						<?php
							$table = 'contatos';
							$page = 'contatos';
							echo"<a href='../actions/ExcluirController.php?id=$id_contato&table=$table&idName=id_contato&page=$page'onclick='return confirmDelete();' class='btn btn-warning'><i class='icon-remove-sign'></i></a>";
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