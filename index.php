<?php include("cabecalho.php");
	  include("logica-usuario.php");

 ?> 

  <h1>Bem vindo!</h1>
  <?php
  	if(usuarioEstaLogado()){?>	
		<p class="text-success"> Você está logado como <?=usuarioLogado()?>.</p>
		<td><a href="logout.php">Logout</a></td>
	<?php
	} else {
	?>

  <h2 class="titulo" >Login</h2>
  <form action="login.php" method="post">
  	<table class="table">
  		<tr>
  			<td>Email</td>
  			<td><input type="email" name="email" class="form-control"></td>
  		</tr>
  		<tr>
  			<td>Senha</td>
  			<td><input type="password" name="senha" class="form-control"></td>
  		</tr>
  		<tr>
  			<td><button class="btn btn-primaru">Login</button></br></td>
  		</tr>
  		<table>
  			<tr>	
	  			<td><a href="buscar-senha.php">Esqueceu sua senha</a></td>
	  		</tr>

  		</table>
  		
  		
  	</table>
  </form>



<?php }
include("rodape.php"); ?>
