<?php
function BDDConnexionPDO(){
    $hote='localhost'; //192.168.1.17
    $port='21017'; //21017 
    $nomBd='site_jeux'; //2017-kingg_bdd
    $utilisateur='root'; //2017-kingg
    $motPasse=''; //

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