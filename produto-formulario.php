

<?php 
require_once("cabecalho.php");
require_once("BD-categoria.php");
require_once("logica-usuario.php");
require_once("class/Produto.php");
require_once("class/Categoria.php");

verificaUsuario();

$categoria = new Categoria();
$categoria->SetId(1);

$produto = new Produto("", "", "", $categoria, "");

$categorias = ListaCategorias($conexao);

?>

<h2 class="fa fa-list-alt titulo" > Formulário de Produto</h2> 		
	  	 
<form  action="adiciona-produto.php" method="POST"></br>
	<div class="form-row"> 
			
		
			<?php include("produto-formulario-base.php"); ?>
	                 
		<div class="form-group col-sm-12">
					<button class="btn btn-primary" type="submit">Cadastrar</button> 
		</div>
	</div></br>	
</form></br>
 <!-- Criação da Lista de Formulário  - pegando do Form produto-lista.php     -->

<table ></br>
	
		<?php 

			require_once("produto-lista.php");


		?>

</table>
	   	
<?php require_once("rodape.php"); ?>

</html>