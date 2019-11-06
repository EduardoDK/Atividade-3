<?php

 $email = $_POST['email'];


$arquivo = fopen("emails.txt", "a") or die("Não foi possivel encontrar o arquivo");

$texto = "$email\n";

fwrite($arquivo,$texto);

fclose($arquivo);

$linhas = count( file( 'emails.txt' ) );

echo  "O numero de emails cadastrados no momento é " . $linhas;


?>