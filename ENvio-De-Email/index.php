<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "http://www.checktout.com.br/wb/pingpong");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "nome=Vladimir&idade=18&sexo=masculino");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resposta = curl_exec($ch);
curl_close($ch);

print_r($resposta);


?>

