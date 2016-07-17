<?php
	session_start();
	if(!isset($_SESSION['id_usuario']))
		header('Location: index.php');
	include_once('../functions/crud.php');
	include_once ('../includes/templates/header.php');
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
				<button class="btn btn-primary pull-right" href="" onclick="pageRedirectsJs('descricao-servicos.php')"><i class="icon-arrow-left icon-white"></i> Voltar</button>
				<legend class="legend-form">Incluir/Alterar Tabela Descrição dos Servicos</legend>
				<form class="form-horizontal form-crud"  name="form" action="../actions/DescricaoServicosController.php" method="post" enctype="multipart/form-data" >
					<div class="control-group">
						<label class="control-label" for="nomeServico">Serviço</label>
						<div class="controls">
							<select class="span6" name="selectServico" id="nomeServico" required>
								<option value="" selected="selected" disabled="disabled" >Escolha o serviço</option>
								<?php $data = @read('servicos', 'id_servico, nm_servico'); ?>
								<?php foreach($data as $res):	extract($res); ?>
								<option value="<?php echo $id_servico; ?>"><?php echo $nm_servico ?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<input type="hidden" name="operacao" value="<?php $operacao = (isset($_SESSION['operacao'])) ? $_SESSION['operacao'] : '0' ; echo $operacao; unset($_SESSION['operacao']); ?>">
					<div class="control-group">
						<label class="control-label" for="descricaoServico">Descrição</label>
						<div class="controls">
							<textarea class="span6" name="descricaoServico" id="descricaoServico" placeholder="Descrição do Servico" rows="5" value="<?php $descriptionService = (isset($_SESSION['descricaoServicos'])) ? $_SESSION['descricaoServicos'] : '' ; echo $descriptionService; unset($_SESSION['descricaoServicos']); ?>" required></textarea>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<input type="submit" class="btn btn-inverse" name="enviar" value="enviar">
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
<?php require_once '../includes/templates/footer.php'; ?>