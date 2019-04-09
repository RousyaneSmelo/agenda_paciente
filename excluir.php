<?php
		$id = $_GET['id'];
		$servidor = mysqli_connect("localhost","root","","agenda_paciente");
		
		mysqli_query($servidor, "delete from pessoa where idpessoa = $id");
		
		header('Location: menu.php');
	

?>