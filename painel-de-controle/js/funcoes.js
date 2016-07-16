this.resizeDiv = function () {
	var windowHeight = window.innerHeight;
	var windowWidth = window.innerWidth;
	// a diferença do offsetHeight para o clientHeight é que ele retorna a altura incluindo o padding, border e scrollbar.
	//var alt = document.getElementById('login').clientHeight;
	if(windowWidth > 765){
		var heightDiv = document.getElementById('login').offsetHeight;
		var newHeightDiv = ((windowHeight - heightDiv) / 2);
		var divLogin = document.getElementById('login');
		divLogin.style.marginTop  = newHeightDiv+'px';
	}else{
		var heightDiv = document.getElementById('login').offsetHeight;
		var newHeightDiv = ((windowHeight - heightDiv) / 2) - 50;
		var divLogin = document.getElementById('login');
		divLogin.style.marginTop  = newHeightDiv+'px';
	}
}

this.filePath = function (){
	document.getElementById('uploadFile').value = document.getElementById('uploadBtn').value;
};

function pageRedirectsJs(path){
	window.location.href = path;
}

function funcao(){
	document.getElementById('aba2').click();
}


this.validaForm = function() {
	var arrayExtesion = ['jpg', 'jpeg', 'png', 'gif'];
	var fileSize = document.getElementById("arquivo").files[0].size;
	var pathImage = document.getElementById('arquivo').value;
	var getExtension = pathImage.indexOf('.');
	if(getExtension != -1)
		var extension = pathImage.substr(getExtension + 1);
		if(arrayExtesion.indexOf(extension) == -1){
			alert('Arquivo não é válido! Somente imagens: jpg, jpeg, png, gif !');
			return false;
		}
		if(fileSize > 1048576){ //MAX_FILE_SIZE = 1048576 Bytes
			alert("TAMANHO DO ARQUIVO EXCEDE O PERMITIDO (1MB)!");
			return false;
		}
	else{
		alert('Arquivo não é válido! Somente imagens: jpg, jpeg, png, gif !');
		return false;
	}
}

this.confirmDelete = function (dados){
	var resposta = confirm("Deseja remover esse registro?");
	if (resposta != true)
		return false;
}

function IsEmail(email){
    var exclude=/[^@-.w]|^[_@.-]|[._-]{2}|[@.]{2}|(@)[^@]*1/;
    var check=/@[w-]+./;
    var checkend=/.[a-zA-Z]{2,3}$/;
    if(((email.search(exclude) != -1)||(email.search(check)) == -1)||(email.search(checkend) == -1)){return false;}
    else {return true;}
}

this.validateUserForm = function () {
	var name = document.getElementById('nomeUsuario').value;
	var email = document.getElementById('emailUsuario').value;
	var userName = document.getElementById('userName').value;
	var password = document.getElementById('senhaUsuario').value;
	var level = document.getElementById('nivelUsuario').value;

	//variaveis que arnazena expressões regulares para validação de email usuario e senha
	var exclude=/[^@-.w]|^[_@.-]|[._-]{2}|[@.]{2}|(@)[^@]*1/;
	var check=/@[w-]+./;
	var checkend=/.[a-zA-Z]{2,3}$/;
	var userNameCheck =/[a-zA-Z0-9]{8,12}$/;
	var passwordCheck =/[a-zA-Z0-9]{6,8}$/;

	if(name.length < 3){
		alert('Digite um nome válido');
		document.getElementById('nomeUsuario').focus();
		return false;
	}
	if(((email.search(exclude) != -1)||(email.search(check)) == -1)||(email.search(checkend) == -1)){
		alert('Digite um nome válido');
		document.getElementById('emailUsuario').focus();
		return false;
	}
	if(userName.length < 8 && userName.length > 12){
		alert('Digite um nome de usuário válido');
		document.getElementById('userName').focus();
		return false;
	}
	if(password.length < 6 && password.length > 8 ){
		alert('Digite uma senha válida');
		document.getElementById('senhaUsuario').focus();
		return false;	
	}
	if(level != '1' && level != '2'){
		alert('Escolha um valor de Nivel do usuário');
		document.getElementById('nivelUsuario').focus();
		return false;	
	}

};

this.validateUserEditForm = function () {
	var userName = document.getElementById('userName').value;
	var password = document.getElementById('senhaUsuario').value;

	//variaveis que arnazena expressões regulares para validação de email usuario e senha
	var userNameCheck =/[a-zA-Z0-9]{8,12}$/;
	var passwordCheck =/[a-zA-Z0-9]{6,8}$/;

	if(userName.length < 8 && userName.length > 12){
		alert('Digite um nome de usuário válido');
		document.getElementById('userName').focus();
		return false;
	}
	if(password.length < 6 && password.length > 8 ){
		alert('Digite uma senha válida');
		document.getElementById('senhaUsuario').focus();
		return false;	
	}
};