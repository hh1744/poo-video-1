<?php
require 'Employe.php';

class Vacataire extends Employe
{
    public function presentation():string
    {
        return "Hi, je suis $this->prenom $this->nom et j'ai {$this->getAge()} ans";
    }

    public function travailler():string
    {
        return "Je suis vacataire et je ne travail pas tout le temps";
    }
}

$object = new Vacataire('ROCHE','Rija',65);
echo "<br/>".$object->presentation()."<br/>";
echo faireTravailler($object)."<br/>";