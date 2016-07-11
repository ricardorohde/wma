<?php
	include_once('../functions/include_directory_functions.php');
	includePhpExtension(array('crud'));
			
?>
<?php require_once '../includes/templates/header.php'; ?>
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
			<button class="btn btn-primary pull-right" href="#tab" onclick="pageRedirects('form-contatos.php')">Novo Contato</button>
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
					<?php 
						$data = @read('contatos');
						foreach($data as $res):
							extract($res);
					 ?>
					<tr>
						<td><?php echo $id_contato; ?></td>
						<td><?php echo $nm_contato; ?></td>
						<td><?php echo $ds_contato; ?></td>
						<td><?php echo "<img src='../img/uploads/{$icon_contato}' alt='' width='25' >" ?></td>
						<td><a href="#" class="btn btn-primary"><i class="icon-pencil icon-white"></i></a></td>
						<td><?php
							$table = 'contatos';
							echo"<a href='../actions/excluir.php?id=$id_contato&table=$table'onclick='return confirmDelete();' class='btn btn-warning'><i class='icon-remove-sign'></i></a>";?>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
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
				<legend class="legend-form">Alterar Dados  Tabela Contatos</legend>
				<form class="form-horizontal form-crud"  name="form" action="../actions/ContatosController.php" method="post" enctype="multipart/form-data" >
					<div class="control-group">
						<label class="control-label" for="nomeContato">Contato</label>
						<div class="controls">
							<input type="text" class="span6" name="nomeContato" id="nomeContato" placeholder="Nome do Contato" <?php  echo "value='".if(isset($_SESSION['nameContato']))."'"; ?> required>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="descricaoContato">Descrição</label>
						<div class="controls">
							<input type="text" class="span6" name="descricaoContato" id="descricaoContato" placeholder="Descrição ou link do contato" <?php  echo "value='".if(isset($_SESSION['descricaoContato']))."'"; ?> required>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="iconeContato">IMG/Ícone</label>
						<div class="controls">
							<span class="label label-info">A imagem/icone deve ter o tamanho de 50 pixel de largura e altura exatos</span><br/>
							<input type="text" class="span4" id="uploadFile" placeholder="Escolha a imagem" disabled="disabled" />
							<div class="fileUpload btn btn-primary">
								<span>Upload</span>
								<input id="uploadBtn" type="file" class="upload" name="arquivo" id="arquivo" onchange="filePath();" required>
							</div>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<input type="submit" class="btn btn-inverse" name="enviar" value="Enviar">
						</div>
					</div>
				</form>
			</div>
		</div>
</section>
<?php require_once '../includes/templates/footer.php'; ?>