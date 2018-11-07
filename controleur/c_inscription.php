<?php

$connexion = BDDConnexionPDO();

 if(isset($POST['i_nom']))
 { 
  $_data = [
    'nom_user'=> TestVarPost('i_nom'),    
    'prenom_user'=> TestVarPost('i_prenom'),
    'email_user'=>TestVarPost('i_email'),
    'mdp_user'=>TestVarPost('i_password')
  ];  

    
$resultat = create($connexion,'utilisateur', $_data);
return($resultat);

}



?>
