<?php 
function BDDConnexionPDO()
{
	$hote='localhost';
	$port ='3306';
	$nomBd='site_jeux';
	$utilisateur='root';
	$motPasse='';
	try {
		$connexion = new PDO('mysql:host='.$hote.';dbname='.$nomBd,$utilisateur,$motPasse);
		$connexion->exec("SET CHARACTER  SET utf8");
		$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}
	catch(Exception $e)
	{
		echo 'Erreur:'.$e->getMessage().'<br/>';
		echo'N:'.$e->getCode();
		die;
	}
	return $connexion;

}
?>