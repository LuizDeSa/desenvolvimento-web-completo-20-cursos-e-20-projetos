<?php
    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'luiz';
    $senha = '12345678';
    try{
        $conexao = new PDO($dsn, $usuario, $senha);

        $query = '
            SELECT * FROM tb_usuario
        ';

        $stmt = $conexao->query($query);

        // $lista = $stmt->fetchAll();
        // $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $lista = $stmt->fetchAll(PDO::FETCH_NUM);
        // $lista = $stmt->fetchAll(PDO::FETCH_BOTH);
        $lista = $stmt->fetchAll(PDO::FETCH_OBJ);

        echo '<pre>';
        print_r($lista);
        echo '</pre>';

        echo '<hr>';


        $query = '
            SELECT * FROM tb_usuario WHERE id_usuario = 5
        ';

        $stmt = $conexao->query($query);
        $usuario = $stmt->fetch(PDO::FETCH_OBJ);

        echo '<pre>';
        print_r($usuario);
        echo '</pre>';


        echo '<hr>';

         // MÉTODO 1
        $query = '
            SELECT * FROM tb_usuario
        ';

        $stmt = $conexao->query($query);
        $lista_usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // echo '<pre>';
        // print_r($lista);
        // echo '</pre>';

       
        foreach($lista_usuario as $key => $value){
            // echo '<pre>';
            // print_r($value);
            // echo '</pre>';

            echo 'nome: '. $value['nome'];
            echo '<hr>';

        }

        echo '<hr>';
        // MÉTODO 2
        $query = '
            SELECT * FROM tb_usuario
        ';

        // $stmt = $conexao->query($query);

       
        foreach($conexao->query($query) as $key => $value){
            // print_r($value);
            echo $value['nome'] ;

            echo '<hr>';
            
        }



        // $query = '
        //     CREATE TABLE IF NOT EXISTS tb_usuario(
        //         id_usuario int NOT NULL PRIMARY KEY AUTO_INCREMENT,
        //         nome varchar(50) NOT NULL,
        //         email varchar(100) NOT NULL,
        //         senha varchar(32) NOT NULL
        //     );
        // ';
        // $retorno = $conexao->exec($query);
        // // echo $retorno;


        // $query = '
        //     INSERT INTO tb_usuario(nome, email, senha)VALUES("Luiz", "luiz@teste.com.br", "123456");
        // ';
        // $conexao->exec($query);

        // $query = '
        //     INSERT INTO tb_usuario(nome, email, senha)VALUES("Alberto", "alberto@teste.com.br", "345678");
        // ';
        // $conexao->exec($query);

        // $query = '
        //     INSERT INTO tb_usuario(nome, email, senha)VALUES("Pereira", "pereira@teste.com.br", "456789");
        // ';
        // $conexao->exec($query);


    }catch(PDOException $e){
        echo 'Error: '.$e->getCode().' - Mensagem: '.$e->getMessage();
        // echo '<pre>';
        // print_r($e);
        // echo '</pre>';

        // registrar Error

    }
?>