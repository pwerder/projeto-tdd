<?php

namespace Pribeiro\Tests\ProjetoTdd\Model;

use PHPUnit\Framework\TestCase;
use Pribeiro\ProjetoTdd\Model\Biblioteca;
use Pribeiro\ProjetoTdd\Model\Livro;

class BibliotecaTest extends TestCase
{
    public function testAdiconaUmLivroNaBiblioteca()
    {
        $livro = new Livro('Código Limpo', 'Robert C. Martin', 2011);
        $livraria = new Biblioteca();
        $livraria->adicionarLivro($livro);

        static::assertEquals($livro->getTitulo(), $livraria->listarLivros()[0]->getTitulo());
    }
}