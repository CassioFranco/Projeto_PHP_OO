<?php

    require_once "animal.php";
    require_once "cachorro.php";
    require_once "gato.php";
    require_once "papagaio.php";
    require_once "humano.php";
    require_once "cassio.php";


    echo "---------Clientes---------\n";
    $humano1 = new Humano("Cássio", 22, "rua xxx,123", "(42)40028922");
    echo $humano1->info_humano();
    $humano2 = new Humano ("Marya",22,"rua yyy,222","(42)40028922");
    echo $humano2->info_humano();
    $humano3 = new Humano ("Pedro",7,"rua zzz,321","(42)40028922");
    echo $humano3->info_humano();

    echo "---------Animais---------\n";
    $animal1=new Cachorro("amora", "viralata raposinha",4, "branca com pintas marrom", 4, "pequena", "mordedor", $humano2 );
    echo $animal1->info_animal() . "\n";
    echo "diz: " . $animal1->falar();

    echo "_________________________\n";
    echo "\n";

    $animal2=new Gato("linda", "siames",4, "marrom e preto", 3, "pequena", "rato de pelucia",$humano1 );
    echo $animal2->info_animal() . "\n";
    echo "diz: " . $animal2->falar();

    echo "_________________________\n";
    echo "\n";

    $animal3=new Papagaio("loro", "chorão",2, "verde e vermelho", "300g", "pequeno", "bolinha", $humano3);
    echo $animal3->info_animal() . "\n";
    echo $animal3->falar();

