<?php
    echo"qhfdsqoi";
    class User{

        private $login_;
        private $mdp_;
        //Propriété (Private)
        //Membres


        //Méthodes (Public)
        public function __construct($NewLogin, $NewMdp)
        {
            $this-> login_ = $NewLogin;
            $this-> mdp_ = $NewMdp;
        }
        public function getNom()
        {
            return $this->login_;
            
        }

        public function SeConnecter($UnMotDePasse)
        {
            if ($UnMotDePasse ==$this->mdp_)
            {
                return true;
            }
            else
            {
                return false;
            }

        
            
        }
    }

?>