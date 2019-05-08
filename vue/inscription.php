<?php
include("./controleur/c_inscription.php")
?>

<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-b-30">
					<div class="p-r-20 p-r-0-lg">
				</div>

				<div class="col-md-6 p-b-30">
					<form class="leave-comment" action = "index.php?page=accueil" method="post" id= inscri enctype="multipart/form-data">
						<h4 class="m-text26 p-b-36 p-t-15">
							Nouveau client ?
						</h4>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="i_nom" id="i_nom" placeholder="Nom">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="i_prenom" id="i_prenom" placeholder="Prénom">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="i_email" id="i_email" placeholder="Email">
						</div>
						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="i_password" id="i_password" placeholder="Nouveau mot de passe">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="i_adresse" id="i_adresse" placeholder="Votre adresse">
						</div>
						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="i_ville" id="i_ville" placeholder="Ville">
						</div>
						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="tel" name="i_numT" id="i_numT" placeholder="Numéro de téléphone">
						</div>
						

					

						<div class="w-size25">
							<!-- Button -->
							<button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4" type="submit" id= inscri name=envoi>
								S'inscrire
							</button>
						</div>
						</form>
					
				</div>
			</div>
		</div>
</section>