<?php
//abri um arquivo fopen()
//primeiro parametro nome do arquivo
//segundo parametro indica a ação no arquivo
$arquivo = fopen('lista-cursos.txt','r');

//para saber se estou no fim do arquivo
// file end of file (feof)
while (!feof($arquivo)) {//se nao tiver alcaçando o final do arquivos leio a proxima linha

    //fgets pega uma string ate o final da linha de um determinado arquivo
    //e possivel passar a quantidade de caracteres que quero ler nesta linha
    //que pode ser passado no segundo parametro
    $curso = fgets($arquivo);

    echo $curso;
}

//fecha o arquivo
fclose($arquivo);