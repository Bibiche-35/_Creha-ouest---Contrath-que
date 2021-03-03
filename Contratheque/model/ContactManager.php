<?php

namespace Contratheque\Model; // La classe sera dans ce namespace

require_once("model/DB.php");

// class pour y regrouper toutes nos fonctions qui concernent les contacts
class ContactManager extends DB
{
    
    // fonction pour Afficher le contact principal de Facturation d'un client (défini avec son siret) de la base de donnée et on les affiche
    public function readContactFacturationClient($siret_client)
    {
        // Connexion à la base de données rappelle de la fonction
        $db = $this->getPDO();
    
        $req = $db->prepare('SELECT siret_client, nom_contact, prenom_contact, telfixe_contact, telport_contact, email_contact, remarque_contact, nom_fonction FROM contact, association_fonction, fonction WHERE contact.id_contact = association_fonction.id_contact_asso AND association_fonction.id_fonction_asso = fonction.id_fonction AND id_fonction = 27 AND siret_client = ?');
        $req->execute(array($siret_client));
        $post = $req->fetch();
    
        return $post;
    }

    // fonction pour Afficher le contact principal du contrat d'un client (défini avec son siret) de la base de donnée et on les affiche
    public function readContactContratClient($siret_client)
    {
        // Connexion à la base de données rappelle de la fonction
        $db = $this->getPDO();
    
        $req = $db->prepare('SELECT siret_client, nom_contact, prenom_contact, telfixe_contact, telport_contact, email_contact, remarque_contact, nom_fonction FROM contact, association_fonction, fonction WHERE contact.id_contact = association_fonction.id_contact_asso AND association_fonction.id_fonction_asso = fonction.id_fonction AND id_fonction = 26 AND siret_client = ?');
        $req->execute(array($siret_client));
        $post = $req->fetch();
    
        return $post;
    }    
}
