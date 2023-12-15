<?php

class Pessoa
{
    #region Atributos
    private $nome;
    private $idade;
    private $sexo;
    #endregion

    #region Getters e Setters
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }
    #endregion

    #region Construtor
    function Pessoa($nome, $idade, $sexo)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }
    #endregion

    #region Método
    public function fazerAniversario()
    {
        $this->setIdade($this->getIdade() + 1);
    }
    #endregion
}
