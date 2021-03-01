<?php

namespace Contratheque\Model; // La classe sera dans ce namespace

require_once("model/DB.php");

// class pour y regrouper toutes nos fonctions qui concernent les posts
class SuiviTechniqueManager extends DB
{
    
    // fonction pour Afficher l'historique des commentaires de modification du client en fonction de son SIRET
    public function readDernierSuiviTechnique($siret_client)
    {
        // Connexion à la base de données rappelle de la fonction
        $db = $this->getPDO();
    
        $req = $db->prepare('SELECT auteur_tech, statut_tech, commentaire_tech, siret_info_tech, DATE_FORMAT(datetime_tech, \'%d/%m/%Y %Hh%imin%ss\') AS datetime_tech_fr FROM suivi_dossier_tech, dossier_tech WHERE id_dossier_tech = id_suivi_dossier_tech AND siret_info_tech = ? ORDER BY datetime_tech_fr DESC');
        $req->execute(array($siret_client)); 
        $postSuiviTechnique = $req->fetch();   

        return $postSuiviTechnique;
    }

    // fonction pour Afficher l'historique des commentaires de modification du client en fonction de son SIRET
    public function readHistoriqueSuiviTechnique($siret_client)
        {
        // Connexion à la base de données rappelle de la fonction
        $db = $this->getPDO();
        
        $req = $db->prepare('SELECT auteur_tech, statut_tech, commentaire_tech, siret_info_tech, DATE_FORMAT(datetime_tech, \'%d/%m/%Y %Hh%imin%ss\') AS datetime_tech_fr FROM suivi_dossier_tech, dossier_tech WHERE id_dossier_tech = id_suivi_dossier_tech AND siret_info_tech = ? ORDER BY datetime_tech_fr DESC');
        $req->execute(array($siret_client)); 
        $postHistoriqueSuiviTechnique = $req->fetchAll();   

        return $postHistoriqueSuiviTechnique;
        }
}