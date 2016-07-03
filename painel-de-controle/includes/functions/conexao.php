<?php
	if($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1'){
		define('DB_HOST', 'localhost', true);
		define('DB_USER', 'root', true);
		define('DB_PASS', '', true);
		define('DB_NAME', 'wma', true);
	}
	// elseif($_SERVER['SERVER_NAME'] === '' || $_SERVER['SERVER_NAME'] === ''){
	//     define('DB_HOST', 'mysql.hostinger.com.br', true);
	//     define('DB_USER', 'u903258592_marfi', true);
	//     define('DB_PASS', 'hercules22', true);
	//     define('DB_NAME', 'u903258592_marfi', true);
	// }
	function dbConect() {
		@$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		mysqli_set_charset($link, 'utf8');
		if(!$link)
			echo "Nao conectou ao Banco de Dados ".mysqli_connect_error();
		return $link;
	};

	function dbClose($link) {
		@mysqli_close($link) or die(mysqli_error($link));
	};

	
	

