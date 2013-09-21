<?php
	
	//Action Login
	include "connect.php";

	//Pegando valores do form
	$user_login 	= $_POST["login"];
	$user_senha		= $_POST["senha"];
	$user_nivel		= $_POST["nivel"];

	//Checando com o banco
	$query 		= mysql_query("SELECT * FROM `front-caixa`.`$user_nivel` 
							   WHERE login='$user_login' AND senha='$user_senha' 
							  ") or die (mysql_error());

	$verifica	= mysql_num_rows($query);

	if($verifica == 1){
		header("Location: ../../clientes.php");
	}else{
		echo '<script type="text/javascript">alert("Ops! Mas você não pode entrar aqui")</script>';
		echo '<script type="text/javascript">window.location = "../../index.php"</script>';
	}

?>