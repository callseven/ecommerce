<?php

class Cliente {

    public $Endereco;
    public $Bairro;

    function setEndereco($Endereco) {
        $this->Endereco = $Endereco;
    }

    function setBairro($Bairro) {
        $this->Bairro = $Bairro;
    }

    function getBairro($Bairro) {

        return "Bairro: " . $this->Bairro;
    }

    function verEndereco() {
        return "<p>Endereço: {$this->Endereco}<br> Bairro: {$this->Bairro}<hr></p>";
    }
}
