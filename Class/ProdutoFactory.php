<?php 
class ProdutoFactory {

    private $classes = array("OutrosProdutos", "Ebook", "LivroFisico");

    public function criaPor($tipoProduto, $params) {

    	$produtoNome = $params['nome'];
		$preco = $params['preco'];
		$descricao = $params['descricao'];
		$categoria = new Categoria();
		$usado = $params['usado'];

        if (in_array($tipoProduto, $this->classes)) {
            return new $tipoProduto($produtoNome, $preco, $descricao, $categoria, $usado);
        } else {

            return new OutrosProdutos($produtoNome, $preco, $descricao, $categoria, $usado);
        }
    }
}
?>