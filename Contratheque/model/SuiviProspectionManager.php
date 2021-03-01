<?php

namespace Contratheque\Model; // La classe sera dans ce namespace

require_once("model/DB.php");

// class pour y regrouper toutes nos fonctions qui concernent les posts
class SuiviProspectionManager extends DB
{
    
    // fonction pour Afficher l'historique des commentaires de modification du client en fonction de son SIRET
    public function readDernierSuiviProspection($siret_client)
    {
        // Connexion à la base de données rappelle de la fonction
        $db = $this->getPDO();
    
        $req = $db->prepare('SELECT auteur_pros, statut_pros, commentaire_pros, siret_info_pros, DATE_FORMAT(datetime_pros, \'%d/%m/%Y %Hh%imin%ss\') AS datetime_pros_fr FROM suivi_prospection, dossier_pros WHERE id_prospection = id_suivi_prospection AND siret_info_pros = ? ORDER BY datetime_pros_fr DESC');
        $req->execute(array($siret_client)); 
        $postSuiviProspection = $req->fetch();   

        return $postSuiviProspection;
    }

    // fonction pour Afficher l'historique des commentaires de modification du client en fonction de son SIRET
    public function readHistoriqueSuiviProspection($siret_client)
        {
        // Connexion à la base de données rappelle de la fonction
        $db = $this->getPDO();
        
        $req = $db->prepare('SELECT auteur_pros, statut_pros, commentaire_pros, siret_info_pros, DATE_FORMAT(datetime_pros, \'%d/%m/%Y %Hh%imin%ss\') AS datetime_pros_fr FROM suivi_prospection, dossier_pros WHERE id_prospection = id_suivi_prospection AND siret_info_pros = ? ORDER BY datetime_pros_fr DESC');
        $req->execute(array($siret_client)); 
        $postHistoriqueSuiviProspection = $req->fetchAll();   

        return $postHistoriqueSuiviProspection;
        }
}