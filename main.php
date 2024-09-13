<?php

    require_once "animal.php";
    require_once "cachorro.php";
    require_once "gato.php";
    require_once "papagaio.php";
    require_once "humano.php";
    require_once "cassio.php";
    require_once "funcionario.php";
    require_once "balconista.php";
    require_once "veterinario.php";
    require_once "vendedor.php";
    require_once "produtos.php";
    require_once "vendas.php";


    echo "---------Clientes---------\n";
    echo "\n";
    $humano1 = new Humano("Cássio", 22, "rua xxx,123", "(42)40028922");
    echo $humano1->info_humano();
    $humano2 = new Humano ("Marya",22,"rua yyy,222","(42)40028922");
    echo $humano2->info_humano();
    $humano3 = new Humano ("Pedro",7,"rua zzz,321","(42)40028922");
    echo $humano3->info_humano();

    echo "\n";
    echo "---------Animais---------\n";
    echo "\n";
    echo "_________CACHORRO_________\n";
    echo "\n";
    $animal1=new Cachorro("amora", "viralata raposinha",4, "branca com pintas marrom", 4, "pequena", "mordedor", $humano2 );
    echo $animal1->info_animal() . "\n";
    echo "diz: " . $animal1->falar();

    echo "_________GATO_________\n";
    echo "\n";

    $animal2=new Gato("linda", "siames",4, "marrom e preto", 3, "pequena", "rato de pelucia",$humano1 );
    echo $animal2->info_animal() . "\n";
    echo "diz: " . $animal2->falar();

    echo "_________PAPAGAIO_________\n";
    echo "\n";

    $animal3=new Papagaio("loro", "chorão",2, "verde e vermelho", "300g", "pequeno", "bolinha", $humano3);
    echo $animal3->info_animal() . "\n";
    echo "diz: " . $animal3->falar();
    echo "\n";

    echo "---------Funcionários---------\n";
    echo "\n";

    $funcionario1 = new Balconista("Joana","Balconista", 1500,"30","rua aaa,1243","(42)40028922");
    echo $funcionario1 -> info_funcionario() . "\n";
    
    echo "_________________________\n";
    echo "\n";

    $funcionario2 = new Veterinario("Cleber", "Veterinário",5000,35,"rua fff,192", "(42)40028922");
    echo $funcionario2 -> info_funcionario() . "\n";

    echo "_________________________\n";
    echo "\n";

    $funcionario3 = new Vendedor("Ana","Vendedora",2000,25, "rua aaa,2525","(42)40028922");
    echo $funcionario3 -> info_funcionario() . "\n";

    echo "---------Produtos---------\n";
    echo "\n";

    $produto1= new Produto ("ração",100,10);
    echo $produto1 -> listarprodutos() . "\n";

    echo "_________________________\n";
    echo "\n";

    $produto2=new Produto ("remedio",200,100);
    echo $produto2 -> listarprodutos() . "\n";

    echo "_________________________\n";
    echo "\n";

    $produto3=new Produto("brinquedo",10,200);
    echo $produto3 -> listarprodutos() . "\n";

    echo "_________________________\n";
    echo "\n";

    echo "---------Vendas---------\n";
    echo "\n";

    $venda1 =new Venda(500, 5,$produto1);
    echo $venda1 -> carrinho() . "\n";
    echo $venda1 -> valor_carrinho() . "\n";
    
    echo "_________________________\n";
    echo "\n";

    $venda2 =new Venda(400, 2,$produto2);
    echo $venda2 -> carrinho() . "\n";
    echo $venda2 -> valor_carrinho() . "\n";

    echo "_________________________\n";
    echo "\n";

    $venda3 =new Venda(30, 3,$produto3);
    echo $venda3 -> carrinho() . "\n";
    echo $venda3 -> valor_carrinho() . "\n";

    echo "_________________________\n";
    echo "\n";



