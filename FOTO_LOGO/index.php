<?php
$imagem = "imagem.png";

list($largura_original, $altura_original) = getimagesize($imagem);
list($largura_mini, $altura_mini) = getimagesize("mini_imagem.png");
list($largura_E, $altura_E) = getimagesize("imagemE.png");
list($largura_P, $altura_P) = getimagesize("imagemP.png");

$imagem_final = imagecreatetruecolor($largura_original, $altura_original);

$imagem_original = imagecreatefrompng("imagem.png");
$imagem_mini = imagecreatefrompng("mini_imagem.png");
$imagemE = imagecreatefrompng("imagemE.png");
$imagemP = imagecreatefrompng("imagemP.png");

imagecopy($imagem_final, $imagem_original, 0, 0, 0, 0, $largura_original, $altura_original);

imagecopy($imagem_final, $imagem_mini, 300, -5, 0, 0, $largura_mini, $altura_mini);

imagecopy($imagem_final, $imagemE, 530, 750, 0, 0, $largura_E, $altura_E);

imagecopy($imagem_final, $imagemP, 0, 750, 0, 0, $largura_P, $altura_P);

#header("Content-Type: image/png");
imagepng($imagem_final, "imagem_minecraft.png");
#imagepng($imagem_final, null);

echo "Imagem criada com sucesso";
?>




