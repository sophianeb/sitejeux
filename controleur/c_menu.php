<?php
$connexion = BDDConnexionPDO();
if(isset($_POST['fconnexion']))
{

if(isset($_POST['c_email']) && isset($_POST['c_password']))
{
    // connexion à la base de données
/*    $db_username = '2017-kingg';
    $db_password = '123456';
    $db_name     = '2017-kingg_bdd';
    $db_host     = '192.168.1.17:21017';
    $port='';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');*/
    $id='';
    $prenom='';
    $nom='';
    $image='';
    $adresse='';
    $numtel='';
    $ville='';
    $money='';
    $username1='';
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = htmlspecialchars($_POST['c_email']); 
    $password = md5(htmlspecialchars($_POST['c_password']));
    
    if($username !== "" && $password !== "")
    {
      $lire2 = read($connexion,'utilisateur','*',['mail_user'=>$username, 'mdp_user'=>$password],'');
         $requete2 = "SELECT * FROM utilisateur where 
              mail_user = '".$username."' and mdp_user = '".$password."' ";
        
        
        $lire1 = read($connexion,'utilisateur', 'count(*)',['mail_user'=>$username, 'mdp_user'=>$password],'');
        $requete = "SELECT count(*) FROM utilisateur where 
              mail_user = '".$username."' and mdp_user = '".$password."' ";

$lecture = json_encode($lire1);
var_dump($nom);
foreach ($lire2 as $unlire2 ) {
 
       $id = $unlire2->id_user;
       $nom = $unlire2->nom_user;
       $prenom = $unlire2->prenom_user;
       $username1 = $unlire2->mail_user;
       $adresse = $unlire2->adresse_user;
       $numtel = $unlire2->numT_user;
       $ville = $unlire2->ville_user;
       $image = $unlire2->image;
       
       
       
       
       
       $money = $unlire2->money_user;
}
      
      
        $count = $lire1[0];

        
        
        if($count=1) // nom d'utilisateur et mot de passe correctes
        { 
           $_SESSION['iduser'] = $id;
           $_SESSION['c_email'] = $username1;
           $_SESSION['nom'] = $nom;
           $_SESSION['image_user'] = $image;
           $_SESSION['prenom'] = $prenom;
           $_SESSION['adresse'] = $adresse;
           $_SESSION['numtel'] = $numtel;
           $_SESSION['ville'] = $ville;
           $_SESSION['money'] = $money;

           header('Location: index.php?page=accueil');
           exit;
          
        }
        else {
          # code...
        
        
           header('Location: index.php?page=connexion&erreur=1');
           exit;
          // utilisateur ou mot de passe incorrect
        }
    }
   
}

}

 include('./vue/menu.php'); 
?>
