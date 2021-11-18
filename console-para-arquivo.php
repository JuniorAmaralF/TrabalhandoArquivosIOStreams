<?php

//stdin standard input vai esperar entrada de dados (teclado)
//stdin sempre vai ser modo leitura
//php:// ja fecha automaticamente
$tecladoV = fopen('php://stdin','r');
//$novoCurso = trim(fgets($tecladoV));

//para evitar a quebra de linha no final do arquivo utilizar trim()
//STDIN e um constante do php que faz a mesma coisa  do fopen('php://stdin','r');
$novoCurso = trim(fgets(STDIN));

//FILE_APPEND evita de apagar o conteudo ja existente no arquivo
file_put_contents('cursos-php.txt',"\n$novoCurso",FILE_APPEND);


