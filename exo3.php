
<!--/**-->
<!--## Exercice 3-->
<!-- * Définissez la classe **Phrase** qui contient :-->
<!---->
<!--- Une propriété private nommée "chaine"-->
<!--- Quatre méthodes de type public nommées gras(), italique(), souligne() et majuscules()-->
<!--qui retournent respectivement la chaîne passée en argument mise en gras, en italique,-->
<!--soulignée et mise en majuscules(voir le résultat image1.png)-->
<!---->
<!-- */-->
<?php
class Phrase{
    private $chaine ='c_\'est la chaine' ;

    public function gras(){
      echo"<b>".$this->chaine."</b><br>";
    }
    public function italique(){
        echo"<i>".$this->chaine."</i><br>";
    }
    public function sousligne(){
        echo"<u>".$this->chaine."</u><br>" ;

    }
    public function majuscules(){
   echo "<t style='text-transform:uppercase'>".$this->chaine."</t><br>";

    }
};
$transforText=new Phrase();
$transforText->gras();
$transforText->italique();
$transforText->sousligne();
$transforText->majuscules();
