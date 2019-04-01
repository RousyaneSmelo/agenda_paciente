<?php

	session_start();
	
	if($_SESSION['logou'] == 1) {
		
		include "menu.php";
		
		$servidor = mysqli_connect("localhost","root","","agenda_paciente");
		
		$nome = $_POST['nome'];
		$cpf = $_POST['cpf'];
		$telefone = $_POST['telefone'];
		$email = $_POST['email'];
		$medico = isset($_POST['medico']);
		$login = $_POST['login'];
		$senha = $_POST['senha'];



		if(!empty($medico)) {
			$cadastroUsuario = mysqli_query($servidor, "insert into usuario (senha, login) values ('$senha', '$login')");
			$last_id = mysqli_insert_id($servidor);

			$cadastroMedico = mysqli_query($servidor, "insert into pessoa (nome, cpf, telefone, email, login, tipo) values ('$nome', '$cpf', '$telefone', '$email', '$last_id', 'M')");

			if($cadastroMedico){
				echo "Cadastrado com Sucesso!";
			}
		}
		else {
			$cadastroPaciente = mysqli_query($servidor, "insert into pessoa (nome, cpf, telefone, email, tipo) values ('$nome', '$cpf', '$telefone', '$email', 'P')");
			if($cadastroPaciente){
				echo "Cadastrado com Sucesso!";
			}
		}
	}
	else {
		header('Location: index.html');
	}

?>