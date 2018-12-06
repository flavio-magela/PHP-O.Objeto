
<?php 
 require_once("cabecalho.php");  
 require_once("BD-produto.php"); 
 
?> 
 <table class="table table-striped table-bordered">
 	<h2 class="fa fa-list-alt titulo" > Lista de Produtos</h2></br>
 	<tr></br>			
	        <th class=" titulo1">Produto</th>
	        <th class=" titulo1">Preço Unid.</th>
	        <th class=" titulo1">Preço Final</th>
	        <th class=" titulo1">Descrição</th>
	        <th class=" titulo1">Usado</th>
	        <th class=" titulo1">Categoria</th>
	        <th class=" titulo1">Alterar</th>
	        <th class="titulo1">Excluir</th>
	          
	</tr>	
	<?php
	$produtos =listaProdutos($conexao);
	
	foreach ($produtos as $produto) :
	?>		
		<tr>			
			<td ><?= $produto->getProduto() ?></td>
			<td >R$ <?= $produto->getPreco() ?></td>
			<td >R$ <?= $produto->precoComDesconto(0.1) ?></td>
			<td ><?= substr($produto->getDescricao(), 0, 40)?></td>
			<td ><?= $produto->isUsado() ?></td>
			 <td><?= $produto->getCategoria()->getNome() ?></td>
			<td>
				<form action="alterar-formulario-produto.php" method="POST"  >
					<input  type="hidden" name="id" value="<?= $produto->getId() ?>">
					<button tabindex="0" class=" fa fa-edit btn btn-link  ml-auto titulo2" aria-hidden="true" data-toggle="popover"  data-placement="right" data-trigger="focus" title="alterar" type="Submit" id="btn-alterar"></button>
				</form>
				
			</td>		
			<td>
				<form action="confirma-exclusao.php" method="POST"  >
					<input  type="hidden" name="id" value="<?= $produto->getId() ?>">
					<button tabindex="0" class=" fas fa-trash-alt text-danger btn btn-link  ml-auto titulo" data-toggle="popover"  data-placement="right" data-trigger="focus" title="Excluir" type="Submit" id="btn-excluir"></button>
				</form>
				
			</td>

		</tr>
	<?php	
	endforeach;

	?>
</table>

<?php require_once("rodape.php"); ?>