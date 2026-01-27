-- Jour 2 : SQL - DDL & DML
-- Objectif du jour : Savoir créer des tables simples et manipuler les données (insérer,
-- mettre à jour, supprimer).
-- ● Questions Théoriques :
-- 1. Quelle est la différence entre DDL (CREATE, ALTER) et DML (INSERT, UPDATE,
-- DELETE) ?
-- 2. À quoi sert une clé primaire ?
-- 3. Comment filtre-t-on des données avec la clause WHERE ?
-- ● Challenges Pratiques :
-- 1. Challenge 1 : Écrire la requête CREATE TABLE pour une table Produits (id, nom,
-- prix, stock).
-- 2. Challenge 2 : Écrire les requêtes INSERT pour ajouter 3 nouveaux produits dans
-- la table.
-- 3. Challenge 3 : Écrire une requête UPDATE pour augmenter le prix d'un produit
-- spécifique de 10%, puis une requête DELETE pour supprimer un produit en
-- rupture de stock.


-- ============================ solution ================================

-- Questions Théoriques :
-- 1) DDL pour definir ou modifier la structure de base de donne et DML pour  manipuler les donnes dans les tables
-- 2) le role de cle primaire est identifier un column par une facon unique 
-- 3) WHERE condition (il permet de selectionner ou modifier les donnes selon une condition)

-- Challenges Pratiques :
-- 1) challenge 1
CREATE TABLE Produits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100),
    prix DECIMAL(8,2),
    stock INT
);

-- 2) Challenge 2
INSERT INTO Produits(nom,prix,stock) 
VALUES ('pc',1100,200),
('smartphone',400,100),
('smartwatch',80,150);

-- 3) challenge 3
UPDATE Produits
    SET prix = prix * 1.10
    WHERE nom = 'pc';

DELETE FROM Produits
WHERE stock = 0;
 