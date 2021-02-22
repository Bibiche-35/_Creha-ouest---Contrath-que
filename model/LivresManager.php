<?php

namespace PouzyBookWeb\Model; // La classe sera dans ce namespace

require_once("model/Manager.php");

// class pour y regrouper toutes nos fonctions qui concernent les livres
class LivresManager extends Manager
{
    
    // fonction pour récupérer tous les livres de la base de données et on les affiche
    public function listeLivres()
    {
        // Connexion à la base de données rappelle de la fonction
        $db = $this->dbConnect();
    
        // On récupère tous les livres dans la bibliothèque 
        $req = $db->query('SELECT id, titre, auteur, ref, nbrPages, edition, genre, anneeEdition, langue, format FROM livres, auteur, edition, genre, format WHERE livres.idAuteurLivres = auteur.idAuteur AND livres.idEditionLivres = edition.idEdition AND livres.idGenreLivres = genre.idGenre AND livres.idFormatLivres = format.idFormat');
    
        return $req;
    }

    // fonction pour récupérer le détail d'un livre en fonction de son id
    public function detailLivre($id)
    {
        // Connexion à la base de données rappelle de la fonction
        $db = $this->dbConnect();
        
        // On récupère tous les livres dans la bibliothèque 
        $req = $db->prepare('SELECT id, titre, auteur, ref, nbrPages, edition, genre, anneeEdition, langue, format FROM livres, auteur, edition, genre, format WHERE livres.idAuteurLivres = auteur.idAuteur AND livres.idEditionLivres = edition.idEdition AND livres.idGenreLivres = genre.idGenre AND livres.idFormatLivres = format.idFormat AND id = ?');
        $req->execute(array($id));
        $post = $req->fetch();

        return $post;
        }

    // fonction pour récupérer la liste des livres empruntés en fonction de idEmprunteur
    public function empruntLivres($idEmprunteur)
    {
        // Connexion à la base de données rappelle de la fonction
        $db = $this->dbConnect();
        
        // On récupère tous les livres dans la bibliothèque 
        $req = $db->prepare('SELECT id, titre, auteur, ref, nbrPages, edition, genre, anneeEdition, langue, format FROM livres, auteur, edition, genre, format, emprunt WHERE livres.idAuteurLivres = auteur.idAuteur AND livres.idEditionLivres = edition.idEdition AND livres.idGenreLivres = genre.idGenre AND livres.idFormatLivres = format.idFormat AND livres.idUtilisateur = emprunt.idEmprunteur AND idEmprunteur = ?');
        $req->execute(array($idEmprunteur));
        $post = $req->fetch();

        return $req;
        }    
}