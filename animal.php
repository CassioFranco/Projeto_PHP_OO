<?php
    require_once "humano.php";


    class Animal{

        public $nome;
        public $raca;
        public $num_patas;
        public $cor;
        public $peso;
        public $tamanho;
        public $fav_toy;
        public $humano;

        public function __construct($nome,$raca,$num_patas,$cor,$peso,$tamanho,$fav_toy, Humano $humano){
            $this->nome = $nome;
            $this->raca = $raca;
            $this->num_patas =$num_patas;
            $this->cor = $cor;
            $this->peso = $peso;
            $this->tamanho = $tamanho;
            $this->fav_toy = $fav_toy; 
            $this->humano =$humano;
        }

        
        public function falar(){
            echo "Eu sou um animal! \n";
        }

        public function info_animal(){
            return "Nome: $this->nome\nRaça: $this->raca\nNúmero de Patas: $this->num_patas\nCor: $this->cor\nPeso: $this->peso\nTamanho: $this->tamanho\nBrinquedo Favorito: $this->fav_toy\nHumano responsável: ". $this->humano->nome;
        }
    }


    
