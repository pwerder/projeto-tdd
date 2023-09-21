<?php

namespace Pribeiro\ProjetoTdd\Model;

class Biblioteca
{
    private $livros;

    public function adicionarLivro(Livro $livro): void
    {
        $this->livros[] = $livro;
    }

    public function listarLivros(): array
    {
        return $this->livros;
    }
}