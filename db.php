<?php

$connection = mysqli_connect('localhost', 'root', 'fiap', 'desafio');

if (!$connection) {
  die('Ixi,');
}else{
  echo "Conexão ok!";
}

 ?>
