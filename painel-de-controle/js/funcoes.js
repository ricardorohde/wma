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