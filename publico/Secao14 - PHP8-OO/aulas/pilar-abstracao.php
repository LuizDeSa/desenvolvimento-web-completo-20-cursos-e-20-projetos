<html>
	<head>
		<title>Pilar da Administração</title>
	</head>
	<body>
		<div class="container">
			<h1>Pilar da Administração</h1>
			
			<?php
				class Funcionario{
                    //atributos
                    public $nome = null;
                    public $telefone = null;
                    public $numFilhos = null;
                    public $cargo = null;
                    public $salario = null;
                   

                    // function setNome($nome){
                    //     $this->nome = $nome;
                    // }

                    // function setTelefone($telefone){
                    //     $this->telefone = $telefone;
                    // }

                    // function setNumFilhos($numFilhos){
                    //     $this->numFilhos = $numFilhos;
                    // }
                    
                    // function getNome(){
                    //     return $this->nome;
                    // }

                    // function getTelefone(){
                    //     return $this->telefone;
                    // }

                    // function getNumFilhos(){
                    //     return $this->numFilhos;
                    // }
                    
                    // overload
                    function __set($atributo, $valor){
                        $this->$atributo = $valor;
                    }

                    function __get($atributo){
                        return $this->$atributo;
                    }

                    //métodos
                    function resumirCadFunc(){
                        return $this->__get('nome') . ', '.  $this->__get('telefone') .', '. $this->__get('numFilhos') .' filho(s), ' . $this->__get('cargo'). ', '. $this->__get('salario') . ' R$.';
                    }

                }

                $funcionario1 = new Funcionario();
                // $funcionario1->setNome('Luiz');
                // $funcionario1->setNumFilhos(4);
                // overload
                $funcionario1->__set('nome', 'Luiz');
                $funcionario1->__set('telefone', '(63)99999-9999');
                $funcionario1->__set('numFilhos', '6');
                $funcionario1->__set('cargo', 'Faxineiro');
                $funcionario1->__set('salario', '1850,54');
                echo $funcionario1->resumirCadFunc();
                echo "<br>";
                echo $funcionario1->__get('nome');
                echo '<hr>';

                $funcionario2 = new Funcionario();
                $funcionario2->__set('nome', 'Alberto');
                $funcionario2->__set('numFilhos', '2');
                // $funcionario2->setNome('Maria');
                // $funcionario2->setNumFilhos(2);
                echo $funcionario2->resumirCadFunc();
                echo "<br>";

			?>

		</div>
	</body>
</html>