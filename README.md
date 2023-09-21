## Install e Iniciar o projeto

Compilar a imagem
~~~ BASH
docker build . -t pwerder/php-tdd
~~~ 
Rodar o projeto
~~~ BASH
docker run -it -v .:/usr/src/myapp pwerder/php-tdd /bin/bash
~~~

## Projeto

1. Criamos um novo arquivo de teste chamado BibliotecaTest.php.
2. Importamos a classe TestCase do PHPUnit.
3. Definimos uma classe de teste chamada BibliotecaTest, que herda de TestCase.
4. No método testAdicionarLivro, criamos uma instância da classe Biblioteca e um objeto Livro.
5. Chamamos o método adicionarLivro da biblioteca com o livro que criamos.
6. Em seguida, verificamos se o livro foi adicionado corretamente à biblioteca usando as funções do
   PHPUnit, como assertCount e assertSame.

~~~
+-------------------------------------------------------+
|    Biblioteca                                         |
+-------------------------------------------------------+
| - livros: Lista<Livro>                                |
+-------------------------------------------------------+
| + adicionarLivro(livro: Livro): void                  |
| + removerLivro(livro: Livro): void                    |
| + listarLivros(): Lista<Livro>                        |
| + encontrarLivroPorTitulo(titulo: String): Livro      |
+-------------------------------------------------------+

+-------------------------------------------------------+
|     Livro                                             |
+-------------------------------------------------------+
| - titulo: String                                      |
| - autor: String                                       |
| - anoPublicacao: int                                  |
+-------------------------------------------------------+
| + getTitulo(): String                                 |
| + setTitulo(titulo: String): void                     |
| + getAutor(): String                                  |
| + setAutor(autor: String): void                       |
| + getAnoPublicacao(): int                             |
| + setAnoPublicacao(ano: int): void                    |
+------------------------------------------------------+
~~~
