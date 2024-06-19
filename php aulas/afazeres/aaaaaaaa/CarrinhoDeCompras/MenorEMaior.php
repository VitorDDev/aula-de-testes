<?php  
require_once'produto.php';
require_once'carrinho.php';
class MenorEMaior {
    private $maior;
    private $menor;

    public function encontra(carrinho $carrinho) {
    foreach ($carrinho->getProdutos() as $produto) {

          if (empty($this->menor) || $produto->getValor()
          < $this->menor->getValor()){
        $this->menor = $produto;
    }
    
    if (empty($this->maior) || $produto->getValor()
    > $this ->maior->getValor()){
      $this->maior = $produto;
    }
  }
}

public function getMenor() {
    return $this->menor;
}
public function getMaior() {
    return $this->maior;
}
}


?>