<?php

class Employe{
    public $nom;
    public $prenom;
    public $age;

    public function __construct($nom, $prenom, $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    public function presentation()
    {
        var_dump("Bonjour, je suis $this->prenom $this->nom et j'ai $this->age ans");
    }
}

(new Employe('ANDRIA','Lana','4'))->presentation();