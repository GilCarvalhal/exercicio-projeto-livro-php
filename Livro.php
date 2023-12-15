<?php
require_once "Pessoa.php"; // Instanciação para a classe Pessoa.
require_once "Publicacao.php";
class Livro implements Publicacao
{
    #region Atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor; // Leitor é uma Pessoa, então tem que instanciar para a classe Pessoa.
    #endregion

    #region Getters & Setters
    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function getTotPaginas()
    {
        return $this->totPaginas;
    }

    public function setTotPaginas($totPaginas)
    {
        $this->totPaginas = $totPaginas;
    }

    public function getPagAtual()
    {
        return $this->pagAtual;
    }

    public function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;
    }

    public function getAberto()
    {
        return $this->aberto;
    }

    public function setAberto($aberto)
    {
        $this->aberto = $aberto;
    }

    public function getLeitor()
    {
        return $this->leitor;
    }

    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;
    }
    #endregion

    #region Construtor
    public function Livro($titulo, $autor, $totPaginas, $leitor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->aberto = false;
        $this->pagAtual = 0;
        $this->leitor = $leitor;
    }
    #endregion

    #region Método
    public function detalhes()
    {
        echo "<hr> Livro " . $this->getTitulo() . " escrito por " . $this->getAutor();
        echo "</br> Páginas: " . $this->getTotPaginas() . " página atual " . $this->getPagAtual();
        echo "</br> Sendo lido por: " . $this->getLeitor()->getNome(); // Instanciar o método getNome() da classe Pessoa.
    }
    #endregion

    #region Implementação dos métodos abstratos da interface
    public function abrir()
    {
        $this->aberto = true;
    }

    public function fechar()
    {
        $this->aberto = false;
    }

    public function folhear($pagina)
    {
        if ($pagina > $this->totPaginas) {
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $pagina;
        }
    }

    public function avancarPag()
    {
        $this->pagAtual++;
    }
    public function voltarPag()
    {
        $this->pagAtual--;
    }
    #endregion
}
