-- Jour 3 : SQL - Agrégats Simples
-- ● Objectif du jour : Maîtriser l'utilisation des fonctions d'agrégation pour résumer des
-- données.
-- ● Questions Théoriques :
-- 1. À quoi servent les fonctions COUNT, SUM, et AVG ?
-- 2. Peut-on utiliser COUNT(*) et COUNT(colonne) de manière interchangeable ?
-- Pourquoi ?
-- 3. Comment MAX et MIN peuvent-ils être utilisés sur des dates ou des chaînes de
-- caractères ?
-- ● Challenges Pratiques :
-- 1. Challenge 1 : Écrire la requête pour afficher le nombre total de commandes.
-- 2. Challenge 2 : Écrire la requête pour calculer le prix moyen de tous les produits.
-- 3. Challenge 3 : Écrire la requête pour trouver le montant de la commande la
-- plus chère.

-- ======================== Solution =========================================

-- Questions Théoriques :
-- 1) sont des fonctions d'agregations, COUNT pour compter le nombre de lignes, SUM pour calculer la somme des valeurs d'une colonne, AVG pour calculer la moyenne des valeurs d'une colonne.
-- 2) Non, COUNT(*) est compte toutes les lignes mais COUNT(colonne) est compte uniquement les lignes qui sont n'est pas null dans cette colonne.
-- 3) pour dates
-- MAX(date) -> retourne la date la plus recente
-- MIN(date) -> retourne la date la plus ancienne 

-- pour chaine de caractere
-- MIN(nom)-> premier valeur dans l’ordre alphabetic

-- MAX(nom) → derniere valeur dans l’ordre alphabetic

-- Challenges Pratiques:
-- Challenge 1
SELECT COUNT(*) FROM commandes;

-- Challenge 2
SELECT AVG(prix) FROM produits;

-- Challenge 3
SELECT MAX(montant) FROM commandes;