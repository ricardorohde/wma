<?php 
	session_start();
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
				<button class="btn btn-primary pull-right" onclick="pageRedirectsJs('form-descricao-servicos.php')">Nova Descrição</button>
				<table class="table table-striped">
					<legend>Tabela Descrição dos Serviços</legend>
					<thead class="thead">
						<tr>
							<th>#</th>
							<th>Serviço</th>
							<th>Descrições</th>
							<th>Editar</th>
							<th>Excluir</th>
						</tr>
					</thead>
					<tbody>
						<?php $data = @read('descricao_servicos', 'descricao_servicos.*, servicos.nm_servico', "INNER JOIN servicos ON descricao_servicos.Id_fk_servico = servicos.id_servico"); foreach($data as $res):	@extract($res); ?>
						<tr>
							<td><?php echo $id_servicos; ?></td>
							<td><?php echo $nm_servico; ?></td>
							<td><?php echo $ds_servicos; ?></td>
							<td>
							<?php	echo"<a onclick='displayOnCss();' href='../actions/DescricaoServicosController.php?id=$id_servicos' class='btn btn-primary' ><i class='icon-pencil icon-white'></i></a></td>";?>
							<td>
							<?php
								$table = 'descricao_servicos';
								$page = 'descricao-servicos';
								echo"<a href='../actions/excluir.php?id=$id_servicos&table=$table&idName=id_servicos&page=$page'onclick='return confirmDelete();' class='btn btn-warning'><i class='icon-remove-sign'></i></a>";
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