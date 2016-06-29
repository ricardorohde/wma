<?php require_once('../includes/templates/header.php'); ?>
	<section>
		<div class="row-fluid">
			<div class="span10 offset1">
				<h2 class="text-info">Dúvidas, preços e orçamentos entre em contato conosco através de nossos canais! </h2>
			</div>
		</div> 
		<div class="row-fluid">
			<div class="span5 offset1 conteudo-form">
				<form class="contato" name="form" >
					<div class="control-group">
						<label class="control-label text-info" for="inputNome">Nome</label>
						<div class="controls">
							<input class="span11" type="text" name="nome" class="inputNome" id="inputNome" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label text-info" for="inputEmail">Email</label>
						<div class="controls">
							<input class="span11" type="email" name="nome" id="inputEmail" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label text-info" for="inputAssunto">Assunto</label>
						<div class="controls">
							<input class="span11" type="text" id="inputAssunto" required>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label text-info" for="inputTexto">Mensagem</label>
						<div class="controls">
							<textarea class="span11" rows="8" name="texto" id="inputTexto" required></textarea>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<input type="submit" name="enviar" value="Enviar" class="btn btn-info" />
							<input type="reset" name="limpar" value="Limpar" class="btn btn-info" />
						</div>
					</div>
				</form>
			</div>
			<div class="row-fluid">
				<div class="span5 offset1 conteudo-contatos">
					<ul class="unstyled">
						<li><img src="../img/email.png" class="img-responsive" alt=""> <span>aaaaaa@gmail.com</span> </li>
						<li><img src="../img/telefone.jpg" class="img-responsive" alt=""> <span>(31) 9999-8888 / (31) 4545-8989</span> </li>
						<li><img src="../img/face.jpg" class="img-responsive" alt=""> <span>aaaaaa@gmail.com</span> </li>
						<li><img src="../img/twitter.png" class="img-responsive" alt=""><span>aaaaaa@gmail.com</span> </li>
					</ul>
					<!-- <div class="row-fluid">
						<div class="span10">

						</div>
					</div>
					<div class="row-fluid">
						<div class="span10">

						</div>
					</div>
					<div class="row-fluid">
						<div class="span10">

						</div>
					</div> -->
				</div>
			</div>
		</div>
	</section>
<?php require_once('../includes/templates/footer.php'); ?>