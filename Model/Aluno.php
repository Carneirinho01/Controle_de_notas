<?php
class Aluno
{
    protected $nome;
    protected $ra;
    protected $nota1;
    protected $nota2;
    protected $nota3;
    protected $nota4;

    //usei float pois a partir da versao 4.2.0 do php o double foi depreciado.
    public function __construct(String $nome, int $ra, float $nota1, float $nota2, float $nota3, float $nota4)
    {
        $this->nome = $nome;
        $this->ra = $ra;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->nota3 = $nota3;
        $this->nota4 = $nota4;
    }

    public function getMedia(): float
    {
        return (($this->nota1+$this->nota2+$this->nota3+$this->nota4)/4);
    }

    public function getNome(): String
    {
        return $this->nome;
    }
    
    public function getNota1(): float
    {
        return $this->nota1;
    }
    
    public function getNota2(): float
    {
        return $this->nota2;
    }
    
    public function getNota3(): float
    {
        return $this->nota3;
    }

    public function getNota4(): float
    {
        return $this->nota4;
    }
}
