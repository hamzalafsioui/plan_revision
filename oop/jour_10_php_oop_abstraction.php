<?php

// Jour 10 : PHP POO - Abstraction
// ● Objectif du jour : Savoir quand et comment utiliser les classes et méthodes
// abstraites.
// ● Questions Théoriques :
// 1. Qu’est-ce que l’abstraction ?
// 2. Peut-on instancier une classe abstraite ? Pourquoi ?
// 3. Peut-on déclarer une méthode abstraite private ? Expliquez.
// ● Challenges Pratiques :
// 1. Challenge 1 : Créer une classe abstraite Animal avec une méthode crier(). La
// classe Animal ne peut pas être instanciée.
// 2. Challenge 2 : Créer une classe Chien et une classe Chat qui héritent d'Animal
// et implémentent chacune leur propre version de la méthode crier().
// 3. Challenge 3 : Créer une classe parente Employe avec une méthode abstraite
// calculerSalaire(). Créer deux classes filles EmployeFixe et
// EmployeCommission qui l'implémentent.

// ===================== Solution =====================================

/*
    Questions Théoriques :

        1) abstraction consiste a definir ce qu'un objet doit faire sans dire comment il le faire.
        2) Non, on ne peut pas instancierun classe abstraite parce que il doit etre heritee et aussi il est incomplete 
        3) Non, une methode abstraite il doit etre implementee par les classes filles et une methode private n'est pas accessible aux classes filles.

*/

// Challenges Pratiques :

abstract class Animal
{
    abstract public function crier();
}

// challenge 02

class Chien extends Animal
{
    public function crier()
    {
        return "Le chien crieeeeeeeeee";
    }
}

class Chat extends Animal
{
    public function crier()
    {
        return "Le chat miauleeeeee";
    }
}

// challenge 03


abstract class Employe
{
    protected string $nom;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    abstract public function calculerSalaire();
}


class EmployeFixe extends Employe
{
    private float $salaireFixe;

    public function __construct(string $nom, float $salaireFixe)
    {
        parent::__construct($nom);
        $this->salaireFixe = $salaireFixe;
    }

    public function calculerSalaire()
    {
        return $this->salaireFixe;
    }
}


class EmployeCommission extends Employe
{
    private float $chiffreAffaires;
    private float $taux;

    public function __construct(string $nom, float $chiffreAffaires, float $taux)
    {
        parent::__construct($nom);
        $this->chiffreAffaires = $chiffreAffaires;
        $this->taux = $taux;
    }

    public function calculerSalaire()
    {
        return $this->chiffreAffaires * $this->taux;
    }
}

$emp1 = new EmployeFixe("hamza", 2000);
$emp2 = new EmployeCommission("ali", 10000, 0.1);

echo $emp1->calculerSalaire(); 
echo $emp2->calculerSalaire(); 
