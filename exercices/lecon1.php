<?php

$nomElevage="Ferme SmartChicken";
$nombrePoulets=120;
$prixPoulet=3500;
$estdispo=true;
$total = $prixPoulet * $nombrePoulets;


if ($estdispo) {
    echo "Le produit est disponible.\n";
    echo "Nom de l'élevage : $nomElevage\n";
    echo "Nombre de poulets : $nombrePoulets\n";
    echo "Prix par poulet : $prixPoulet FCFA\n";
    echo "Total : $total FCFA\n";
} else {
    echo "Le produit n'est pas disponible.\n";
}

?>