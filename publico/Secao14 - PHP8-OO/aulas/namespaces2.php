<?php
    require "bibliotecas\lib1\lib1.php";
    require "bibliotecas\lib2\lib2.php";

    // ASSIM
    //use A\Cliente;
    use B\Cliente;

    $c = new Cliente();
    print_r($c);

    // OU ASSIM
    use A\Cliente as C1; 
    use B\Cliente as C2;

    $c1 = new C1();
    print_r($c1);

    $c2 = new C2();
    print_r($c2);

    // OU ASSIM 
    // name space A

    // $c1 = new \A\Cliente();
    // print_r($c1);
    // echo $c1->__get('nome');
?>