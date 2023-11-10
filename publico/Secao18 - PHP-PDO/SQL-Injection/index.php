<!-- Teste de sql injection :::::: SELECT * FROM tb_usuario WHERE email = 'luiz@teste.com.br' AND senha = '123456'; delete from tb_usuario where 'a'='a' -->
<?php
    if(!empty($_POST['usuario']) &&! empty($_POST['senha'])){
        $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
        $usuario = 'luiz';
        $senha = '12345678';
        try{
            
            $conexao = new PDO($dsn, $usuario, $senha);
    
            $query = "SELECT * FROM tb_usuario WHERE ";
            $query .= " email = :usuario ";
            $query .= " AND senha = :senha ";
    
            $stmt = $conexao->prepare($query);

            $stmt->bindValue(':usuario', $_POST['usuario']);
            $stmt->bindValue(':senha', $_POST['senha']);

            $stmt->execute();

            $usuario = $stmt->fetch();

            echo '<pre>';
            print_r($usuario);
            echo '</pre>';


        }catch(PDOException $e){
            echo 'Error: '.$e->getCode().' - Mensagem: '.$e->getMessage();
        }
    }
   
?>




<html>
    <head>
        <meta charset="UTF-8">
        <title>SQL-Injection</title>
    </head>
    <body>
        <form method="post" action="index.php">
            <input type="text" placeholder="Usuario" name="usuario">
            <br>
            <input type="text" placeholder="Senha" name="senha">
            <br>

            <button type="submit">Entrar</button>
        </form>
    </body>
</html>