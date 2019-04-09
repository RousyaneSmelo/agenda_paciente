<?php
	session_destroy();
	session_start();

	$login = $_POST['login'];
	$senha = $_POST['senha'];
	
	$servidor = mysqli_connect("localhost","root","","agenda_paciente");

	print($senha);

	$resultado = mysqli_query($servidor, "select * from usuario where login = '$login' and senha = '$senha'");
	
	
	$numLinhas = mysqli_num_rows($resultado);
	
	if($numLinhas != 0) {
		$_SESSION['logou'] = 1;
		header('Location: principal.php');
	}
	else {
		$_SESSION['logou'] = 0;
		header('Location: index.html');
	}

?>




