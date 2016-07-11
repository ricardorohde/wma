<?php require_once '../includes/templates/header.php'; ?>
	<section id="corpo">
		<div class="row-fluid">
			<div class="span10 offset1">
				<?php if(isset($_SESSION['error'])): ?>
					<div class="alert alert-error">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong> <?php echo $_SESSION['error']; unset($_SESSION['error']) ?> </strong>
					</div>
				<?php endif; ?>
				<button class="btn btn-primary pull-right" href="#tab" onclick="pageRedirects('contatos.php')"><i class="icon-arrow-left icon-white"></i> Voltar</button>
				<legend class="legend-form">Incluir/Alterar Tabela Contatos</legend>
				<form class="form-horizontal form-crud"  name="form" action="../actions/ContatosController.php" method="post" enctype="multipart/form-data" >
					<div class="control-group">
						<label class="control-label" for="nomeContato">Contato</label>
						<div class="controls">
							<input type="text" class="span6" name="nomeContato" id="nomeContato" placeholder="Nome do Contato" required>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="descricaoContato">Descrição</label>
						<div class="controls">
							<input type="text" class="span6" name="descricaoContato" id="descricaoContato" placeholder="Descrição ou link do contato" required>
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