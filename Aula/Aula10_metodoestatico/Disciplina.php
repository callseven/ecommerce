<?php

class Disciplina {

    public $Aluno;
    public $NotaTrabalho;
    public $NotaProva;
    public static $Media;
    
    function __construct($Aluno, $NotaTrabalho, $NotaProva){
        $this->Aluno = $Aluno;
        $this->NotaTrabalho = $NotaTrabalho;
        $this->NotaProva = $NotaProva;
        self::$Media = $this->NotaProva + $this->NotaTrabalho;
    }

    function situacao(){
        if(self::$Media >= 7):
            return "<p>Aluno {$this->Aluno} está <b>Aprovado</b> com média ". self::$Media . ".</p><br><hr>";
        else:
            return "<p>Aluno {$this->Aluno} está <b>Reprovado</b> com média ". self::$Media . ".</p><br><hr>";
        endif;
        } 

    static function situacaoAluno()    {
        if(self::$Media >= 7):
            return "<p>Aluno  está <b>Aprovado</b> com média ". self::$Media . ".</p><br><hr>";
        else:
            return "<p>Aluno  está <b>Reprovado</b> com média ". self::$Media . ".</p><br><hr>";
        endif;
    }

    
}

?>