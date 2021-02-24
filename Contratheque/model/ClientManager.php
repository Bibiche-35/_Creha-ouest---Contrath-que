<?php

namespace Contratheque\Model; // La classe sera dans ce namespace

require_once("model/DB.php");

// class pour y regrouper toutes nos fonctions qui concernent les posts
class ClientManager extends DB
{
    
    // fonction pour Afficher les clients (données partielles) de la base de donnée et on les affiche
    public function readListeClients()
    {
        // Connexion à la base de données rappelle de la fonction
        $db = $this->getPDO();
    
        // On récupère tous les clients de la base de donnée 
        $req = $db->query('SELECT siret_client, denomination_client, adresse1_siege, adresse2_siege, adresse3_siege, BP_CS_siege, code_postal_siege, ville_siege, email_fact, telephone_fact  FROM client');

        return $req;
    }
    
    // fonction pour Afficher le détail complet d'un client précis en fonction de son SIRET
    public function readDetailClient($siret_client)
    {
        // Connexion à la base de données rappelle de la fonction
        $db = $this->getPDO();
    
        $req = $db->prepare('SELECT siret_client, denomination_client, adresse1_siege, adresse2_siege, adresse3_siege, BP_CS_siege, code_postal_siege, ville_siege, pays_siege, site_internet_siege, email_siege, telephone_siege, champlibre_chorus, adresse1_fact, adresse2_fact, adresse3_fact, BP_CS_fact, code_postal_fact, ville_fact, pays_fact, email_fact, telephone_fact FROM client WHERE siret_client = ?');
        $req->execute(array($siret_client));
        $post = $req->fetch();
    
        return $post;
    }

    // fonction pour modifier les informations d'un client en fonction de son SIRET
    public function updateDetailClient($siret_client, $denomination_client, $adresse1_siege, $adresse2_siege, $adresse3_siege, $BP_CS_siege, $code_postal_siege, $ville_siege, $pays_siege, $site_internet_siege, $email_siege, $telephone_siege, $champlibre_chorus, $adresse1_fact, $adresse2_fact, $adresse3_fact, $BP_CS_fact, $code_postal_fact, $ville_fact, $pays_fact, $email_fact, $telephone_fact)
    {
        // Connexion à la base de données rappelle de la fonction
        $db = $this->getPDO();
        
        $req = $db->prepare('UPDATE client SET denomination_client = ?, adresse1_siege = ?, adresse2_siege = ?, adresse3_siege = ?, BP_CS_siege = ?, code_postal_siege = ?, ville_siege = ?, pays_siege = ?, site_internet_siege = ?, email_siege = ?, telephone_siege = ?, champlibre_chorus = ?, adresse1_fact = ?, adresse2_fact = ?, adresse3_fact = ?, BP_CS_fact = ?, code_postal_fact = ?, ville_fact = ?, pays_fact = ?, email_fact = ?, telephone_fact = ? WHERE siret_client = ?');
        $clientManager = $req->execute(array($siret_client, $denomination_client, $adresse1_siege, $adresse2_siege, $adresse3_siege, $BP_CS_siege, $code_postal_siege, $ville_siege, $pays_siege, $site_internet_siege, $email_siege, $telephone_siege, $champlibre_chorus, $adresse1_fact, $adresse2_fact, $adresse3_fact, $BP_CS_fact, $code_postal_fact, $ville_fact, $pays_fact, $email_fact, $telephone_fact));
        
        return $clientManager;
    }
}