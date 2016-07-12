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