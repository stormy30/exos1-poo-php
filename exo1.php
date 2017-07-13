<!--/**-->
<!--*## Exercice 1-->
<!--* Écrire une classe PHP simple qui affiche le message suivant « Bonjour tout le monde !».-->
<!--* Utiliser une méthode __contstruc() publique.-->
<!---->
<!--*/-->

<?php

class Salutation {
     //public $propriete1 = 'Bonjour';

  public function __construct(){
        echo "Bonjour tout le monde !";

  }
};

$objet = new Salutation();