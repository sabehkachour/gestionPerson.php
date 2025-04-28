<?php
require_once 'Database.php';
require_once 'DAOPersonne.php';
require_once 'Personne.php';

// Connexion à la base
$database = new Database();
$db = $database->getConnection();

// Vérifier que la connexion a réussi
if ($db === null) {
    die("❌ Connexion à la base de données échouée.");
}

// Création d'une personne (exemple)
$nouvellePersonne = new Personne("Ali", "Ben Ali", 25);

// DAO pour insérer
$daoPersonne = new DAOPersonne($db);
$daoPersonne->ajouter($nouvellePersonne);
?>
