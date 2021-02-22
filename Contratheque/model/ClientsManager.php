<?php

namespace Contratheque\Model; // La classe sera dans ce namespace

use PDO;

require_once("model/BDD.php");

// class pour y regrouper toutes nos fonctions qui concernent les livres
class ClientsManager extends BDD
{
    
    // fonction pour récupérer tous les livres de la base de données et on les affiche
    public function listeClients()
    {
        // Connexion à la base de données rappelle de la fonction
        $dbConnexion = new BDD;
        $pdo = $dbConnexion->getPdo();
    
        // On récupère tous les livres dans la bibliothèque 
        $req = $pdo->query('SELECT siret_client, denomination_client, adresse1_siege, adresse2_siege, adresse3_siege, BP_CS_siege, code_postal_siege, ville_siege, pays_siege, site_internet_siege, email_siege, telephone_siege, champlibre_chorus, adresse1_fact, adresse2_fact, adresse3_fact, BP_CS_fact, code_postal_fact, ville_fact, pays_fact, email_fact, telephone_fact, id_info_convention, id_info_engagement, id_dossier_tech, id_prospection, id_type FROM clients');
        $BookList = $req->fetchAll(PDO::FETCH_ASSOC);

        return $req;
    }

    // fonction pour récupérer le détail d'un livre en fonction de son id
    public function detailClient($id)
    {
        // Connexion à la base de données rappelle de la fonction
        $dbConnexion = new BDD;
        $pdo = $dbConnexion->getPdo();
        
        // On récupère tous les livres dans la bibliothèque 
        $req = $pdo->prepare('SELECT id, titre, auteur, ref, nbrPages, edition, genre, anneeEdition, langue, format FROM livres, auteur, edition, genre, format WHERE livres.idAuteurLivres = auteur.idAuteur AND livres.idEditionLivres = edition.idEdition AND livres.idGenreLivres = genre.idGenre AND livres.idFormatLivres = format.idFormat AND id = ?');
        $req->execute(array($id));
        $post = $req->fetch();

        return $post;
        }

    // fonction pour récupérer la liste des livres empruntés en fonction de idEmprunteur
    public function empruntLivres($idEmprunteur)
    {
        // Connexion à la base de données rappelle de la fonction
        $dbConnexion = new BDD;
        $pdo = $dbConnexion->getPdo();
        
        // On récupère tous les livres dans la bibliothèque 
        $req = $pdo->prepare('SELECT id, titre, auteur, ref, nbrPages, edition, genre, anneeEdition, langue, format FROM livres, auteur, edition, genre, format, emprunt WHERE livres.idAuteurLivres = auteur.idAuteur AND livres.idEditionLivres = edition.idEdition AND livres.idGenreLivres = genre.idGenre AND livres.idFormatLivres = format.idFormat AND livres.idUtilisateur = emprunt.idEmprunteur AND idEmprunteur = ?');
        $req->execute(array($idEmprunteur));
        $post = $req->fetch();

        return $req;
        }    
}