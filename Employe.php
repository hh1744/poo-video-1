<?php
require 'Humain.php';
require 'Travailleur.php';

class Employe extends Humain implements Travailleur{

    public function presentation():string
    {
        return "Salut, je suis $this->prenom $this->nom et j'ai $this->age ans";
    }

    public function travailler()
    {
        return "Je suis un employe et je travail dur";
    }

    public function is_here()
    {
        return "Je suis present";
    }
}

function faireTravailler(Travailleur $objet)
{
    return "Travail en cours: {$objet->travailler()}";
}

$object = new Employe('ANDRIA','Lana',35);
echo $object->presentation()."<br/>";
echo faireTravailler($object)."<br/>";