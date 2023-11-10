<html>
	<head>
		<title>Atributos e Métodos Staticos</title>
	</head>
	<body>
		<div class="container">
			<h1>Atributos e Métodos Staticos</h1>
			
			<?php
                class Exemplo{
                    public static $atributo1 = 'Atributo statico';
                    public $atributo2 = 'Atributo normal';

                    public static function metodo1(){
                        echo 'Metodo statico';
                    }

                    public function metodo2(){
                        echo 'Metodo normal';
                    }
                }

                // echo Exemplo::$atributo1;
                // echo '<br>';
                // Exemplo::metodo1();

                // Dá um fatal error
                // echo Exemplo::$atributo2;

                // Dá um fatal error
                // Exemplo::metodo2();

                $x = new Exemplo();

                // Não da utilizar o -> para atributos staticos
                echo $x->atributo2;

                // Dá um Warning
                echo $x->atributo1;

                // Não da utilizar o this

			?>
		</div>
	</body>
</html>