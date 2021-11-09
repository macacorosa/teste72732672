<?php

$dados = file("files/cadastro.txt");

var_dump($dados);

echo $dados[0];

$size = count($dados);

for ($i=0; $i < $size; $i++) { 
	echo $dados[$i]."<br>";
}