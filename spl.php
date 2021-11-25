<?php

//SplFileObject e um objeto de arquivo, alem de conter informações do arquivo
//por padrao ja vem modo de leitura
$arquivoCursos = new SplFileObject('cursos.csv');

//enquanto nao chegar no final do arquivo, vou ler uma linha em csv
while(!$arquivoCursos->eof()){
    $linha = $arquivoCursos->fgetcsv(';');

    echo utf8_encode($linha[0]).PHP_EOL;
}

$date = new DateTime();
//getCTime pega em valor unix o tempo que o arquivo foi criado
$date->setTimestamp($arquivoCursos->getCTime());

//exibindo em formato de data , a criação do arquivo
echo $date->format('d/m/Y').PHP_EOL;

//pegando o tamanho do arquivo em bytes
echo $arquivoCursos->getSize().PHP_EOL;

/*
<?php
A class SplFileObject implementa algumas interfaces de Iterators 
do PHP, o que significa que podemos utilizar um objeto deste 
tipo dentro de um foreach. Então, para ler um arquivo linha a 
linha com SplFileObject, poderíamos fazer:

$arquivo = new SplFileObject('/caminho/para/arquivo');

foreach ($arquivo as $linha) {
    echo $linha;
}
*/