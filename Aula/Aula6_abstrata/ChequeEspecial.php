<?php

    class ChequeEspecial extends Cheque {

        function calcularJuros2(){

            $this->Valor = $this->Valor* 1.10;
            $this->Valor = parent::real($this->Valor);
            return "Valor do cheque {$this->Tipo}: R$ {$this->Valor}<hr>";
        }
    }
        
        
?>