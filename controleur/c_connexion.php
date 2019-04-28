<?php
$connexion = BDDConnexionPDO();
if(isset($_POST['fconnexion']))
{

  if(isset($_POST['c_email']) && isset($_POST['c_password']))
  {
    // connexion à la base de données
   
    $username = mysqli_real_escape_string($connexion,htmlspecialchars($_POST['c_email'])); 
    $password = md5(mysqli_real_escape_string($connexion,htmlspecialchars($_POST['c_password'])));
    
    if($username !== "" && $password !== "")
    {
     
         $requete2 = "SELECT * FROM utilisateur where 
              mail_user = '".$username."' and mdp_user = '".$password."' ";

        $exec_requete2 = mysqli_query($db,$requete2);
        $lire1 = mysqli_fetch_array($exec_requete2);
        
        $requete = "SELECT count(*) FROM utilisateur where 
              mail_user = '".$username."' and mdp_user = '".$password."' ";

        $exec_requete = mysqli_query($db,$requete);
        $reponse = mysqli_fetch_array($exec_requete);

       $id = $lire1['id_user'];
       $image = $lire1['image'];
       $nom = $lire1['nom_user'];
       $prenom = $lire1['prenom_user'];
       $adresse = $lire1['adresse_user'];
       $numtel = $lire1['numT_user'];
       $ville = $lire1['ville_user'];
       $money = $lire1['money_user'];
      
        $count = $lire2['count(*)'];
        
        
        if($count=1) // nom d'utilisateur et mot de passe correctes
        { 
           $_SESSION['iduser'] = $id;
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

} 
 
 include('./vue/connexion.php'); 
?>

