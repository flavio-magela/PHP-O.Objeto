<?php  
require_once("conecta.php");   

	// ---------------Lista Produto-----------------
function listaProduto2($conexao){

	$sqlInj = mysqli_real_escape_string($conexao,$sqlInj);
	$produtos = array();
	$query = "select prod.*, categ.nome as categoria_nome
	          from produtos as prod join categorias as categ
	          on categ.id=prod.categoria_id
	          order by prod.nome ASC";
	$resultado = mysqli_query($conexao, $query);
	while ( $produto = mysqli_fetch_assoc($resultado)) {
		
		array_push($produtos, $produto);
	}
	return $produtos;	
}

?>


