<?php 

	require_once("config.php");

	/*$sql = new sql();

	$usuarios = $sql->select("SELECT * FROM tb_usuarios");

	echo json_encode($usuarios);*/


	$root = new usuario();

	$root->loadbyId(1);

	echo $root;
?>