<?php

$arquivo = fopen('lista-cursos.txt','r');

//filesize pega o tamanho do arquivo
$tamanhoDoArquivo = filesize('lista-cursos.txt');

//fread ler o arquivo ate o tamanho de bytes informado que no caso e todo o arquivo
//dependendo do tamanho do arquivo nao e recomendavel usar o fread
$cursos = fread($arquivo,$tamanhoDoArquivo);

echo $cursos;

fclose($arquivo);