<?php
if(isset($_POST['fconnexion']))
{
if(isset($_POST['c_email']) && isset($_POST['c_password']))
{
    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'site_jeux';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['c_email'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['c_password']));
    
    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM utilisateur where 
              mail_user = '".$username."' and mdp_user = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['c_email'] = $username;
           header('Location: index.php?page=principale');
        }
        else
        {
           header('Location: index.php?page=login&erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: index.php?page=login&erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: index.php?page=login');
    echo "erreur";
}
}
 // fermer la connexion
?>

