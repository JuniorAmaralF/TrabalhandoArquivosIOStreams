<?php
//# especifica qual arquivo voce que ler dentro do zip
echo file_get_contents('zip://arquivos.zip#lista-cursos.txt');