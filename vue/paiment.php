<?php 
$connexion = BDDconnexionPDO();
$cle = GenerateurCleSteam();
$lire1=read($connexion,'utilisateur','*',['mail_user' => $_SESSION['c_email']],' ');

$lire2=read($connexion,'panier_utilisateurs','*',[0=>0],' ');
if (isset($_POST['btnaccepte']))
{ 


foreach ($lire1 as $uneligne ) {
		$id = $uneligne->id_user;
}
foreach ($lire2 as $uneligne2 ) {

		$resultat = create($connexion,'historiquecommande',['id_user'=>$id, 'nom_article_hist'=>$uneligne2->nom_article_panier, 'prix_article_hist'=>$uneligne2->prix_article_panier, 'cle_jeux'=> $cle, 'image_article_hist'=> $uneligne2->image_article_panier, 'quantite_commande_hist'=>$uneligne2->quantite_panier_utilisateur],' ');

               
}
$suppr = delete($connexion,'panier_utilisateurs',['ref_commande' => '1']);
}	 ?>

<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-4 p-b-30">

					<div class="p-r-20 p-r-0-lg">
						<div class="contact-map size21" id="google_map" data-map-x="40.614439" data-map-y="-73.926781" data-pin="images/icons/icon-position-map.png" data-scrollwhell="0" data-draggable="1"></div>
					</div>
				</div>

				<div class="col-md-3 p-b-30">
					<div style="color:red">Total = <?= $_SESSION['total'] ?> €</div>
					<form class="leave-comment" method="POST" name="btnaccepte" id="btnaccepte">
						<h4 class="m-text26 p-b-36 p-t-15">
							paiement
										<div>
							  <input type="radio" id="visa" name="cart" value="visa"
							         checked>
							  <label for="huey"><img src="./public/images/icons/visa.png"></label>
							
							  <input type="radio" id="mastercard" name="cart" value="mastercard">
							  <label for="dewey"><img src="./public/images/icons/mastercard.png"></label>
							
							  <input type="radio" id="american" name="cart" value="american">
							  <label for="louie"><img src="./public/images/icons/express.png"></label>
							</div>
						</h4>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="nom">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="numcart" placeholder="numero de carte" min="16" max="19">
						</div>
						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="codecart" placeholder="numero de carte" min="3" max="3">
						</div>


						<div class="w-size25">
							<!-- Button -->
							<button name="btnaccepte" id="btnaccepte" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
								accepte
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>