<?php

// @copyrigth (c) 2020, Call - Celke

class Usuario {
    public $Nome;
    public $Email;

    function getDadosUser($Nome, $Email) {
        return "O usuario {$Nome} tem o email {$Email}";
    }
}
?>