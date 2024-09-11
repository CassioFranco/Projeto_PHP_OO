<?php

    class Animal{

        public $nome;
        public $raca;
        public $num_patas;
        public $cor;
        public $peso;
        public $tamanho;
        public $fav_toy;

        public function __construct($nome,$raca,$num_patas,$cor,$peso,$tamanho,$fav_toy){
            $this->nome;
            $this->raca;
            $this->num_patas;
            $this->cor;
            $this->peso;
            $this->tamanho;
            $this->fav_toy; 
        }



        public function falar(){
            echo "Eu sou um animal! \n";
        }
    }