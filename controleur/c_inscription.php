<?php

$connexion = BDDConnexionPDO();

if (isset($_POST['i_nom'])) 
{
	$pass_hash = md5($_POST['i_password']) ;
 
  $_data = [
    'nom_user'=>TestVarPost('i_nom'),    
    'prenom_user'=>TestVarPost('i_prenom'),
    'mail_user'=> TestVarPost('i_email'),
    'adresse_user'=> TestVarPost('i_adresse'),
    'ville_user'=> TestVarPost('i_ville'),
    'numT_user'=> TestVarPost('i_numT'),
    'mdp_user'=> $pass_hash
  ];


    $resultat = create($connexion,'utilisateur', $_data);
	

}
?>