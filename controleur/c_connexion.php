<?php
session_start();

$connexion = BDDConnexionPDO();

if(isset($_POST['b_connexion']))
{


$mailconnexion = TestVarPost('c_email');
$mdpconnexion = password_hash($_POST['c_password'], PASSWORD_DEFAULT);
if(!empty($mailconnexion) && !empty($mdpconnexion))
{
	$requser = $bdd->prepare("SELECT * FROM utilisateur WHERE mail_user=? AND mdp_user=?");
	$requser = execute(array($mailconnexion, $mdpconnexion));
	$userexist = $requser->rowCount();
	if($userexist==1)
	{
		$userinfo = $requser->fetch();
		$_SESSION['nom'] = $userinfo['nom_user'];
		$_SESSION['prenom'] = $userinfo['prenom_user'];
		$_SESSION['mail'] = $userinfo['mail_user'];
		header("location: index.php?name=".$_SESSION['nom']);

	}
	else
	{
		$erreur = 'mauvais mail ou mdp';
	}




}
else
{
	$erreur = 'tout les champs doivent etre remplie';
}
}



?>
 