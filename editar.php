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
	$id = $_GET['id'];
	$servidor = mysqli_connect("localhost","root","","agenda_paciente");
	$pessoas = mysqli_query($servidor, "select * from pessoa where idpessoa = $id");
	$pessoaAlterar = "";
	while($pessoa = mysqli_fetch_array($pessoas))
	{
		$pessoaAlterar = $pessoa;
	}	

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

<form action='checaCadastro.php?id=".$pessoaAlterar['idpessoa']."' method='post'>
<div class='container'>
<div class='form-row'>

<div class='form-group col-md-6'>
<label for='nome'>Nome</label>
<input type='text' class='form-control' id='nome' placeholder='Nome' name='nome' value='".$pessoaAlterar['nome']."'>
</div>

<div class='form-group col-md-6'>
<label for='telefone'>Telefone</label>
<input type='text' class='form-control' id='telefone' placeholder='Telefone' name='telefone' value='".$pessoaAlterar['telefone']."'>
</div>

<div class='form-group col-md-6' >
<label for='email'>Email</label>
<input type='email' class='form-control' id='email' placeholder='Email' name='email' value='".$pessoaAlterar['email']."'>
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

  </body>
</html>