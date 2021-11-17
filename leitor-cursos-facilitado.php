<?php

//essa chamada de funcção vai 
//abrir o arquivo, buscar todo o conteudo desse arquivo e retornar pra 
//gente como uma string e fechar o arquivo
$cursos = file_get_contents('lista-cursos.txt');

echo $cursos;

/*
file_get_contents devolve todo o conteúdo o arquivo como uma string. 
file devolve cada linha do arquivo como um item em um array
*/