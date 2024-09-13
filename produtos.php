<?php


// caracteristicas dos produtos

class Produto {
    public $produto;
    public $preco;
    public $estoque;

    public function __construct($produto, $preco, $estoque) {
        $this->produto = $produto;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }


    public function listarprodutos() {
        return "{$this->produto} - Preço: R$ {$this->preco} - Estoque: {$this->estoque} unidades";
    }
}