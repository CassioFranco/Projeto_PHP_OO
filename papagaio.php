<?php

    // papagaio falando

    require_once "animal.php";


    class Papagaio extends Animal{
        public function falar(){
            return "loro quer biscoito \n";
        }

    }