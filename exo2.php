<?php
//## Exercice 2
//* Ecrire une classe PHP contenant la propriété **$chaine** suivante: "Bonjour Tout Le Monde, moi c'est "
//* Créer la méthode **presentation** qui permet d'afficher la chaine suivi de **VotreNom**".
//* **VotreNom** est un argument(paramètre) de la méthode **presentation**.
class Salutation {
    public $chaine = 'Bonjour tout le monde, moi c\'est ';
    public $VotreNom ;

    public function Presentation($VotreNom){
        {
        $this->VotreNom=$VotreNom;
        echo $this->chaine.$this->VotreNom;
        }

    }
};
$bonjour=new Salutation();
$bonjour->Presentation("véro");



