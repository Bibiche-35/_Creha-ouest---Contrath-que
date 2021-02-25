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
}