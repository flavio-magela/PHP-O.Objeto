<?php 
require_once("cabecalho.php");
require_once("BD-categoria.php");
require_once("BD-produto.php");



 $id = $_POST['id']; 
 $produto = buscaProduto($conexao,$id);
 $categorias = ListaCategorias($conexao);
  //operador ternário
 $usado = $produto ['usado']? "checked='checked'" : ""; //si for usado iqual a true retorna checked se não retorna ""
 
 
?> 
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


  <div class="modal-dialog modal-md " ></br>

    <div class="modal-content">
      <div class="modal-body">
      	
            <p> Deseja realmente excluir o Produto: <?= $produto['nome']?> no valor de R$ <?= $produto['preco']?>?</p>
	      </div>
	      <div class="modal-footer">
		      	
			<div  class="modal-footer"></br>

				
				<input   type="hidden" name="id" value="<?=$produto['id'] ?>"></br>
				
	        	<a  href="remove-produto.php"  method="POST" type="button" class="btn btn-danger" >Excluir</a>
	        	
	            <a href="produto-formulario.php" method="POST" type="button" class="btn btn-info" >Cancelar</a>
	      	</div>  
      	
      	  <?php echo  $id;  ?>
      	  <?php echo  $produto['nome'];
      	   ?>
            
      </div>
    </div>

  </div>
  <table  id="bloco">
  	<?php require_once("produto-lista.php"); ?>
  </table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
