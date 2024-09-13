<?php

    // humano e suas informações

    require_once "humano.php";

    //informações cassio
    
    class Cassio extends Humano{
        public function info_humano(){
            echo "Nome: {$this->nome}, Idade: {$this->idade}, Endereço: {$this->endereco}, Contato: {$this->contato}";
        }
        

    }




