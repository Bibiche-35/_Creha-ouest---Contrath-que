<?php

namespace Contratheque\Model; // La classe sera dans ce namespace

require_once("model/DB.php");

// class pour y regrouper toutes nos fonctions qui concernent les posts
class TechniqueManager extends DB
{
    
    // fonction pour Afficher l'historique des commentaires de modification du client en fonction de son SIRET
    public function readDetailTechnique($siret_client)
    {
        // Connexion à la base de données rappelle de la fonction
        $db = $this->getPDO();
    
        $req = $db->prepare('SELECT nbre_utilisateurs, saisie_bool, consultation_bool, statistiques_bool FROM dossier_tech WHERE siret_info_tech = ? ');
        $req->execute(array($siret_client)); 
        $postTechniqueClient = $req->fetch();   

        return $postTechniqueClient;
    }

    // fonction pour modifier un ou plusieurs champs de son client : récupère les variables et éxécute la modification dans l'objet PDO
    public function updateDetailtechnique($siret_client, $nbre_utilisateurs, $saisie_bool, $consultation_bool, $statistiques_bool)
    {
        // Connexion à la base de données rappelle de la fonction
        $db = $this->getPDO();
        
        $req = $db->prepare('UPDATE dossier_tech SET nbre_utilisateurs = ?, saisie_bool = ?, consultation_bool = ?, statistiques_bool = ? WHERE siret_info_tech = ?');
        $postTechnique = $req->execute(array($nbre_utilisateurs, $saisie_bool, $consultation_bool, $statistiques_bool, $siret_client));
        
        return $postTechnique;
    }
}