<?php include("cabecalho.php"); 
 include("conecta.php"); 
 

?> 
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


  <div class="modal-dialog modal-md tela" ></br>

    <div class="modal-content">
      <div class="modal-body">
            <p> Deseja realmente excluir esse Produto?</p>
      </div>
      <div class="modal-footer">
	      	
		<div  class="modal-footer"></br>
			<input  type="hidden" name="id" value="<?= $produto['id']?>">
			 echo <?$produto['id'];?>
        	<a href="remove-produto.php" method="POST" type="button" class="btn btn-danger" >Excluir</a>
            <a href="produto-formulario.php?id='$id'" method="POST" type="button" class="btn btn-info" >Cancelar</a>
      	</div>        
            
      </div>
    </div>

  </div>

<?php include ('produto-formulario.php'); ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
