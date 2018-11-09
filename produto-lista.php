
<?php include("cabecalho.php"); 
 include("conecta.php"); 
 include("BD-produto.php");?>
<?php
	if(array_key_exists("removido",$_GET) && $_GET["removido"]=="true"){

?>
		<p class="alert-success" > Produto excluido com sucesso.</p>

<?php
	
     set_time_limit(10);

	}

?>
 <table class="table table-striped table-bordered"> 
 	<tr>
			<th class="titulo2">Nº</th>
	        <th class=" titulo2">Produto</th>
	        <th class=" titulo2">Preço</th>
	        <th class=" titulo2">Descrição</th>
	        <th class=" titulo2">Categoria ID</th>
	        <th class="titulo2">Remover Produto</th>
	          
	</tr>	
	<?php
	$produtos =listaProduto($conexao);
	foreach ($produtos as $produto) :
	?>		
		<tr>			 
			<td ><?= $produto['id']?></td>
			<td ><?= $produto['nome']?></td>
			<td >R$ <?= $produto['preco']?></td>
			<td ><?= substr($produto['descricao'], 0, 40)?></td>
			<td ><?= $produto['categoria_id']?></td>			
			<td>
				<form   action="remove-produto.php" method="POST"  >
					<input  type="hidden" name=" id" value="<?= $produto['id']?>">
					<button tabindex="0" class=" fas fa-trash-alt text-danger btn btn-link  ml-auto "data-toggle="popover"  data-placement="right" data-trigger="focus" title="Excluir" type="Submit" id="btn-excluir"></button>
				</form>
				
			</td>

		</tr>
	<?php	
	endforeach

	?>
</table>

<?php include("rodape.php"); ?>