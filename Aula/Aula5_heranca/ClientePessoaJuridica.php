<?php

class ClientePessoaJuridica extends Cliente {

    public $Cnpj;
    public $NomeFantasia;

    function setCnpj ($Cnpj) {
        $this->Cnpj = $Cnpj;
    }

    function setNomeFantasia ($NomeFantasia) {
        $this->NomeFantasia = $NomeFantasia;
    }

    function verEndereco()
    {
        return "<p>Endereço Pessoa Juridica. <br> Endereço: {$this->Endereco} <br> Bairro: {$this->Bairro} <br> Nome Fantasia: {$this->NomeFantasia} <br> CNPJ: {$this->Cnpj}</p><hr>";
    }
}

?>