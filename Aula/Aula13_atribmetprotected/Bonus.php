<?php

class Bonus extends FuncionarioProtected {

    
    public function verSalario (){
        parent::bonus(2500);
        return parent::verSalario();
    }

    
}

?>