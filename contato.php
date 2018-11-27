<?php 
require_once("cabecalho.php");

?>
<h2 class="fa fa fa-envelope-o titulo" >Contato</h2></br> 
<form action="envia-contato.php">
	<table class="table"></br>
		<tr>
			<td>Nome</td>
			<td><input type="text" name="nome" class="form-control" placeholder="Nome completo" required></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="email" name="email" class="form-control" placeholder="Digite seu email" required></td>
		</tr>
		<tr>
			<td>Mensagem</td>
			<td><textarea class="form-control" name="mensagem" placeholder="Digite sua mensagem" required ></textarea></td>
		</tr>
		<tr>
			<td><button class="btn btn-primary">Enviar</button></td>
		</tr>

	</table>
</form>




<?php require_once("rodape.php");?>