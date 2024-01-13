<?php

require 'introduction.php';
class Patron extends Employe
{
    public $voiture;

    public function __construct($nom, $prenom, $age, $voiture)
    {
        parent::__construct($nom, $prenom, $age);

        $this->voiture = $voiture;
    }

    public function presentation():string
    {
        return "Bonjour, je suis $this->prenom $this->nom et j'ai {$this->getAge()} ans";
    }

    public function rouler():string
    {
        return "Je roule avec ma $this->voiture";
    }
}

$patron = new Patron('Joseph','Durand',45, 'Mercedes');
echo $patron->presentation();
echo $patron->rouler();