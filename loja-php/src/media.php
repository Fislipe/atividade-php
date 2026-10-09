<?php

$media1 = 7.0;
$media2 = 6.5;

$mediaFinal = ($media1 + $media2) / 2;

if ($mediaFinal >= 7.0) {
    echo "Aprovado com média: " . $mediaFinal;
} elseif ($mediaFinal >= 5.0) {
    echo "Recuperação com média: " . $mediaFinal;
} else {
    echo "Reprovado com média: " . $mediaFinal;
}
