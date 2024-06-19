<?php 
     class Carrinho {
      private $produtos;

      public function __construct() {
          $this->produtos = array();
     }

     public function adiciona(Produto $produtos) {
         $this->produtos[] = $produtos;
     }

     public function getProdutos(){
          return $this->produtos;
     }
}








?>