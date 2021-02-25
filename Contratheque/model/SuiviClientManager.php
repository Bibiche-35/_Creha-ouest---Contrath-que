<?php

namespace Contratheque\Model; // La classe sera dans ce namespace

require_once("model/DB.php");

// class pour y regrouper toutes nos fonctions qui concernent les posts
class SuiviClientManager extends DB
{
    
    // fonction pour Afficher l'historique des commentaires de modification du client en fonction de son SIRET
    public function readDernierSuiviClient($siret_client)
    {
        // Connexion à la base de données rappelle de la fonction
        $db = $this->getPDO();
    
        $req = $db->prepare('SELECT auteur_client, statut_client, commentaire_client, DATE_FORMAT(datetime_client, \'%d/%m/%Y %Hh%imin%ss\') AS datetime_client_fr FROM suivi_client WHERE siret_suivi_client = ? ORDER BY datetime_client_fr DESC');
        $req->execute(array($siret_client)); 
        $postSuiviClient = $req->fetch();   

        return $postSuiviClient;
    }

    // fonction pour Afficher l'historique des commentaires de modification du client en fonction de son SIRET
    public function readHistoriqueSuiviClient($siret_client)
        {
        // Connexion à la base de données rappelle de la fonction
        $db = $this->getPDO();
        
        $req = $db->prepare('SELECT auteur_client, statut_client, commentaire_client, DATE_FORMAT(datetime_client, \'le %d/%m/%Y à %Hh%imin%ss\') AS datetime_client_fr FROM suivi_client WHERE siret_suivi_client = ? ORDER BY datetime_client_fr DESC');
        $req->execute(array($siret_client)); 
        $postHistoriqueSuiviClient = $req->fetchAll();   

        return $postHistoriqueSuiviClient;
        }

    // fonction pour modifier un ou plusieurs champs de son client : récupère les variables et éxécute la modification dans l'objet PDO
    public function createSuiviClient($siret_client, $denomination_client, $adresse1_siege, $adresse2_siege, $adresse3_siege, $BP_CS_siege, $code_postal_siege, $ville_siege, $pays_siege, $site_internet_siege, $email_siege, $telephone_siege, $champlibre_chorus, $adresse1_fact, $adresse2_fact, $adresse3_fact, $BP_CS_fact, $code_postal_fact, $ville_fact, $pays_fact, $email_fact, $telephone_fact)
    {
        // Connexion à la base de données rappelle de la fonction
        $db = $this->getPDO();
        
        $req = $db->prepare('UPDATE client SET denomination_client = ?, adresse1_siege = ?, adresse2_siege = ?, adresse3_siege = ?, BP_CS_siege = ?, code_postal_siege = ?, ville_siege = ?, pays_siege = ?, site_internet_siege = ?, email_siege = ?, telephone_siege = ?, champlibre_chorus = ?, adresse1_fact = ?, adresse2_fact = ?, adresse3_fact = ?, BP_CS_fact = ?, code_postal_fact = ?, ville_fact = ?, pays_fact = ?, email_fact = ?, telephone_fact = ? WHERE siret_client = ?');
        $postClient = $req->execute(array($denomination_client, $adresse1_siege, $adresse2_siege, $adresse3_siege, $BP_CS_siege, $code_postal_siege, $ville_siege, $pays_siege, $site_internet_siege, $email_siege, $telephone_siege, $champlibre_chorus, $adresse1_fact, $adresse2_fact, $adresse3_fact, $BP_CS_fact, $code_postal_fact, $ville_fact, $pays_fact, $email_fact, $telephone_fact, $siret_client));
        
        return $postClient;
    }
}