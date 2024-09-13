<?php


    // caracteristicas humano

    class Humano{
        public $nome;
        public $idade;
        public $endereco;
        public $contato;

        //atribuindo as funcoes

        public function __construct($nome,$idade,$endereco,$contato){
            $this->nome= $nome;
            $this->idade = $idade;
            $this->endereco = $endereco;
            $this->contato = $contato;
        }


        public function meupet(){
            echo "eu sou dono de um pet! \n";
        }

        //informações humanos

        public function info_humano(){
            echo "Nome: {$this->nome}, Idade: {$this->idade}, Endereço: {$this->endereco}, Contato: {$this->contato} \n";
        }
        }