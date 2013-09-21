<?php
	
	//Conexao com banco

	//Conexao info
	$db_host	= "localhost";
	$db_user	= "root";
	$db_pass	= "";
	$db_name	= "font-caixa";

	//Fazendo Conexao
	$db_connect = mysql_connect("$db_host","$db_user","$db_pass");

	if(!$db_connect){
		die ('Eicha lala, algo de errado ao conectar com o banco :(');
	}else{
		mysql_select_db($db_name);
	}

?>