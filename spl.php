<?php

//SplFileObject e um objeto de arquivo, alem de conter informações do arquivo
//por padrao ja vem modo de leitura
$arquivoCursos = new SplFileObject('cursos.csv');

//enquanto nao chegar no final do arquivo, vou ler uma linha em csv
while(!$arquivoCursos->eof()){
    $linha = $arquivoCursos->fgetcsv(';');

    echo $linha[0].PHP_EOL;
}

$date = new DateTime();
//getCTime pega em valor unix o tempo que o arquivo foi criado
$date->setTimestamp($arquivoCursos->getCTime());

//exibindo em formato de data , a criação do arquivo
echo $date->format('d/m/Y').PHP_EOL;

//pegando o tamanho do arquivo em bytes
echo $arquivoCursos->getSize().PHP_EOL;