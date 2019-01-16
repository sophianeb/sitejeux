<?php
$connexion = BDDConnexionPDO();
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
    $id='';
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['c_email'])); 
    $password = md5(mysqli_real_escape_string($db,htmlspecialchars($_POST['c_password'])));
    
    if($username !== "" && $password !== "")
    {
         $requete2 = "SELECT * FROM utilisateur where 
              mail_user = '".$username."' and mdp_user = '".$password."' ";

        $exec_requete2 = mysqli_query($db,$requete2);
        $reponse2 = mysqli_fetch_array($exec_requete2);
        
        $requete = "SELECT count(*) FROM utilisateur where 
              mail_user = '".$username."' and mdp_user = '".$password."' ";

        $exec_requete = mysqli_query($db,$requete);
        $reponse = mysqli_fetch_array($exec_requete);

       $image = $reponse2['image'];
       $nom = $reponse2['nom_user'];
       $prenom = $reponse2['prenom_user'];
       $adresse = $reponse2['adresse_user'];
       $numtel = $reponse2['numT_user'];
       $ville = $reponse2['ville_user'];
       $money = $reponse2['money_user'];
      
        $count = $reponse['count(*)'];
        
        
        if($count=1) // nom d'utilisateur et mot de passe correctes
        { 
           $_SESSION['c_email'] = $username;
           $_SESSION['nom'] = $nom;
           $_SESSION['image_user'] = $image;
           $_SESSION['prenom'] = $prenom;
           $_SESSION['adresse'] = $adresse;
           $_SESSION['numtel'] = $numtel;
           $_SESSION['ville'] = $ville;
           $_SESSION['money'] = $money;
           
           
           

           
           header('Location: index.php?page=accueil');
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


}
}
 // fermer la connexion
?>

