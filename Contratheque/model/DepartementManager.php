<?php

namespace Contratheque\Model; // La classe sera dans ce namespace

require_once("model/DB.php");

// class pour y regrouper toutes nos fonctions qui concernent les posts
class DepartementManager extends DB
{
        
    // fonction pour Afficher les dératements intervenantr en fonction de fonction de son SIRET
    public function readDepartements($siret_client)
    {
        // Connexion à la base de données rappelle de la fonction
        $db = $this->getPDO();
    
        $req = $db->prepare("SELECT siret_client, numero_departement, designation_departement FROM departement, intervient WHERE departement.code_departement = intervient.numero_departement AND siret_client = ?");
        $req->execute(array($siret_client));
        $postDepartements = $req->fetchAll();
    
        return $postDepartements;
    }
}