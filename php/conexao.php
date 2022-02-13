<?php

$server = "localhost";
$user = "root";
$pass = "";
$bd = "startsoft";

if ($conn = mysqli_connect($server, $user, $pass, $bd)) {
  //echo "conectado";
} else {
  echo "erro ao conectar";
}

function mensagem($texto, $tipo)
{
  echo "<div class='alert alert-$tipo' role='alert'>
            $texto
        </div>";
}

function mostrar_data($dtNascimento) {
  $dtNascimento = explode('-', $dtNascimento);
  $escreve = $dtNascimento[2] . "/" .$dtNascimento[1] . "/" .$dtNascimento[0];
  return $escreve;
}
