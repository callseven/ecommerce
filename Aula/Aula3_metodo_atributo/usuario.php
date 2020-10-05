<?php
    class Usuario {
    public $Nome;
    public $Email;
    public $Prova;
    public $Trabalho;
    

    function setUsuario($Nome, $Email) {
        return "Nome: $Nome" ;
    }
    function getUsuario() {
        return "Nome: $Nome";
    }

    function setUsuario2($Nome, $Email) {
        $this->Nome = $Nome;
        $this->Email = $Email;
    }
    function getUsuario2() {
        return "Nome do Aluno: {$this->Nome} <br>". " Email: {$this->Email}";
    }
    function  setNota($Prova, $Trabalho) {
        $this->Prova = $Prova;
        $this->Trabalho = $Trabalho;
    }
    function getNota(){
        return "Nota: " . ($this->Prova + $this->Trabalho);
    }
} 
    

        
        
?>
