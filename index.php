<?php 

	require_once("config.php");

	/*$sql = new sql();

	$usuarios = $sql->select("SELECT * FROM tb_usuarios");

	echo json_encode($usuarios);*/


	//$root = new usuario();
	//$root->loadbyId(1);
	//echo $root;

	//$lista = usuario::getList();
	//echo json_encode($lista);

	//$search = usuario::search("jo");
	//echo json_encode($search);

	//$usuario = new usuario();
	//$usuario->login("joao", "1234x5");
	//echo $usuario;

	//$aluno = new usuario("aluno", "124325");
	//$aluno->insert();
	//echo $aluno;

	//$usuario = new usuario();
	//$usuario->loadbyId(1);
	//$usuario->update("professor xavier", "1313891");
	//echo $usuario;

	$usuario = new usuario(2);
	$usuario->delete();
	echo $usuario;
?>