<?php

namespace Contratheque\Model; // La classe sera dans ce namespace

require_once("model/DB.php");

// class pour y regrouper toutes nos fonctions qui concernent les posts
class SuiviDeontologieManager extends DB
{
    
    // fonction pour Afficher l'historique des commentaires de modification du client en fonction de son SIRET
    public function readDernierSuiviDeontologie($siret_client)
    {
        // Connexion à la base de données rappelle de la fonction
        $db = $this->getPDO();
    
        $req = $db->prepare('SELECT auteur_deon, statut_deon, suivi_deontologie.commentaire_deon, siret_info_deontologie, DATE_FORMAT(datetime_deon, \'%d/%m/%Y %Hh%imin%ss\') AS datetime_deon_fr FROM suivi_deontologie, informations_deontologie WHERE id_info_engagement = id_info_suivi_engagement AND siret_info_deontologie = ? ORDER BY datetime_deon_fr DESC');
        $req->execute(array($siret_client)); 
        $postSuiviConvention = $req->fetch();   

        return $postSuiviConvention;
    }

    // fonction pour Afficher l'historique des commentaires de modification du client en fonction de son SIRET
    public function readHistoriqueSuiviDeontologie($siret_client)
        {
        // Connexion à la base de données rappelle de la fonction
        $db = $this->getPDO();
        
        $req = $db->prepare('SELECT auteur_deon, statut_deon, suivi_deontologie.commentaire_deon, siret_info_deontologie DATE_FORMAT(datetime_deon, \'%d/%m/%Y %Hh%imin%ss\') AS datetime_deon_fr FROM suivi_deontologie, informations_deontologie WHERE id_info_engagement = id_info_suivi_deontologie AND siret_info_deontologie = ? ORDER BY datetime_conv_fr DESC');
        $req->execute(array($siret_client)); 
        $postHistoriqueSuiviConvention = $req->fetchAll();   

        return $postHistoriqueSuiviConvention;
        }
}