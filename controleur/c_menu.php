<?php

$connexion = BDDConnexionPDO();

$connexion1 = Connexion1();

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
         $requete2 = "SELECT * FROM utilisateur where 
              mail_user = '".$username."' and mdp_user = '".$password."' ";

        $exec_requete2 = mysqli_query($connexion1,$requete2);
        $reponse2 = mysqli_fetch_array($exec_requete2);
        
        $requete = "SELECT count(*) FROM utilisateur where 
              mail_user = '".$username."' and mdp_user = '".$password."' ";

        $exec_requete = mysqli_query($connexion1,$requete);
        $reponse = mysqli_fetch_array($exec_requete);

       $id = $reponse2['id_user'];
       $image = $reponse2['image'];
       $nom = $reponse2['nom_user'];
       $prenom = $reponse2['prenom_user'];
       $adresse = $reponse2['adresse_user'];
       $numtel = $reponse2['numT_user'];
       $ville = $reponse2['ville_user'];
       $money = $reponse2['money_user'];
       $admin = $reponse2['admin_user'];
      
        $count = $reponse['count(*)'];
        
        
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
           $_SESSION['admin'] = $admin;
           
            
           /*$username = htmlspecialchars($_POST['c_email']); 
    $password = htmlspecialchars($_POST['c_password']);
    
    if($username !== "" && $password !== "")
    {
      //$lire2 = read($connexion,'utilisateur','*',[ 'mdp_user'=>$password, 'mail_user'=>$username]);
         //$requete2 = "SELECT * FROM utilisateur where 
             // mail_user = '".$username."' and mdp_user = '".$password."' ";

 
$sql= " SELECT * FROM utilisateur where 'mdp_user'= '".$password."' AND 'mail_user'= '".$username."'";
$util=$connexion->prepare($sql);

$util->execute();
$util->setFetchMode(PDO::FETCH_OBJ);
$lire2 = $util->fetchall();
$nb = count($lire2);

$sql1= " SELECT count(*) FROM utilisateur where 'mdp_user'= '".$password."' AND 'mail_user'= '".$username."'";
$util1=$connexion->prepare($sql1);

$util1->execute();
$util1->setFetchMode(PDO::FETCH_OBJ);
$lire1 = $util1->fetchall();





       
        
        //$lire1 = read($connexion,'utilisateur', 'count(*)',['mdp_user'=>$password ,'mail_user'=>$username]);
        //$requete = "SELECT count(*) FROM utilisateur where 
             // mail_user = '".$username."' and mdp_user = '".$password."' ";
$test= json_decode(json_encode($lire1), true);
foreach ($lire1 as $unlire1 ) {
  $test = $unlire1;
}
var_dump($test);
die();
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
*/
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
