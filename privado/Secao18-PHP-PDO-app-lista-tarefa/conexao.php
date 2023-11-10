<?php

    class Conexao{
        private $host = 'localhost';
        private $dbname='php_com_pdo';
        private  $user = 'luiz';
        private $pass = '12345678';

        public function conectar(){
            try{
                $conexao = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
                return $conexao;
            }catch(PDOException $e){
                echo '<p>Error: '.$e->getCode().' - Mensagem: '.$e->getMessage().'</p>';
            }

        }
    
        
    }

?>