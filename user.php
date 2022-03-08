<?php
    echo"qhfdsqoi";
    class User{

        private $id_;
        private $login_;
        private $mdp_;
        //Propriété (Private)
        //Membres


        //Méthodes (Public)
        public function __construct($id_,$NewLogin, $NewMdp)
        {
            $this-> login_ = $NewLogin;
            $this-> mdp_ = $NewMdp;
            $this->id_ = $id_;
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