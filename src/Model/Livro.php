<?php

namespace Pribeiro\ProjetoTdd\Model;

class Livro
{
    private $titulo;
    private $autor;
    private $anoPublicacao;

    public function __construct($titulo, $autor, $anoPublicacao)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPublicacao = $anoPublicacao;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }
}