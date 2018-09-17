<?php 
    class Membre{
        // les variables en poo on les appels attribut
        private $pseudo;
        private $email;
        private $signature;
        private $actif;

        // les functions en poo on les appels les methodes
        public function getPseudo(){
            return $this->pseudo;
        }
        public function setPseudo($nouveauPseudo){
            // verifier si le nouveau pseudo n'est ni vide , ni trop long
            if(!empty($nouveauPseudo) and strlen($nouveauPseudo)<15 ){
                // ok , on change son pseudo
                $this->pseudo=$nouveauPseudo;
            }
        }
        public function envoyerMail($titre,$message){
            //mail($this->email,$titre,$message);
        }
        public function bannir(){
             $this->actif=false;
             $this->envoyerMail('vous avez été banni','ne revenez plus ici');
         }
        //  les constructeurs
        public function __construct($idMembre){
            // Récupérer en base de données les infos du membre
            // SELECT pseudo, email, signature, actif FROM membres WHERE
            //id = ...
            // definir les variables avec les resultats de la bdd
            //$this->pseudo=$donnees['pseudo'];
            //$this->email=$donnees['email'];

        }
        // les destructeurs
        public function __destruct(){
            echo"cet objet vas être dedruits";
        }
    }
