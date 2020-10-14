<?php

class CursoPosGraduacao implements Icurso{

    
    public $NomeDisciplina;
    public $NomeProfessor;

    public function disciplina($NomeDisciplina){
        $this->NomeDisciplina = $NomeDisciplina;
        return "Disciplina: {$this->NomeDisciplina}<br>";
    }
    
    public function professor($NomeProfessor){
        $this->NomeProfessor = $NomeProfessor;
        return "Nome Professor: {$this->NomeProfessor}<hr>";
    }

    
}

?>