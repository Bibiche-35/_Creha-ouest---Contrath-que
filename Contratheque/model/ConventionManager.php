<?php

namespace Contratheque\Model; // La classe sera dans ce namespace

require_once("model/DB.php");

// class pour y regrouper toutes nos fonctions qui concernent les posts
class ConventionManager extends DB
{
    
    // fonction pour Afficher l'historique des commentaires de modification du client en fonction de son SIRET
    public function readConventionClient($siret_client)
    {
        // Connexion à la base de données rappelle de la fonction
        $db = $this->getPDO();
    
        $req = $db->prepare('SELECT nbreres_principales_conv, nbrelog_sociaux_conv, calcul_estimatif_conv, boolean_convention, durée_mois_conv, montant_annuel_conv, commentaire_conv, lien_conv, DATE_FORMAT(date_debut_conv, \'%d/%m/%Y\') AS date_debut_conv_fr, DATE_FORMAT(date_fin_conv, \'%d/%m/%Y\') AS date_fin_conv_fr FROM informations_convention WHERE siret_info_convention = ? ');
        $req->execute(array($siret_client)); 
        $postConventionClient = $req->fetch();   

        return $postConventionClient;
    }
}


//DATE_FORMAT(date_debut_conv, \'%d/%m/%Y\') AS date_debut_conv_fr DATE_FORMAT(date_fin_conv, \'%d/%m/%Y\') AS date_fin_conv_fr