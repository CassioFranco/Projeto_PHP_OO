<?php


    // vendas e suas caracteristicas

    require_once "produtos.php";

    class venda{
        public $valor_total;
        public $qtd_itens;
        public $produto;


        //atribui as variaveis

        public function __construct($valor_total, $qtd_itens, Produto $produto){
            $this->valor_total = $valor_total;
            $this->qtd_itens = $qtd_itens;
            $this->produto= $produto;
        }

        // imprime o valor total das compras

        public function valor_carrinho(){
            return "Valor total da compra: $this->valor_total";
        }

        //imprime o carrinho de compras

        public function carrinho(){
            return "Produto: {$this->produto->produto}, Quantidade: {$this->qtd_itens}"; 
        }
    }