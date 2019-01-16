<?php 

$connexion = BDDConnexionPDO();
$lire1='';
$lire1=read($connexion,'jeux','image_jeux, nom_jeux, prix_jeux, ref_jeux');
$lire2=read($connexion,'panier_utilisateurs','nom_article_panier, prix_article_panier, image_article_panier, ref_produit_panier');


?>

        