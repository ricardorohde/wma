<?php require_once '../includes/templates/header.php'; ?>
	<section>
		<div class="row-fluid">
			<div class="span10 offset1">
				<div class="tabbable div-tab"> <!-- Only required for left/right tabs -->
					<ul class="nav nav-tabs ul-abas">
						<li class="active"><a href="#tab1" data-toggle="tab">READ - Contatos</a></li>
						<li><a href="#tab2" data-toggle="tab">CREAT/EDIT - Contatos</a></li>
					</ul>
					<div class="tab-content div-tabs">
						<div class="tab-pane active tab tab1" id="tab1">
							<table class="table table-striped">
								<legend>Tabela Contatos</legend>
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
									<tr>
										<th scope="row">1</th>
										<td>Mark</td>
										<td>Otto</td>
										<td>@mdo</td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<th scope="row">2</th>
										<td>Jacob</td>
										<td>Thornton</td>
										<td>@fat</td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<th scope="row">3</th>
										<td>Larry</td>
										<td>the Bird</td>
										<td>@twitter</td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<th scope="row">4</th>
										<td>Larry</td>
										<td>the Bird</td>
										<td>@twitter</td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<th scope="row">5</th>
										<td>Larry</td>
										<td>the Bird</td>
										<td>@twitter</td>
										<td></td>
										<td></td>
									</tr>
								</tbody>
							</table>
							<button class="btn btn-primary" >Novo Contato</button>
						</div>
						<div class="tab-pane tab2" id="tab2">
							<form class="form-horizontal">
								<div class="control-group">
									<label class="control-label" for="nomeContato">Contato</label>
									<div class="controls">
										<input type="text" class="span6" id="nomeContato" placeholder="Nome do Contato" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="descricaoContato">Descrição</label>
									<div class="controls">
										<input type="text" class="span6" id="descricaoContato" placeholder="Descrição ou link do contato" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="iconeContato">IMG/Ícone</label>
									<div class="controls">
										<input type="text" class="span6" id="uploadFile" placeholder="Escolha a imagem" disabled="disabled" />
										<div class="fileUpload btn btn-primary">
											<span>Upload</span>
											<input id="uploadBtn" type="file" class="upload" onchange="filePath();" required>
										</div>
									</div>
								</div>
								<div class="control-group">
									<div class="controls">
										<input type="submit" class="btn btn-inverse" value="Criar">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php require_once '../includes/templates/footer.php'; ?>