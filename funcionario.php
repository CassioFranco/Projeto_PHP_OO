<?php

    require_once "humano.php";


    class Funcionario extends Humano{
        public $nome;
        public $cargo;
        public $idade;
        public $endereco;
        public $contato;
        


        public function __construct($nome,$cargo,$idade,$endereco,$contato){
            $this->nome= $nome;
            $this->cargo =$cargo;
            $this->idade = $idade;
            $this->endereco = $endereco;
            $this->contato = $contato;
        }

        public function info_funcionario(){
            echo "Nome: {$this->nome}, Cargo: {$this->cargo}, Idade: {$this->idade}, Endereço: {$this->endereco}, Contato: {$this->contato} \n";
        }


    }