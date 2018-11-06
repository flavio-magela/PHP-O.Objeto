

<?php include("cabecalho.php"); ?>
<h1 class="fa fa-list-alt titulo" > Formulário de Produto</h1> 
		
	  	 
<form  action="adiciona-produto.php">
	<div class="form-row"> 
		<div class="form-group col-sm-5">
			<label class="alinhar">Nome:  </label><input   type="text" class="form-control" name="nome" /><br/>
		</div>	
		<div class="form-group col-sm-4">
			<label class="alinhar">Produto:</label><input  type="text" class="form-control" name="produto" /><br/>
		</div>	
		<div class="form-group col-sm-2">
			<label class="alinhar">Preço:  </label> <input type="number" class="form-control" name="preco" /><br/>
		</div>	
	</div> 	
	                 
<div class="form-group col-sm-2">
	<button class="btn btn-primary" type="submit">Cadastrar</button> 
</div>	
      
</form>	   
	   	
<?php include("rodape.php"); ?>

</html>