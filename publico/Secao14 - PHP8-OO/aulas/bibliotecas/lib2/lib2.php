<?php
    namespace B;
    class Cliente implements CadastroInterface{
        public $nome = 'Alberto';

        public function __construct(){
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function __get($atributo){
            return $this->$atributo;
        }

        public function salvar(){
            echo 'Salvar';
        }

        public function remover(){
            echo 'Remover';
        }
    } 

    interface CadastroInterface{
        public function remover();
    }
?>