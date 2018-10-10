<?php

$connexion = BDDConnexionPDO();



if (isset($_POST['nom'])) 
{
  $monID = TestVarPost('monId');
  $_data = [
    'i_nom'=> TestVarPost('nom_user'),    
    'i_prenom'=> TestVarPost('prenom_user'),
    'i_email'=>TestVarPost('email_user'),
    'i_password'=>TestVarPost('mdp_user')
  ];

 
    
    $resultat = create($connexion,'utilisateur', $_data);

?>