<?php
 	function rotas(){

	  	$c_path = parse_url('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
 		$rota = array_filter(explode('/',$c_path['path']));

 		$r_validas = array("home","empresa","contato");
 		if(empty($rota[1])){
			require_once("home.php");
		}elseif(in_array($rota[1], $r_validas)){
			require_once($rota[1].".php");
		}else{
			require_once("err404.php");
		}
	}

	rotas();

?>