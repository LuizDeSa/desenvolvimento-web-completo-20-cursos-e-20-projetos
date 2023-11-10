<?php
    // Error(php)
    // Exception(programadores)
    // Customizada(programadores)
    
    class MinhaExceptionCustomizada extends Exception{
        private $erro = '';

        public function __construct($erro){
            $this->erro = $erro;
        }

        public function exibirMensagemErroCustomizada(){
            return $this->erro;
        }
    }

    try{

        throw new MinhaExceptionCustomizada('Erro de teste');

    }catch(MinhaExceptionCustomizada $e){
        echo '<p style="color: red">'. $e->exibirMensagemErroCustomizada() . '</p>';
    }
?>