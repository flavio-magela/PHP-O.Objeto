<?php   
class OutrosProdutos extends Produto {

    private $mercadoria;

    public function getMercadoria() {
        return $this->mercadoria;
    }

    public function setMercadoria($mercadoria) {
        $this->mercadoria = $mercadoria;
    }
    public function atualizaBaseadoEm($params) {

        $this->setMercadoria($params["mercadoria"]);	        
	} 
}

?>