<?php

// Jour 4 : PHP POO - Classes & Objets
// ● Objectif du jour : Comprendre la syntaxe de base pour créer une classe, définir ses
// membres et l'instancier.
// ● Questions Théoriques :
// 1. Quelle est la différence entre une classe et un objet ?
// 2. À quoi sert le mot-clé $this ?
// 3. Quel est le rôle du constructeur (__construct) ?
// ● Challenges Pratiques :
// 1. Challenge 1 : Créer une classe Voiture avec 3 attributs (marque, modele,
// vitesse) et une méthode accelerer() qui augmente la vitesse.
// 2. Challenge 2 : Ajouter un constructeur à la classe Voiture pour initialiser la
// marque et le modèle lors de la création de l'objet.
// 3. Challenge 3 : Instancier deux objets de la classe Voiture et appeler leurs
// méthodes pour vérifier leur fonctionnement.


// ================================= Solution ========================================================

// Questions Théoriques:
/*
    1) classe c'est un plan,objet c'est une instance cree a partir de la classe, un class peut cree plusieurs objets.
    2) $this il permet d'acceder objet courant.
    3) est une method special il appelee automatiqument lors de creation d'un objet.
*/


// Challenges Pratiques :

// challenege 01:

class Voiture
{
    public string $marque;
    public string $modele;
    public int $vitesse;
    public function __construct($marque, $modele)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->vitesse = 0;
    }

    public function accelerer(int $value){
        $this->vitesse += $value;
    }
    

}

$voiture1 = new Voiture("BMW","M10");
$voiture2 = new Voiture("DACIA","M22");
$voiture1->accelerer(100);
$voiture2->accelerer(60);

echo "vitesse de Voiture " . $voiture1->marque . " est " . $voiture1->vitesse . PHP_EOL;
echo "vitesse de Voiture 2 " . $voiture2->marque . " est " . $voiture2->vitesse . PHP_EOL;

