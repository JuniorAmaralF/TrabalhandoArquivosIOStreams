<?php

echo "Ola mundo";
print "OLa mundo";

// outra forma de mostrar os dados na tela 
$tela = fopen('php://stdout', 'w');
fwrite($tela,'Ola Mundo');

fwrite(STDOUT,'OLa Constante stdout');

fwrite(STDERR,'OLa Constante saida de erro');

