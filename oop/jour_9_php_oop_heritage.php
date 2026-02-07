<?php

// Jour 9 : PHP POO - Héritage
// ● Objectif du jour : Comprendre et implémenter le concept d'héritage pour réutiliser
// du code.
// ● Questions Théoriques :
// 1. Comment fonctionne l’héritage en POO ? À quoi sert extends ?
// 2. Quelle est la différence entre parent:: et self:: ?
// 3. Quel est l'impact de la visibilité protected dans le contexte de l'héritage ?
// ● Challenges Pratiques :
// 1. Challenge 1 : Créer une classe Vehicule (attributs: marque, méthode:
// demarrer()). Créer une classe Voiture qui hérite de Vehicule et ajoute un
// attribut nombreDePortes.
// 2. Challenge 2 : Dans la classe Voiture, redéfinir la méthode demarrer() pour
// qu'elle affiche "La voiture démarre" au lieu de "Le véhicule démarre".
// 3. Challenge 3 : Créer une classe Moto qui hérite aussi de Vehicule. Appeler le
// constructeur du parent depuis le constructeur de Moto pour initialiser la
// marque.


// ============================ solution =============================
/*
    Questions Théoriques :

    1) l’héritage permet a une classe l’héritier des proprietes et methodes d'un autre classe
    et la classe qui herite est appelee classe enfant et le mot extends est utilise pour indique que classe herite d'une autre

    2) self:: -> fait reference a la classes actuelle, utilisee pour appeler des methodes ou const statique dans la class qui elle est ecrit
    parent:: -> fait reference a la class parent, utilisee pour appeler une methode ou const de la classe parent, meme si elle ete redefinie dans l'enfant

    3) accessible dans la classe et dans ses classes enfants, cela signifie que si une propriete est protected, une sous-classe peut utiliser directement,ce qui n'est pas posible avec private.


*/

// Challenges Pratiques :

class Vehicule {
    public $marque;

    public function __construct($marque) {
        $this->marque = $marque;
    }

    public function demarrer() {
        echo "le vehiclue demarre";
    }
}

class Voiture extends Vehicule {
    public $nombreDePortes;

    public function __construct($marque, $nombreDePortes) {
        parent::__construct($marque); 
        $this->nombreDePortes = $nombreDePortes;
    }
}


$maVoiture = new Voiture("Toyota", 5);
echo $maVoiture->marque; 
echo $maVoiture->nombreDePortes; 

// Challenge 2 :

class Voiture extends Vehicule {
    public $nombreDePortes;

    public function __construct($marque, $nombreDePortes) {
        parent::__construct($marque);
        $this->nombreDePortes = $nombreDePortes;
    }

    public function demarrer() {
        echo "le vehiclue demarre";
    }
}

// Test
$maVoiture = new Voiture("Honda", 4);
$maVoiture->demarrer(); 


// challenge 03;
class Moto extends Vehicule {
    public function __construct($marque) {
        parent::__construct($marque); 
    }

    public function demarrer() {
        echo "La moto demarre";
    }
}

// Test
$maMoto = new Moto("Yamaha");
$maMoto->demarrer(); 
