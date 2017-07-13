<?php
//## Exercice 4
//* Écrivez une classe PHP qui trie un tableau d'entiers dans l'ordre croissant en utilisant la fonction **sort()** de PHP.
//* Créer une méthode __construc() qui prend en argument le tableau.
//* Créer la méthode **tri** qui renvoie le tableau trié.
//* Afficher le tableau trié à l'aide de **var_dump** ou **print_r**
//
//          Exemple:
//          Tableau d'entiers : array(11, -2, 4, 35, 0, 8, -9)
//          Résultat : Array ( [0] => -9 [1] => -2 [2] => 0 [3] => 4 [4] => 8 [5] => 11 [6] => 3
class PHP {
    public $Array ;
    public function __construct($Array){
        $this->Array=$Array;
    }

    public function tri(){
        $Arraytrier=$this->Array;
        sort($Arraytrier);
        return $Arraytrier;
    }
}

$Arraynew =new PHP(array(22, 4, 70,0,-16,-2));
print_r($Arraynew->tri());