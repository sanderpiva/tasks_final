<?php

	include "conexao.php";

	$titulo = $_POST['title'];
	$descricao = $_POST['description'];
	$status = $_POST['status'];

	$sql = "Insert into tabelatasks VALUES('NULL', '$titulo','$descricao', $status)";
	$res = mysqli_query($conn, $sql);
	$lin = mysqli_affected_rows($conn);
	if ($lin > 0) {
		header("Location: ../model/gerenciador.php?msg=inserido");
		exit();
	} else {
		header("Location: ../model/gerenciador.php?msg=erro_inserir");
		exit();
	}

?>