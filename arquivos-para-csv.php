<?php

//file_get_contensts pega o conteudo do arquivo em texto
//file pega o conteudo do arquivo como um array
$meusCursos = file('lista-cursos.txt');
$outrosCursos = file('cursos-php.txt');


//criando um arquivo csv , usando o ; e possivel abrir o arquivo no excel

$arquivoCsv = fopen('cursos.csv','w');

foreach($meusCursos as $curso){
    $linha = [trim($curso), 'Sim'];

    //ja escreve no arquivo csv no formato compativel , separado por virgula
    fputcsv($arquivoCsv,$linha , ';');
    //vai ler uma linha do arquivo , fazer o parse dela , trazer como array
    //fgetcsv();
}

foreach($outrosCursos as $curso){
    $linha = [trim($curso), 'Não'];

    fputcsv($arquivoCsv,$linha , ';');
}

fclose($arquivoCsv);