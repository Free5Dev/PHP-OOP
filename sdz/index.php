<?php 
    // inclusion de la class Membre
    include_once("Membre.class.php");
    // creation d'un objet membre qui est une instance de la classe Membre
    $membre=new Membre(31);
    // on lui passe le nouveau pseudo en parametre
    $membre->setPseudo('Mateo');
    echo $membre->getPseudo().' vous allez etre banni';
    $membre->bannir()
    // -----------------------------------------------------------
    //$membre=new Membre(31);//contient pseudo,email,etc...
    $maitreDesLieux=new Admin(32);//contient les memees proprietes de membres plus la couleurs....
    $membre->setPseudo('Arckintox'); // OK
    $maitreDesLieux->setPseudo('M@teo21'); // OK
    $membre->setCouleur('Rouge'); // Impossible (un membre n'a pas de couleur)
    $maitreDesLieux->setCouleur('Rouge'); // OK
?>