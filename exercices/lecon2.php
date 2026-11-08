<?php
function calculerTotal($prix, $quantite) {
    return $prix * $quantite;
}

$produits = [

    "Vaccin"=>[
        "nom"=>"Vaccin contre la grippe aviaire",
        "prix"=>15000,
        "quantite"=>50,
    ],
    "Aliment"=>[
        "nom"=>"Aliment pour poulets",
        "prix"=>5000,
        "quantite"=>100,
    ],
    "Poulet" => [
        "nom"=>"Poulet fermier",
        "prix"=>3500,
        "quantite"=>120,
    ]
];

foreach($produits as $nom=>$produit){
    echo$nom . "\n";
    echo"nom:" . $produit["nom"] . "\n";
    echo"prix:" . $produit["prix"] . "\n";  
    echo"quantite:" . $produit["quantite"] . "\n\n";
    echo"Total: " . calculerTotal($produit["prix"],$produit["quantite"]) . "\n\n";
}

?>