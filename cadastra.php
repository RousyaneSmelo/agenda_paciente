<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1/css/bootstrap.min.css">

    <title>Agenda Paciente</title>
  </head>
  <body>

	<?php

echo "

<nav class='navbar navbar-expand-lg navbar-light bg-light'>
				  <a class='navbar-brand' href='menu.php'>Agenda Paciente</a>
				  <div class='collapse navbar-collapse' id='navbarNav'>
					<ul class='navbar-nav'>
					  <li class='nav-item active'>
						<a class='nav-link' href='cadastra.php'>Cadastra Pessoa</a>
					  </li>
					</ul>
				  </div>
				</nav>

<form action='checaCadastro.php' method='post'>
<div class='container'>
<div class='form-row'>

<div class='form-group col-md-6'>
<label for='nome'>Nome</label>
<input type='text' class='form-control' id='nome' placeholder='Nome' name='nome'>
</div>
<div class='form-group col-md-6'>
<label for='cpf'>CPF</label>
<input type='text' class='form-control' id='cpf' placeholder='CPF' name='cpf'>
</div>
<div class='form-group col-md-6'>
<label for='telefone'>Telefone</label>
<input type='text' class='form-control' id='telefone' placeholder='Telefone' name='telefone'>
</div>

<div class='form-group col-md-6' >
<label for='email'>Email</label>
<input type='email' class='form-control' id='email' placeholder='Email' name='email'>
</div>
<div class='form-group col-md-6'>
<div class='form-check'>
<input class='form-check-input' type='checkbox' id='medico' name='medico' onclick='verificaCheck()'>
<label class='form-check-label' for='gridCheck'>
Medico
</label>
</div>
</div>
<div class='form-group col-md-6' >
</div>

<div class='form-group col-md-6' id='grupoLogin'>
<label for='login'>Login</label>
<input type='text' class='form-control' id='login' name='login' placeholder='Login'>
</div>
<div class='form-group col-md-6' id='grupoSenha'>
<label for='senha'>Senha</label>
<input type='password' class='form-control' id='senha'  name='senha' placeholder='Senha'>
</div>


</div>
<button type='submit' class='btn btn-primary'>Salvar</button>
</div>
</form>

";

?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script  type="text/javascript" src="bootstrap-4.3.1/jquery-3.3.1.slim.js" ></script>

    <script  type="text/javascript" src="bootstrap-4.3.1/popper.js"></script>

    <script  type="text/javascript" src="bootstrap-4.3.1/js/bootstrap.min.js"></script>

    <script>

    	//Coloca checkbox como checado ao carregar a tela
    	 window.onload = function() {
	    	document.getElementById("medico").checked = true;
	    	verificaCheck();
	    }

	    //verifica estado do checkbox ao clicar nele e esconde imputs
    	function verificaCheck() {

		  var medico = document.getElementById("medico");

		  var login = document.getElementById("grupoLogin");
		  var senha = document.getElementById("grupoSenha");


		  if (medico.checked == false){
		    login.style.display = "none";
		    senha.style.display = "none";
		  } else {
		    login.style.display = "block";
		    senha.style.display = "block";
		  }
		}

    </script>

  </body>
</html>