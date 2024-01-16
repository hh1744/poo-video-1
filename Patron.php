<?php

require 'Employe.php';

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
        return "Bonjour le monde, je suis $this->prenom $this->nom et j'ai {$this->getAge()} ans";
    }

    public function rouler():string
    {
        return "Je roule avec ma $this->voiture";
    }

    public function travailler()
    {
        return "Je suis le patron et je supervise";
    }
}

$patron = new Patron('Joseph','Durand',45, 'Mercedes');
echo "<br/>".$patron->presentation()."<br/>";
echo $patron->rouler()."<br/>";
echo faireTravailler($patron);