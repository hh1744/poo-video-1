<?php

Abstract class Humain
{
    public $nom;
    public $prenom;
    protected $age;

    public function __construct($nom, $prenom, $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->setAge($age);
    }

    public function setAge($age):void
    {
        if(!is_int($age))
        {
            throw new Exception("L'age doit etre un entier");
        }
        $this->age = $age;
    }

    public function getAge():int
    {
        return $this->age;
    }

    abstract public function is_here();
}