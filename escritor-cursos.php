<?php

//abrindo arquivo para escrever nele w,
// mode (a) ele abri o arquivo e coloca o curso no final
$arquivo = fopen('cursos-php.txt', 'a');

$curso = 'Design Patterns PHP II : Boas praticas de programação';
//escreve um texto no arquivo
fwrite($arquivo,$curso);

fclose($arquivo);