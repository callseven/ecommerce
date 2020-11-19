<?php

class ClientePessoaFisica extends Cliente {

    public $Cpf;
    public $Nome;
    
    function setCpf($Cpf) {
        $this->Cpf = $Cpf;
    }
    
    function setNome($Nome) {
        $this->Nome = $Nome;
    }
    
    function verEndereco() {

        return "<p>Endereço da Pessoa fisica. <br> Endereço: {$this->Endereco}<br>Bairro: {$this->Bairro}<br>Nome: {$this->Nome} <br> CPF: {$this->Cpf}<br></p><hr>";
    }
}

?>