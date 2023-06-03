<?php

function connexionPDO() {
    $login = "root";
    $mdp = "root";
    $bd = "liguebasket";
    $serveur = "localhost";

    try {
        $conn = new PDO("mysql:host=$serveur;dbname=$bd", $login, $mdp, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')); 
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        print "Erreur de connexion PDO ";
        die();
    }
}




function getEquipe(){
    try {
        $connexion = connexionPDO();
        $req1 = $connexion->prepare("select num_equipe, nom_equipe from equipe");
        $req1->execute();

        $equipe = $req1->fetchAll(PDO::FETCH_ASSOC);
        return $equipe;

    }catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function getArbitre(){
    try {
        $connexion = connexionPDO();
        $req2 = $connexion->prepare("select num_arbitre, nom_arbitre, prenom_arbitre from arbitre");
        $req2->execute();

        $arbitre = $req2->fetchAll(PDO::FETCH_ASSOC);
        return $arbitre;

    }catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
}

function Convocation(){
    $cnx = connexionPDO();
    $req = $cnx->prepare("select num_match, num_equipe_1, num_equipe_2");

}







?>