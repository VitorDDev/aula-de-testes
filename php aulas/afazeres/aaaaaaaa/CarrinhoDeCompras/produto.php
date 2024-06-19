<?php 

class produto {
    private $nome;
    private $Valor;

    public function __construct($nome, $Valor) {
        $this->nome = $nome;
        $this->Valor = $Valor;
}

public function getNome() {
    return $this->nome;

}

public function getValor() {
     return $this->Valor;

    }
}





?>