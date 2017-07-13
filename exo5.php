<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
<!--/**-->
<!--## Exercice 5-->
<!-- * Réaliser une calculatrice:-->
<!-- * Ecrire une classe PHP avec un constructeur qui possède deux arguments,-->
<!-- * Écrire les méthodes qui permettent de calculer l'addition, la soustraction , la multiplication,  ou la division des deux arguments.-->
<!---->
<!--Exemple d'exécution:-->
<!--$calc = new MaCalculatrice( 8, 4);-->
<!--echo $calc- > ajout(); // affichera 12-->
<!--echo $calc- > produit(); // affichera32-->
<!---->
<!-- */-->

<?php
class PHP {
    public $nbr1;
    public $nbr2;

    public function __construct($nbr1,$nbr2){
        $this->nbr1=$nbr1;
        $this->nbr2=$nbr2;
    }

    public function Ajouter(){
        $resultat=$this->nbr1 + $this->nbr2;
        return $resultat;
    }

    public function Multiplier(){
        $resultat=$this->nbr1 * $this->nbr2;
        return $resultat;
    }
    public function Diviser(){
        $resultat=$this->nbr1 / $this->nbr2;
        return $resultat;
    }

    public function Soustraction(){
        $resultat=$this->nbr1 - $this->nbr2;
        return $resultat;
    }

}
$resultat =new PHP(10,2);
print_r($resultat->Diviser()."<br>");
print_r($resultat->Soustraction()."<br>");
print_r($resultat->Multiplier()."<br>");
print_r($resultat->Ajouter()."<br>");



?>
</body>
</html>
