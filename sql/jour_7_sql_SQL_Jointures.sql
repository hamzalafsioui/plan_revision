-- Jour 7 : SQL - Jointures
-- ● Objectif du jour : Maîtriser la combinaison de données provenant de plusieurs
-- tables.
-- ● Questions Théoriques :
-- 1. Quelle est la différence entre INNER JOIN et LEFT JOIN ?
-- 2. Dans quel cas utiliser un RIGHT JOIN ?
-- 3. Peut-on joindre plus de deux tables dans une seule requête ?
-- ● Challenges Pratiques :
-- 1. Challenge 1 : (INNER JOIN) Afficher les commandes avec le nom du client
-- correspondant (tables Commandes et Clients).
-- 2. Challenge 2 : (LEFT JOIN) Afficher tous les clients, et le montant de leur
-- commande s'ils en ont une (afficher NULL sinon).
-- YouCode - SaiyansCoders 2025/2026
-- 3. Challenge 3 : (JOIN 3 tables) Afficher le détail des commandes : nom du client,
-- nom du produit et quantité commandée (tables Clients, Commandes,
-- Produits, Lignes_Commandes).


-- ====================== Solution =====================================

--  Questions Théoriques :

--  1) INNER JOIN (Intersection) retourne uniquement les lignes qui ont correspondance dans les deux tables et les lignes sont relation sont exclues.
-- pour LEFT JOIN (tout a gauche)  retourne toutes les lignes de la table de gauche meme sans correspondance et les valeurs manquementes sont affichee en NULL.
--  2) RIGHT JOIN (tout a droite) Quand la table principal est a droite 
--  3) OUI

-- Challenges Pratiques :

-- Challenge 1 :
SELECT 
    c.nom 
FROM Clients c 
INNER JOIN Commandes cmd 
ON c.id = cmd.client_id;
-- challenge 2 :
SELECT 
    c.nom,
    cmd.montant 
FROM Clients c 
LEFT JOIN Commandes cmd 
ON C.id = cmd.client_id;
-- challenge 3 :
SELECT 
    c.nom,
    p.nom_produit,
    lc.quantite
FROM Clients c
INNER JOIN Commandes cmd
    ON c.id = cmd.client_id
INNER JOIN Lignes_Commandes lc
    ON cmd.id = lc.commande_id
INNER JOIN Produits p
    ON lc.produit_id = Produits.id;

