<?php
function BDDConnexionPDO(){
    $hote='192.168.1.17'; //192.168.1.17
    $port='21017'; //21017 
    $nomBd='2017-kingg_bdd'; //2017-kingg_bdd
    $utilisateur='2017-kingg'; //2017-kingg
    $motPasse='123456'; //

    try{
        $connexion = new PDO('mysql:host='.$hote.'; dbname='.$nomBd, $utilisateur, $motPasse);
        $connexion->exec("SET CHARACTER SET utf8");
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    catch(Exception $e){
        echo "Erreur :".$e->getMessage().'<br/>';
        echo "N°: ".$e->getCode();
        die;
    }
    return $connexion;
}

?>