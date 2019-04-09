<?php

		
		include "menu.php";
		
		$servidor = mysqli_connect("localhost","root","","agenda_paciente");
		
		$id = $_GET['id'];

		$nome = $_POST['nome'];
		$telefone = $_POST['telefone'];
		$email = $_POST['email'];

		if(empty($id)){
			$medico = isset($_POST['medico']);
			$login = $_POST['login'];
			$senha = $_POST['senha'];
			$cpf = $_POST['cpf'];

			if(!empty($medico)) {
			$cadastroUsuario = mysqli_query($servidor, "insert into usuario (senha, login) values ('$senha', '$login')");
			$last_id = mysqli_insert_id($servidor);

			$cadastroMedico = mysqli_query($servidor, "insert into pessoa (nome, cpf, telefone, email, login, tipo) values ('$nome', '$cpf', '$telefone', '$email', '$last_id', 'M')");

			}else {
				$cadastroPaciente = mysqli_query($servidor, "insert into pessoa (nome, cpf, telefone, email, tipo) values ('$nome', '$cpf', '$telefone', '$email', 'P')");
			}

			header('Location: menu.php');

		}else{
			$cadastroPaciente = mysqli_query($servidor, "update pessoa set nome = '$nome', telefone = '$telefone', email = '$email' where idpessoa = '$id' ");
			header('Location: menu.php');
		}

?>