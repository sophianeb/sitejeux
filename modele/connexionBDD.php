<?php
function BDDConnexionPDO()
{
$PARAM_hote='localhost';  $PARAM_port='21017';
$PARAM_nom_bd='site_jeux';  $PARAM_utilisateur='root'; 
$PARAM_mot_passe=''; 
try
{      $connexion = new PDO('mysql:host='.$PARAM_hote.'; dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
       $connexion->exec("SET CHARACTER SET utf8");
       $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
 catch(Exception $e)
{     echo 'Erreur : '.$e->getMessage().'<br />';
        echo 'N° : '.$e->getCode();
  die;
} 
return $connexion;
}  
function Connexion1()
{
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'site_jeux';
    $db_host     = 'localhost';
    $port='';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    return $db;
}
?>