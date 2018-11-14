<?php
$connexion = BDDConnexionPDO();
$alert = '';
if(isset($_POST['b_connexion']))
{
	var_dump($_POST);
if(isset($_POST['c_email']) && isset($_POST['c_password']))
{
$mailconnexion = TestVarPost('c_email');
$mdpconnexion = password_hash($_POST['c_password'], PASSWORD_DEFAULT);

    if($mailconnexion !== "" && $mdpconnexion !== "")
    {
        $requete = "SELECT count(*) FROM utilisateur where 
              mail_user = '".$mailconnexion."' and mdp_user = '".$mdpconnexion."' ";
        $exec_requete = mysqli_query($connexion,$requete);
        $reponse = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['c_email'] = $mailconnexion;
           header('Location: ../index.php');
        }
        else
        {
           $alert = message("danger", "<strong>Erreur! </strong> mot de passe ou login incorrect"); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
        $alert = message("danger", "<strong>Attention! </strong> mot de passe ou login incorrect"); // utilisateur ou mot de passe vide
    }
}
else
 {
 	$alert = message("danger", "<strong> Attention! </strong> il faut remplir tout les champs");
}
 // fermer la connexion
}

?>
 