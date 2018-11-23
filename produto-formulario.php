

<?php include("cabecalho.php");
include ("conecta.php");
include("BD-categoria.php");
include("BD-produto.php");
include("logica-usuario.php");

verificaUsuario();
$produto = array("nome"=> "", "descricao" => "", "preco" => "", "categoria_id" => "1");
$usado = "";
$categorias = ListaCategorias($conexao);

?>

<h2 class="fa fa-list-alt titulo" > Formulário de Produto</h2> 		
	  	 
<form  action="adiciona-produto.php" method="POST"></br>
	<div class="form-row"> 
			
		<table class="table">
			<?php include("produto-formulario-base.php") ?>

		</table></br>	
	                 
		<div class="form-group col-sm-12">
					<button class="btn btn-primary" type="submit">Cadastrar</button> 
		</div></br>	
</form>
 <!-- Criação da Lista de Formulário  - pegando do Form produto-lista.php     -->

<table ></br>
	
		<?php 

			include("produto-lista.php");


		?>

</table>
	   	
<?php include("rodape.php"); ?>

</html>