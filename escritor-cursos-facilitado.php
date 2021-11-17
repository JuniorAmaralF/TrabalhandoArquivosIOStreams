<?php

$curso = 'Design Patterns PHP III: Boas praticas de programação';

//colocar nesse arquivo o conteudo 
// o terceiro parametro FILE_APPEND (adiciona conteudo ao arquivo)
file_put_contents('cursos-php.txt',$curso , FILE_APPEND);

