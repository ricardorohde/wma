<?php require_once '../includes/templates/header.php'; ?>
	<section id="corpo">
		<div class="row-fluid">
			<div class="span10 offset1">
				<div class="tabbable div-tab"> <!-- Only required for left/right tabs -->
					<ul class="nav nav-tabs ul-abas">
						<li class="active"><a href="#tab1" data-toggle="tab">READ - Usuários</a></li>
						<li><a href="#tab2" data-toggle="tab">CREAT/EDIT - Usuários</a></li>
					</ul>
					<div class="tab-content div-tabs">
						<div class="tab-pane active tab tab1" id="tab1">
							<table class="table table-striped">
								<legend>Tabela Contatos</legend>
								<thead class="thead">
									<tr>
										<th>#</th>
										<th>Nome</th>
										<th>Sobrenome</th>
										<th>Email</th>
										<th>User</th>
										<th>Nivel Acesso</th>
										<th>Editar</th>
										<th>Excluir</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>Mark</td>
										<td>Otto</td>
										<td>Otto</td>
										<td>@mdo</td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<th scope="row">2</th>
										<td>Jacob</td>
										<td>Thornton</td>
										<td>Thornton</td>
										<td>@fat</td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<th scope="row">3</th>
										<td>Larry</td>
										<td>the Bird</td>
										<td>@twitter</td>
										<td>@twitter</td>
										<td></td>
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
									<label class="control-label" for="nomeUsuario">Nome</label>
									<div class="controls">
										<input type="text" class="span6" id="nomeUsuario" placeholder="Nome do Usuário" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="sobrenomeUsuario">Sobrenome</label>
									<div class="controls">
										<input type="text" class="span6" id="sobrenomeUsuario" placeholder="Sobrenome do Usuário" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="emailUsuario">Email</label>
									<div class="controls">
										<input type="email" class="span6" id="emailUsuario" placeholder="Email do Usuário" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="user">User</label>
									<div class="controls">
										<input type="text" class="span6" id="user" placeholder="user do Usuário" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="senhaUsuario">Senha</label>
									<div class="controls">
										<input type="password" class="span6" id="senhaUsuario" placeholder="Senha do Usuário" required>
									</div>
								</div>
								<div class="control-group">
									<div class="controls">
										<input type="hidden" class="span6" id="descricaoContato" placeholder="Descrição ou link do contato" required >
									</div>
								</div>
								<div class="control-group">
									<div class="controls">
										<input type="submit" class="btn btn-inverse" value="Cadastrar">
										<input type="reset" class="btn btn-inverse" name="limpar" value="Limpar">
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