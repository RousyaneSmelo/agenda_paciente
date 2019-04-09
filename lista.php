</br>
<div class='container'>
<div class="row">
	<div class="col-8">
		<div class="list-group" id="list-tab" role="tablist">

<?php


		$servidor = mysqli_connect("localhost","root","","agenda_paciente");
		
		$pessoas = mysqli_query($servidor, "select * from pessoa");
		
		while($pessoa = mysqli_fetch_array($pessoas))
		{
			echo "  <a class='list-group-item list-group-item-action' id='list-home-list' data-toggle='list' href='editar.php?id="
						.$pessoa['idpessoa']."' role='tab' aria-controls='home'>".$pessoa['nome']."                                    
						<a href='excluir.php?id=".$pessoa['idpessoa']."'>Excluir</a>
					</a>";
		}	


?>
		</div>
	</div>
</div>
</div>