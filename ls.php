<?php
//pegando o diretorio atual que e represetado pelo .
// o retorno da função dir
//Um objeto do tipo Directory representando o diretório passado por parâmetro
$diretorioAtual = dir('.');

//mostrando o caminho do diretorio atual
echo $diretorioAtual->path.PHP_EOL;

//enquanto o arquivo no diretorio Atual receber um leitura
//execute codigo abaixo
while ($arquivo = $diretorioAtual->read()){
    echo $arquivo.PHP_EOL;
}