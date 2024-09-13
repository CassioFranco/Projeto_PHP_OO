<?php

    // cachorro falando

    require_once "animal.php";


    class Cachorro extends Animal{
        public function falar(){
            return "au au auuuuu \n";
        }

    }