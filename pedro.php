<?php

    require_once "humano.php";



    class Pedro extends Humano{
        public function info_humano(){
            echo "Nome: {$this->nome}, Idade: {$this->idade}, Endereço: {$this->endereco}, Contato: {$this->contato}";
        }
        

    }

