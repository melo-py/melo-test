<?php

// class Produit{
//     private $nom;
//     private $prix;
//     private $quantite;

//     public function __construct($nom,$prix,$quantite){
//         $this->nom=$nom;
//         $this->prix=$prix;
//         $this->quantite=$quantite;
//     }
//     public function calculerTotal(){
//         return $this->prix * $this->quantite;
//     }

//     public function getNom(){
//         return $this->nom;
//     }
//     public function getPrix(){
//         return $this->prix;
//         }

//     public function setPrix($nouveau){
//         if ($nouveau<0){
//             echo" Prix invalide. Le prix ne peut pas être négatif.";
//         }else{
//         $this->prix=$nouveau;
//     }
//     }

//     public function afficherDetails(){
//         echo "Nom:" .$this->nom;
//         echo "\nPrix:" .$this->prix;
//         echo "\nQuantité:" .$this->quantite; 
//         echo "\nTotal:" . $this->calculerTotal();
//     }
// }

// $produit1 = new Produit("Poulet Mayo", 10000,23);
// $produit2 = new Produit("Poulet Roti", 15000,12);
// $produit1->setPrix(12400);

// $produits = [$produit1,$produit2];
// foreach($produits as $produit){
//     $produit->afficherDetails();
//     echo "\n\n";
// }


Class Product{
    protected $nom;
    protected $prix;

    public function __construct($name,$price){
        $this->nom=$name;
        $this->prix=$price;
    }

    public function afficheDetails(){
        echo "\nNom:".$this->nom;
        echo "\nPrix:".$this->prix;
    }

}

class Vaccin extends Product{
    private $dateExpiration;
    
    public function __construct($name,$price,$date){
        parent::__construct($name,$price);
        $this->dateExpiration=$date;
    }

    public function afficheDetails(){
        echo "Nom:".$this->nom;
        echo "\nPrix:".$this->prix;
        echo "\nDate d'expiration:".$this->dateExpiration;
    }
}

class Aliment extends Product{
    private $dateExpiration;
    
    public function __construct($name,$price,$date){
        parent::__construct($name,$price);
        $this->dateExpiration=$date;
    }

    public function afficheDetails(){
        echo "Nom:".$this->nom;
        echo "\nPrix:".$this->prix;
        echo "\nDate d'expiration:".$this->dateExpiration;
    }
}

class Poulet extends Product {

    public function afficheDetails() {
        echo "Informations sur le poulet";
    }
}



$produits = [
    new Vaccin("Elanco", 15000, "15/12/2026"),
    new Aliment("Aliment pour poulets", 5000, "15/12/2026"),
    new Poulet("Poulet de chair", 3500)
];

foreach ($produits as $produit) {
    $produit->afficheDetails();
    echo "\n";
}


?>