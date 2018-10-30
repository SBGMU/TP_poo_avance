<?php

    namespace Entity\User;

    class User {
        
        public $prenom; 
        public $nom;
        public $dateNaissance;

        public function __construct($prenom, $nom, $dateNaissance){
            $this->prenom = $prenom;
            $this->nom = $nom;
            $this->dateNaissance = date('d-m-Y');
        }

        public function getPrenom(){
            return $this->title;
        }

        public function getNom(){
            return $this->nom;
        }

        public function getdateNaissance(){
            return $this->dateNaissance;
        }


        public function setPrenom($prenom){
            $this->prenom = $prenom;
        }

        public function setNom($nom){
            $this->nom = $nom;
        }

        public function setdateNaissance($dateNaissance){
            $this->dateNaissance = $dateNaissance;
        }
    }