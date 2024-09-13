<?php

    require_once "humano.php";


    class Funcionario extends Humano{
        public $nome;
        public $cargo;
        public $salario;
        public $idade;
        public $endereco;
        public $contato;
        
        


        public function __construct($nome,$cargo,$salario,$idade,$endereco,$contato){
            $this->nome= $nome;
            $this->cargo =$cargo;
            $this->salario =$salario;
            $this->idade = $idade;
            $this->endereco = $endereco;
            $this->contato = $contato;
            
        }

        public function info_funcionario(){
            echo "Nome: {$this->nome}, Cargo: {$this->cargo}, Salário: {$this->salario} , Idade: {$this->idade}, Endereço: {$this->endereco}, Contato: {$this->contato} \n";
        }


    }