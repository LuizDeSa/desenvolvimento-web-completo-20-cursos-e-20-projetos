<?php
    try{

        // Error -> geralmente php
        // Exception -> programador

        echo "<h3> *** Try  ***</h3>";

        // ERRO
        // $sql = 'Select * from clientes';
        // mysql_query($sql);//Erro

        // EXCEÇÃO
        if(!file_exists('arquivo.php')){

            throw new Exception('O arquivo não existe.');
            // throw new Error('O arquivo não existe.');
        }

    }catch(Error $e){//Trata Error
        echo "<h3> *** Cacth Error ***</h3>";
        echo '<p style="color: red">'. $e . '</p>';
    }catch(Exception $e){//Trata Exception
        echo "<h3> *** Cacth Exception ***</h3>";
        echo '<p style="color: red">'. $e . '</p>';
    }finally{
        echo "<h3> *** Finally  ***</h3>";
    }
?>