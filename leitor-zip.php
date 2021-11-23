<?php
//# especifica qual arquivo voce que ler dentro do zip
//echo file_get_contents('zip://arquivos.zip#lista-cursos.txt');


//criando um contexto para o protocolo zip, para poder ler o arquivo com senha

$contexto = stream_context_create([
    'zip' => [
        'password' => '123456'
    ]
    ]);

//# especifica qual arquivo voce que ler dentro do zip
echo file_get_contents(
    'zip://arquivosSenha.zip#lista-cursos.txt',
    false,
    $contexto
);

