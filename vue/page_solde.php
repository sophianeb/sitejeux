<?php $connexion = BDDConnexionPDO();

$lire1='';
$var = 'desc';

$lire1=read($connexion,'jeux','*',[1=>1],'ORDER BY prix_vente_jeux asc');
$lire2=read($connexion,'panier_utilisateurs','nom_article_panier, prix_article_panier, image_article_panier, ref_commande',[1=>1],' ');
if(isset($_POST['filtre'])){
if($_POST['filtre'] == 'pertinant')
{
	echo "OK";
}
else
{
	echo "NON";
}
}	


 ?>
<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(./public/images/imageinfo/affiche_solde.jpg);">
		<h2 class="l-text2 t-center">
			
		</h2>
		<p class="m-text13 t-center">
			
		</p>
	</section>


	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->

						<!--  -->
						<h4 class="m-text14 p-b-32">
							Filters
						</h4>

						

						<div class="flex-w">
							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								
							<form action="index.php?page=pagesolde" type="POST" name="filtre" >
							
									<input  type="radio" name="filtre" value="pertinant"> Plus pertinant</input><br>
									<input  type="radio" name="filtre"> Populaire</input><br>
									<input  type="radio" name="filtre"> Prix croissant</input><br>
									<input  type="radio" name="filtre"> Prix decroissant</input><br>
									
							<br>
							
							

								<button type="submit" value="valide"> OK</button>

							
							</form>
							</div>
							
						</div>
						<br>

						
					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<!--  -->
					<div class="flex-sb-m flex-w p-b-35">
						

						<span class="s-text8 p-t-5 p-b-5">
							Showing 1–12 of 16 results
						</span>
					</div>

					<!-- Product -->
					<div class="row">
						
						<?php 
					$_var = 'aj_panier';
							foreach ($lire1 as $uneligne) {
								$image1 = $uneligne->image_jeux;

								$solde=($uneligne->prix_vente_jeux - $uneligne->prix_jeux)/ $uneligne->prix_jeux*100;
								$_SESSION['solde']=$solde;
						$nom1 = $uneligne->nom_jeux;
						$prix = $uneligne->prix_jeux;
								echo'<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
									<img src="./public/'.$uneligne->image_jeux.'" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											
											<form  method ="post"><button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" name="'.$uneligne->ref_jeux.'" id="'.$uneligne->ref_jeux.'">
												Ajouter 
											</button>
											<form>

										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="index.php?page=pageproduit&amp;ref='.$uneligne->ref_jeux.'" class="block2-name dis-block s-text3 p-b-5">
										'.$uneligne->nom_jeux.' 
									</a>

									<span class="block2-price m-text6 p-r-5">
										'.round($uneligne->prix_vente_jeux,2,PHP_ROUND_HALF_UP).'€ '.round($solde,0,PHP_ROUND_HALF_UP).'%
									</span>
								</div>
							</div>
						</div> ';
						
						if(isset($_POST[$uneligne->ref_jeux]))
{
	


	$_tabpanier = 
	['nom_article_panier'=>$nom1,
	'prix_article_panier'=>$prix,
	'image_article_panier'=>$image1
	];

	var_dump($_tabpanier);
		foreach ($lire2 as $uneligne2) {
			$s = $uneligne2->nom_article_panier;
			

			# code...
		}
		if( $s != $uneligne->nom_jeux)
				{ 
					$addpanier = create($connexion,'panier_utilisateurs',$_tabpanier); 
		} else 
		 {
			$modifpanier = update($connexion,'panier_utilisateurs',['quantite_panier_utilisateur'=> 'quantite_panier_utilisateur +1'],['nom_article_panier'=>$uneligne->nom_jeux]);
		} 
		
}
						
							}
							

							
							
						 ?>


					</div>

					<!-- Pagination -->
					<div class="pagination flex-m flex-w p-t-26">
						<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
						<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
					</div>
				</div>
			</div>
		</div>
	</section>