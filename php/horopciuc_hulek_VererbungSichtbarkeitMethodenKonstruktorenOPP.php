<?php
    class Person
    {
        private $name, $alter, $geschlecht;

        public function __construct($name, $alter, $geschlecht)
        {
            $this->setName($name);
            $this->setAlter($alter);
            $this->setGeschlecht($geschlecht);
        }

        public function setName($name)
        {
            if (strlen($name) > 0) {
                $this->name = $name;
            } else {
                $this->name = "Tobias";
            }
        }

        public function setAlter($alter)
        {
            if ($alter >= 0 && $alter <= 130) {
                $this->alter = $alter;
            } else {
                $this->alter = 0;
            }
        }

        public function setGeschlecht($geschlecht)
        {
            $geschlecht = strtolower($geschlecht);
            if ($geschlecht == 'm' || $geschlecht == 'w' || $geschlecht == 'd') {
                $this->geschlecht = $geschlecht;
            } else {
                $this->geschlecht = 'd';
            }
        }

        public function getName()
        {
            return $this->name;
        }

        public function getAlter()
        {
            return $this->alter;
        }

        public function getGeschlecht()
        {
            return $this->geschlecht;
        }
        public function toString()
        {
            if($this instanceof Person){
                return "Name: ".$this->getName()." | Alter: ".$this->getAlter()." | Geschelcht: ".$this->getGeschlecht();
            }
            return "Beim Parameter handelt es sich um ein ungültiges Objekt";
        }
    }
    class Schueler extends Person {

        private $schule;
        function __construct($name, $alter, $geschlecht, $schule)
        {
            parent::__construct($name, $alter, $geschlecht);
            $this->setSchule($schule);
        }

        public function setSchule($schule){
            if(strlen($schule)>0){
                $this->schule = $schule;
            }else {
                $this->schule =  "TGM";
            }
        }
        public function toString()
        {
            return parent::toString()." | Schule: ".$this->schule;
        }
    }
?>