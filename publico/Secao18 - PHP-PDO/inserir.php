<?php
    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'luiz';
    $senha = '12345678';
    try{
        $conexao = new PDO($dsn, $usuario, $senha);

        $query = '
            CREATE TABLE IF NOT EXISTS tb_usuario(
                id_usuario int NOT NULL PRIMARY KEY AUTO_INCREMENT,
                nome varchar(50) NOT NULL,
                email varchar(100) NOT NULL,
                senha varchar(32) NOT NULL
            );
        ';

        // echo $query;

        //retorno 0, pois nenhuma linha sera afetada. Diferente de insert, delete e update. MAS ELE PODE RODAR QUALQUER query
        // não retorna resultados de uma instrução SELECT. 
        $retorno = $conexao->exec($query);//execute an SQL statement and return the number of affected rows

        echo $retorno;


        $query = '
            INSERT INTO tb_usuario(nome, email, senha)VALUES("Luiz", "luiz@teste.com.br", "123456");
        ';

        $retorno = $conexao->exec($query);
        echo $retorno;


        $query = '
            DELETE FROM tb_usuario;
        ';

        $retorno = $conexao->exec($query);
        echo $retorno;

    }catch(PDOException $e){
        echo 'Error: '.$e->getCode().' - Mensagem: '.$e->getMessage();
        // echo '<pre>';
        // print_r($e);
        // echo '</pre>';

        // registrar Error

    }
?>