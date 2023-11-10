<html>
	<head>
		<title>Construtor e destrutor</title>
	</head>
	<body>
		<div class="container">
			<h1>Construtor e destrutor</h1>
			
			<?php
				class Pessoa {
                    //atributos
                    public $nome = null;

                    function __construct($nome){
                        echo 'obj iniciado!';
                        $this->nome = $nome;
                    }

                    function __destruct(){
                        echo 'Objeto removido';
                    }

                    function __get($atributo){
                        return $this->$atributo;
                    }

                    function correr(){
                        return $this->__get('nome') .' está correndo.';
                    }
                }

                $pessoa1 = new Pessoa('Jorge');
                echo '<br> Nome: '. $pessoa1->__get('nome');
                echo '<br>' . $pessoa1->correr();
                echo '<br>';
                
                // unset($pessoa1);

			?>

		</div>
	</body>
</html>