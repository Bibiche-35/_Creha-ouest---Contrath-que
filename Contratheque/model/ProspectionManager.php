<?php

namespace Contratheque\Model; // La classe sera dans ce namespace

require_once("model/DB.php");

// class pour y regrouper toutes nos fonctions qui concernent les posts
class ProspectionManager extends DB
{
    
    // fonction pour Afficher l'historique des commentaires de modification du client en fonction de son SIRET
    public function readDetailProspection($siret_client)
    {
        // Connexion à la base de données rappelle de la fonction
        $db = $this->getPDO();
    
        $req = $db->prepare('SELECT zone_rem_pros FROM dossier_pros WHERE siret_info_pros = ? ');
        $req->execute(array($siret_client)); 
        $postProspectionClient = $req->fetch();   

        return $postProspectionClient;
    }

    // fonction pour modifier un ou plusieurs champs de son client : récupère les variables et éxécute la modification dans l'objet PDO
    public function updateDetailProspection($siret_client, $dossier_pros)
    {
        // Connexion à la base de données rappelle de la fonction
        $db = $this->getPDO();
        
        $req = $db->prepare('UPDATE dossier_pros SET zone_rem_pros = ? WHERE siret_info_pros = ?');
        $postProspection = $req->execute(array($dossier_pros, $siret_client));
        
        return $postProspection;
    }
}