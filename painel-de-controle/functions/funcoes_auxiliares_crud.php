<?php 

//========= Tabela Contatos =================//

function criaArrayTabelaContatos  ($nm_contato, $ds_contato, $icon_contato, $crud) {
	if(!isset($nm_contato, $ds_contato, $icon_contato))
		die("Um ou mais parametro esta com indefinido");
	if( empty($nm_contato) || empty($ds_contato) || empty($icon_contato) )
		die("Um ou mais parametros estar com valor vazio");

	if($crud == 'create'){	
		$array = array(
				'nm_contato'   => $nm_contato,
				'ds_contato'   => $ds_contato,
				'icon_contato' => $icon_contato
			);
		return $array;
	}elseif($crud == 'update'){
		$array = array(
			'nm_contato'   => $nm_contato,
			'ds_contato'   => $ds_contato,
			'icon_contato' => $icon_contato
		);
		$newArray = array();
		foreach($array as $key => $value){
			if($value != null)
				$newArray[$key] = $value;
		}
		return $newArray;
	}else
		die('Paramantro "$crud" foi passado de maneira errada para a função ("criaArrayTabelaContato")');
};

//========= Tabela Serviço =================//

function criaArrayTabelaServico  ($nm_servico, $img_servico, $crud) {
	if(!isset($nm_servico, $img_servico))
		die("Um ou mais parametro esta com indefinido");
	if( empty($nm_servico) || empty($img_servico) )
		die("Um ou mais parametros estar com valor vazio");

	if($crud == 'create'){	
		$array = array(
				'nm_servico'   => $nm_servico,
				'img_servico'   => $img_servico
			);
		return $array;
	}elseif($crud == 'update'){
		$array = array(
				'nm_servico'   => $nm_servico,
				'img_servico'   => $img_servico
			);
		$newArray = array();
		foreach($array as $key => $value){
			if($value != null)
				$newArray[$key] = $value;
		}
		return $newArray;
	}else
		die('Paramantro "$crud" foi passado de maneira errada para a função ("criaArrayTabelaServico")');
};

//========= Tabela Serviços =================//

function criaArrayTabelaServicos  ($id_fk_servico, $ds_servicos, $crud) {
	if(!isset($id_fk_servico, $ds_servicos))
		die("Um ou mais parametro esta com indefinido");
	if( empty($id_fk_servico) || empty($ds_servicos) )
		die("Um ou mais parametros estar com valor vazio");

	if($crud == 'create'){	
		$array = array(
				'id_fk_servico'   => $id_fk_servico,
				'ds_servicos'   => $ds_servicos
			);
		return $array;
	}elseif($crud == 'update'){
		$array = array(
				'id_fk_servico'   => $id_fk_servico,
				'ds_servicos'   => $ds_servicos
			);
		$newArray = array();
		foreach($array as $key => $value){
			if($value != null)
				$newArray[$key] = $value;
		}
		return $newArray;
	}else
		die('Paramantro "$crud" foi passado de maneira errada para a função ("criaArrayTabelaServicos")');
};
