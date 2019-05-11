<?php 
$connexion = BDDconnexionPDO();
 
$lire2=read($connexion,'jeux','*',[1=>1],' ');
$lire1 = read($connexion,'information','*',['id_info'=>1], ' '); 

 

foreach ($lire1 as $unlire) {
	$info1 = $unlire->info_1;
	$info2 = $unlire->info_2;
	$info3 = $unlire->info_3;
	$imageinfo = $unlire->image_info;  
}

?>
<section class="slide1">
		<div class="wrap-slick1">
			
			
			<div class="slick1">
				<div class="item-slick1 item1-slick1" style="background-image: url(./public/<?= $imageinfo ?>">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							<?= $info1 ?>
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
							<?= $info2 ?>
						</h2>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
							<!-- Button -->
							<a href="index.php?page=pagesolde" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								<?= $info3 ?>
							</a>
						</div>
					</div>
				</div>
			</div>
	</section>

	<!-- Banner -->
	<section class="banner bgwhite p-t-40 p-b-40">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="./public/images/imageinfo/ps4_info.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="index.php?page=pagejeux&amp;platforme=jeuxps4" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Voir
							</a>
						</div>
					</div>

					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="./public/images/imageinfo/uplay_info.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="index.php?page=pagejeux&amp;platforme=jeuxuplay" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Voir
							</a>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="./public/images/imageinfo/steam_info.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="index.php?page=pagejeux&amp;platforme=jeuxsteam" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Voir
							</a>
						</div>
					</div>

					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="./public/images/imageinfo/origin_info.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="index.php?page=pagejeux&amp;platforme=jeuxea" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Voir
							</a>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="./public/images/imageinfo/xbox_info.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="index.php?page=pagejeux&amp;platforme=jeuxxbox" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Voir
							</a>
						</div>
					</div>

					<!-- block2 -->
					<div class="block2 wrap-pic-w pos-relative m-b-30">
						<img src="./template/images/icons/bg-01.jpg" alt="IMG">

						<div class="block2-content sizefull ab-t-l flex-col-c-m">
							<h4 class="m-text4 t-center w-size3 p-b-8">
								Inscrivez-vous 
							</h4>

							<p class="t-center w-size4">
								Profitez d'offres Exlusifs
							</p>

							<div class="w-size2 p-t-25">
								<!-- Button -->
								<a href="index.php?page=inscription" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
									s'inscrire
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- New Product -->
	<section class="newproduct bgwhite p-t-45 p-b-105">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Derniers articles ajouter
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">
<?php 


foreach ($lire2 as $uneligne2 ) {
	# code...
$solde=($uneligne2->prix_vente_jeux - $uneligne2->prix_jeux)/ $uneligne2->prix_jeux*100;
 ?>
					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
								<img src="./public/<?= $uneligne2->image_jeux ?>" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
										
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="index.php?page=pageproduit&ref=<?=$uneligne2->ref_jeux?>" class="block2-name dis-block s-text3 p-b-5">
									<?= $uneligne2->nom_jeux ?>
								</a>

								<span class="block2-price m-text6 p-r-5">
									<?= round($uneligne2->prix_vente_jeux,2,PHP_ROUND_HALF_UP)
									  ?> € <?= round($solde,2,PHP_ROUND_HALF_UP) ?> %
								</span>
							</div>
						</div>
					</div>

				
				
			<?php } ?>
			</div>
			</div>

		</div>
	</section>

	
	<!-- Blog -->
	

	<!-- Instagram -->
	

	<!-- Shipping -->
	<section class="shipping bgwhite p-t-62 p-b-46">
		<div class="flex-w p-l-15 p-r-15">
			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Les meilleurs prix du marché
				</h4>

				<a href="index.php?page=pagesolde" class="s-text11 t-center">
					Voir les meilleur promotions
				</a>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
				<h4 class="m-text12 t-center">
					Clés 100% fiables
				</h4>

				<span class="s-text11 t-center">
					Meilleurs fournisseurs
				</span>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Sur beaucoups de platformes
				</h4>

				<span class="s-text11 t-center">
					PS4, XBOX, ..
				</span>
			</div>
		</div>
	</section>
