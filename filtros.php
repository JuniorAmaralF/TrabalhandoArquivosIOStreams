<?php

$arquivosCursos = fopen('lista-cursos.txt','r');

require 'MeuFiltro.php';

stream_filter_register ('alura.partes', MeuFiltro::class);

//adiciona um filtro ao streamer , string.toupper vai colocar deixa todas letras maisculas
stream_filter_append($arquivosCursos,'alura.partes');

echo fread($arquivosCursos,filesize('lista-cursos.txt'));

