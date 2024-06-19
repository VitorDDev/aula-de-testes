<?php 
require_once'carrinho.php';
require_once'produto.php';
require_once'MenorEMaior.php';

class TesteMenotEMaior{
    public function realizaTeste() {
        $carrinho = new Carrinho();
        $carrinho->adiciona(new Produto("liquidificador", 250.00));
        $carrinho->adiciona(new Produto("Geladeira", 350.00));
        $carrinho->adiciona(new Produto("Panela de Pressão", 80.00));


        $menorEMaior = new menorEMaior();
        $menorEMaior->encontra($carrinho);

        echo "O menor produto: ";
        echo $menorEMaior->getMenor()->getNome();
        echo "<br></br>";
        echo "O maior produto: ";
        echo $menorEMaior->getMaior()->getNome();
    }
}
$teste = new TesteMenotEMaior();
$teste->realizaTeste();



?>