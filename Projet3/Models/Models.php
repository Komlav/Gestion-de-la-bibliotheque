<?php 
    require_once("../Sources/Data.php"); 

    function find_rayon_by_id(int $id):array|null{
        foreach (find_all_rayons() as $rayon) {
            if ($rayon["IdRayon"] == $id){
                return $rayon;
            }
        }
        return null;
    }

    function find_auteur_by_id(int $id):array|null{
        foreach (find_all_auteurs() as $auteur) {
            if($auteur["IdAuteur"] == $id){
                return $auteur;
            }
        }
        return null;
    }

    function find_adhérent_by_id(int $id):array|null{
        foreach (find_all_adhérents() as $adhérent) {
            if ($adhérent["Id_Adérent"] == $id) {
                return $adhérent;
            }
        }
        return null;
    }

    function find_auteur_ouvrages_by_id(int $id):array{
        $auteur_ouvrages = [];
        foreach (find_all_ouvrages() as $ouvrage) {
            if ($ouvrage["Auteur_CodeAuteur"] == $id) {
                $auteur_ouvrages = $ouvrage;
            }
        }
        return $auteur_ouvrages;
    }

    function find_all_adhérent_dem(int $id):array{
        $demandes = [];
        foreach (find_all_demandes() as $dem) {
            if ($dem["id_adhérent"] == $id) {
                $demandes[] = $dem;
            }
        }
        return $demandes;
    }
    function find_exemplair_by_id(int $id):array|null{
        foreach (find_all_exemplaires() as $exem) {
            if ($exem["idExemplaire"] == $id) {
                return $exem;
            }
        }
        return null;
    }

    function find_ouvrage_by_id(int $id):array{
        foreach (find_all_ouvrages() as $ouv) {
            if ($ouv["Id"] == $id) {
                return $ouv;
            }
        }
    }

    function find_prets_retardataire():array{
        $retardaires = [];
        foreach (find_all_prets() as $pret) {
            $dateDebut = strtotime($pret["Date"]."+2 week +1 day"); 
            $DateFin = strtotime($pret["DateRéel"]);
            if ($dateDebut > $DateFin ) {
                $retardaires[] = $pret;
            }
        }
        return $retardaires;
    }
    
?>