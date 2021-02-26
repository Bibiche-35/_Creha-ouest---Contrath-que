<?php

namespace Contratheque\Model; // La classe sera dans ce namespace

require_once("model/DB.php");

// class pour y regrouper toutes nos fonctions qui concernent les posts
class DeontologieManager extends DB
{
    
    // fonction pour Afficher l'historique des commentaires de modification du client en fonction de son SIRET
    public function readDetailDeontologie($siret_client)
    {
        // Connexion à la base de données rappelle de la fonction
        $db = $this->getPDO();
    
        $req = $db->prepare('SELECT DATE_FORMAT(date_signature_acte, \'%d/%m/%Y\') AS date_signature_acte_fr, boolean_acte_engagement, zone_rem_sanction FROM informations_deontologie WHERE siret_info_deontologie = ? ');
        $req->execute(array($siret_client)); 
        $postDeontologieClient = $req->fetch();   

        return $postDeontologieClient;
    }

    // fonction pour modifier un ou plusieurs champs de son client : récupère les variables et éxécute la modification dans l'objet PDO
    public function updateDetailDeontologie($siret_client, $boolean_acte_engagement, $date_signature_acte, $zone_rem_sanction)
    {
        // Connexion à la base de données rappelle de la fonction
        $db = $this->getPDO();
        
        $req = $db->prepare('UPDATE informations_deontologie SET boolean_acte_engagement = ?, date_signature_acte = ?, zone_rem_sanction = ? WHERE siret_info_convention = ?');
        $postDeontologie = $req->execute(array($boolean_acte_engagement, $date_signature_acte, $zone_rem_sanction, $siret_client));
        
        return $postDeontologie;
    }
}