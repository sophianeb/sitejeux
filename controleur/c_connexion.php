<?php
session_start();

$connexion = BDDConnexionPDO();

$mail = TestVarPost('c_email');
$mdp = TestVarPost('c_password');
if(isset($_POST['b_connexion'])){
$lire1 = read($connexion,'utilisateur','mail_user,mdp_user',['mail'=>$mail,'mdp_user'=>$mdp]);
}


?>
 