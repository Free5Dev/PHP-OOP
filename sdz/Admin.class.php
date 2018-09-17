<?php 
    // inclution de la classe mere 
    include_once("Membre.class.php");
    class Admin extends Membre{
        // la class Admin  benefici des propriete de class Membre en plus de ces propres propriétés filles aussi
        private $couleur;

        public function setCouleur($nouveauCouleur){
            //
        }
        public function getCouleur(){
            return $this->couleur=$couleur;
        }
    }
?>