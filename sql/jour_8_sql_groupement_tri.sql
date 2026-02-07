-- Jour 8 : SQL - Groupement et Tri
-- ● Objectif du jour : Savoir regrouper, trier et filtrer des ensembles de données
-- agrégées.
-- ● Questions Théoriques :
-- 1. Quelle est la différence entre WHERE et HAVING ?
-- 2. Dans quel ordre logique SQL exécute-t-il FROM, WHERE, GROUP BY, HAVING,
-- SELECT, ORDER BY ?
-- 3. Peut-on utiliser un alias de colonne (AS nom_alias) dans une clause WHERE ?
-- Et dans ORDER BY ?
-- ● Challenges Pratiques :
-- 1. Challenge 1 : (GROUP BY) Afficher le chiffre d’affaires total par client.
-- 2. Challenge 2 : (ORDER BY) Afficher les produits classés par prix, du plus cher au
-- moins cher.
-- 3. Challenge 3 : (HAVING) Afficher uniquement les clients ayant passé plus de 2
-- commandes.

-- =========================== solution =========================
-- Questions Théoriques :
-- 1) WHERE filter les lignes avant tout regroupment (GROUP BY) et HAVING filter les groupes apres le regroupment il a applique sur des resultats agreges (SUM,COUNT,AVG)
-- 2) 
-- FROM -> determiner les tables 
-- WHERE -> filter les lignes
-- GROUP BY -> regrouper les lignes
-- HAVING -> filter les groupes
-- SELECT -> selectionner les colonnes 
-- ORDER BY -> Trier les resultat final

-- 3) Dans WHERE -> Non (WHERE est excute avant la creation des alias) et Dans ORDER BY -> Oui

-- Challenges Pratiques :
-- Challenge 1 :
SELECT c.nom AS client, SUM(co.prix * co.quantite) AS chiffre_affaires
FROM clients c
JOIN commandes co ON c.client_id = co.client_id
GROUP BY c.nom;

-- Challenge 2 :
SELECT nom, prix
FROM produits
ORDER BY prix DESC;

-- challenge 3 :
SELECT c.nom AS client, COUNT(co.commande_id) AS nb_commandes
FROM clients c
JOIN commandes co ON c.client_id = co.client_id
GROUP BY c.nom
HAVING COUNT(co.commande_id) > 2;

