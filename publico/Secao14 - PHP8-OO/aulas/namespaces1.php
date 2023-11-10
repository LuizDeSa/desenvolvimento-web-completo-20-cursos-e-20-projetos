<?php
    // Servem para solucionar casosde nomes iguais em métodos, interfaces e classes oriundo de outros codigos prontos.

    namespace A;
    class Cliente implements CadastroInterface, \B\CadastroInterface{
            public $nome = 'Luiz';

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
        public function salvar();
    }

    namespace B;
    class Cliente implements CadastroInterface, \A\CadastroInterface{
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

    // name space B
    $c1 = new Cliente();
    print_r($c1);
    echo $c1->__get('nome');

    echo '<br>';
    echo '<hr>';

    // name space A
    $c2 = new \A\Cliente();
    print_r($c2);
    echo $c2->__get('nome');
?>