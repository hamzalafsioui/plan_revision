<?php

// <!-- Jour 5 : PHP POO - Encapsulation
// ● Objectif du jour : Maîtriser les niveaux de visibilité (public, private, protected) et
// l'utilisation des getters/setters.
// ● Questions Théoriques :
// 1. Qu’est-ce que l’encapsulation ? Quel est son but ?
// 2. Quelle est la différence entre public, private et protected ?
// 3. À quoi servent les getters et setters ? Est-ce toujours nécessaire d'en avoir pour
// chaque attribut ?
// ● Challenges Pratiques :
// 1. Challenge 1 : Modifier la classe Voiture : mettre l'attribut vitesse en private.
// 2. Challenge 2 : Créer un getter getVitesse() et un setter setVitesse(int $v)
// qui empêche d'assigner une vitesse négative.
// 3. Challenge 3 : Créer une classe CompteBancaire avec un attribut solde privé.
// Implémenter les méthodes deposer() et retirer() en s'assurant que le solde
// ne puisse pas devenir négatif. -->


// ============================= Solution =========================================

// Questions Théoriques :
/*
    1) l’encapsulation consiste a cacher les donnes internes d'un objet et controler leur acces via a methodes et aussi pour proteger les donnes.

    2) public => Partout , Private => uniquement dans la classe, Protected => Dans la classe et et ses class filles.

    3) les getters Pour Lire les donnes, les setters Pour Modifier les donnes. Non ce n'est pas obligatoire d'avoir chaque attribut
*/

// Challenges Pratiques :
// Challenge 1

class Voiture
{
    public string $marque;
    public string $modele;
    private int $vitesse;
    public function __construct($marque, $modele)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->vitesse = 0;
    }
    public function getVitesse(){
        return $this->vitesse;
    }

    public function setVitesse(int $v){
        if($v<0){
            echo 'vitesse doit etre positif (-';
            return;
        }
        $this->vitesse = $v;
    }

    public function accelerer(int $value){
        $this->vitesse += $value;
    }
    

}

// challenege 03;
class CompteBancaire{
    private float $solde;

     public function getSolde(): float
    {
        return $this->solde;
    }


    public function deposer(float $montant){
        if($montant<0){
            echo 'le montant doit etre positif';
            return;
        }
        $this->solde += $montant;
    }

    public function retirer(float $montant){
        if($montant<0){
            echo 'le montant doit etre positif';
            return;
        }

        if($this->solde < $montant){
            echo 'solde insuffisant';
            return;
        }

        $this->solde -= $montant;
    }
}




$voiture1 = new Voiture("BMW","M10");
$voiture2 = new Voiture("DACIA","M22");
$voiture1->accelerer(100);
$voiture2->accelerer(60);

echo "vitesse de Voiture " . $voiture1->marque . " est " . $voiture1->vitesse . PHP_EOL;
echo "vitesse de Voiture 2 " . $voiture2->marque . " est " . $voiture2->vitesse . PHP_EOL;

