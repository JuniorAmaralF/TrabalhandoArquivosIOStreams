<?php
//procurando o arquivo zip com nome arquivos.zip
//dentro dele  depois da # procura o arquivos cursos-php.txt
//modo de leitura 'r'
$cursos = fopen ('zip://arquivos.zip#cursos-php.txt','r');

//de um stream copie os dados para outro stream
//STDOUT que vai imprimir os dados na tela
//Resumindo estou lendo direto de um arquivo para uma tela 
//em alguns casos de arquivos muitos grandes , pode ser util
stream_copy_to_stream($cursos,STDOUT);