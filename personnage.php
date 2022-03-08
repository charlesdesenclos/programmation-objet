<?php 
    class Personnage
    {
        private $id_;
        private $pseudo_;
        private $vie_;

        public function __construct($id_,$NewPseudo,$NewVie)
        {
            $this-> pseudo_ = $NewPseudo;
            $this-> vie_ = $NewVie;
            $this->id_ = $id_;
        }
        public function getPseudo()
        {
            return $this-> pseudo_;
        }
        public function getVie()
        {
            $this-> vie_ = 100;
            return $this-> vie_;
        }
    }









    ?>