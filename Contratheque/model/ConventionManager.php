<?php

namespace Contratheque\Model; // La classe sera dans ce namespace

require_once("model/DB.php");

// class pour y regrouper toutes nos fonctions qui concernent les posts
class ConventionManager extends DB
{
    
    // fonction pour Afficher l'historique des commentaires de modification du client en fonction de son SIRET
    public function readDetailConvention($siret_client)
    {
        // Connexion à la base de données rappelle de la fonction
        $db = $this->getPDO();
    
        $req = $db->prepare('SELECT nbreres_principales_conv, nbrelog_sociaux_conv, calcul_estimatif_conv, boolean_convention, durée_mois_conv, montant_annuel_conv, comment_conv, lien_conv, id_info_convention, DATE_FORMAT(date_debut_conv, \'%d/%m/%Y\') AS date_debut_conv_fr, DATE_FORMAT(date_fin_conv, \'%d/%m/%Y\') AS date_fin_conv_fr, date_debut_conv, date_fin_conv FROM informations_convention WHERE siret_info_convention = ? ');
        $req->execute(array($siret_client)); 
        $postConventionClient = $req->fetch();   

        return $postConventionClient;
    }

    // fonction pour Afficher l'historique des commentaires de modification du client en fonction de son SIRET
    public function readConventionsClients()
    {
        // Connexion à la base de données rappelle de la fonction
        $db = $this->getPDO();
        
        $req = $db->query('SELECT client.siret_client, denomination_client, boolean_convention, durée_mois_conv, montant_annuel_conv, comment_conv, lien_conv, DATE_FORMAT(date_debut_conv, \'%d/%m/%Y\') AS date_debut_conv_fr, DATE_FORMAT(date_fin_conv, \'%d/%m/%Y\') AS date_fin_conv_fr, date_debut_conv, date_fin_conv, id_type_client, id_type, denomination_type FROM client, type_client, informations_convention WHERE boolean_convention = 1 AND client.id_type_client = type_client.id_type AND informations_convention.siret_info_convention = client.siret_client');
        $listeConventionsClients = $req->fetch();   
    
        return $listeConventionsClients;
    }

    // fonction pour modifier un ou plusieurs champs de son client : récupère les variables et éxécute la modification dans l'objet PDO
    public function updateDetailConvention($siret_client, $nbreres_principales_conv, $nbrelog_sociaux_conv, $calcul_estimatif_conv, $boolean_convention, $date_debut_conv, $date_fin_conv, $durée_mois_conv, $montant_annuel_conv, $comment_conv, $lien_conv, $auteur_conv, $statut_conv, $commentaire_conv, $id_info_convention)
    {
        // Connexion à la base de données rappelle de la fonction
        $db = $this->getPDO();
        
        $req = $db->prepare('UPDATE informations_convention SET nbreres_principales_conv = ?, nbrelog_sociaux_conv = ?, calcul_estimatif_conv = ?, boolean_convention = ?, date_debut_conv = ?, date_fin_conv = ?, durée_mois_conv = ?, montant_annuel_conv = ?, comment_conv = ?, lien_conv = ? WHERE siret_info_convention = ?');
        $postConvention = $req->execute(array($nbreres_principales_conv, $nbrelog_sociaux_conv, $calcul_estimatif_conv, $boolean_convention, $date_debut_conv, $date_fin_conv, $durée_mois_conv, $montant_annuel_conv, $comment_conv, $lien_conv, $siret_client));

        $req = $db->prepare('INSERT INTO suivi_convention (datetime_conv, auteur_conv, statut_conv, commentaire_conv, id_info_suivi_convention) VALUES(NOW(), ?, ?, ?, ? )'); 
        $createSuiviConvention = $req->execute(array($auteur_conv, $statut_conv, $commentaire_conv, $id_info_convention));

    }
}