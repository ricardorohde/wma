<?php 
	session_start();
	if(!isset($_SESSION['id_usuario']))
		header('Location: index.php');
	include_once('../includes/templates/header.php');
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
				<button class="btn btn-primary pull-right" href="" onclick="pageRedirectsJs('servicos.php')"><i class="icon-arrow-left icon-white"></i> Voltar</button>
				<legend class="legend-form">Incluir/Alterar Tabela Servicos</legend>
				<form class="form-horizontal form-crud"  name="form" action="../actions/ServicosController.php" method="post" enctype="multipart/form-data" >
					<div class="control-group">
						<label class="control-label" for="nomeServico">Nome</label>
						<div class="controls">
							<input type="text" class="span6" name="nomeServico" id="nomeServico" placeholder="Nome do Servico" value="<?php $nameServico = (isset($_SESSION['nomeServico'])) ? $_SESSION['nomeServico'] : '' ; echo $nameServico; unset($_SESSION['nomeServico']); ?>" required>
						</div>
					</div>
					<input type="hidden" name="operacao" value="<?php $operacao = (isset($_SESSION['operacao'])) ? $_SESSION['operacao'] : '0' ; echo $operacao; unset($_SESSION['operacao']); ?>">
					<div class="control-group">
						<label class="control-label" for="uploadBtn">Imagem</label>
						<div class="controls">
							<input  type="text" class="span6"  id="uploadFile" placeholder="Escolha a imagem" disabled="disabled" />
							<div class="fileUpload btn btn-primary">
								<span>Upload</span>
								<input id="uploadBtn" type="file" name="arquivo" class="upload" onchange="filePath();" required>
							</div>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<input type="submit" class="btn btn-inverse" name="enviar"  value="Enviar">
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
<?php require_once '../includes/templates/footer.php'; ?>