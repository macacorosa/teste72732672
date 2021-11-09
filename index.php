<?php
if(is_dir("files")){
  echo "Pasta já criada!"; 
}else{
  mkdir("files");
  echo "Diretório criado com sucesso!"; 
}

$file = fopen("files/cadastro.txt","a+");
fwrite($file,"Felicia da Silva Oliveira \r\n");
fclose($file); 

