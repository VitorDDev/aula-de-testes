<?php 

class Produto {
    private $nome;
    private $Valor;
    private $desc;
    private $quantidade;
    private $categoria;

    public function __construct($nome, $Valor, $desc, $quantidade, $categoria) {
        $this->nome = $nome;
        $this->Valor = $Valor;
        $this->desc = $desc;
        $this->quantidade = $quantidade;    
        $this->categoria = $categoria;
}

public function getNome() {
    return $this->nome;

}

public function getValor() {
     return $this->Valor;

    }
}





?>