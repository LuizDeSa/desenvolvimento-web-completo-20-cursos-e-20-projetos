<html>
	<head>
		<title>Pilar Encapsulamento</title>
	</head>
	<body>
		<div class="container">
			<h1>Pilar Encapsulamento</h1>
			
			<?php
                class Pai {
                    private $nome = 'Luiz';
                    protected $sobrenome = 'Alberto';
                    public $humor = 'Feliz';

                    public function __get($atributo){
                        return $this->$atributo;
                    }

                    public function __set($atributo, $valor){
                        $this->$atributo = $valor;
                    }

                    private function executarMania(){
                        echo 'Assobiar';
                    }

                    protected function responder(){
                        echo 'Oi';
                    }

                    public function executarAcao(){
                        //
                        $x = rand(1,10);
                        if($x%2==0){
                            $this->responder();
                        }else{
                            $this->executarMania();
                        }
                        echo '<br>';
                    }
                }

                $pai = new Pai();
                echo '<pre>';
                print_r($pai);
                echo '</pre>';

                echo $pai->humor;
                echo '<br>';
                $pai->humor = 'Triste';
                echo $pai->humor;
                echo '<br>';
                // ERROR
                // echo $pai->nome;
                // echo $pai->sobrenome;
                echo $pai->__get('nome');
                echo '<br>';
                $pai->__set('nome', 'Mario');
                echo $pai->__get('nome');
                echo '<br>';
                // Ou assim -> desde que estejam com __get() e/ou __set()
                $pai->nome='Luiz';
                echo $pai->nome;
                echo '<br>';
                echo '<br>';

                // echo $pai->executarMania();
                // echo $pai->responder();
                echo $pai->executarAcao();



			?>

		</div>
	</body>
</html>