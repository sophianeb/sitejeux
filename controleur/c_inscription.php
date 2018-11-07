<?php

$connexion = BDDConnexionPDO();

if (isset($_POST['i_nom'])) 
{
	$pass_hache = password_hash($_POST[TestVarPost('i_password')], PASSWORD_DEFAULT);
 
  $_data = [
    'nom_user'=>TestVarPost('i_nom'),    
    'prenom_user'=>TestVarPost('i_prenom'),
    'email_user'=> TestVarPost('i_email'),
    'mdp_user'=> TestVarPost($pass_hash)
  ];


    $resultat = create($connexion,'utilisateur', $_data);
	

}
?>