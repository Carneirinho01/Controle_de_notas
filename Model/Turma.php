<?php
class Turma
{
    protected $alunos;
    private $nome;

    public function __construct(String $nome)
    {
        $this->alunos = array();
        $this->nome  = $nome;
    }

    public function addAluno(Aluno $aluno): bool
    {
        if (count($this->alunos) < 5) {
            array_push($this->alunos, $aluno);
            return true;
        }
        return false;
    }

    public function mediaTurma(): float
    {
        $soma = 0.0;
        foreach ($this->alunos as $aluno) {
            $soma += $aluno->getMedia();
        }
        return ($soma / count($this->alunos));
    }
    public function getNome(): String
    {
        return $this->nome;
    }
}
