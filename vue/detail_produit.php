	<?php
$connexion = BDDConnexionPDO();

$lire1='';
$lire1=read($connexion,'jeux','*',['ref_jeux'=> $_REQUEST['ref']],'');
	$_var = 'aj_panier';
							
	foreach ($lire1 as $uneligne) {
	$image1 = $uneligne->image_jeux;

$solde=($uneligne->prix_vente_jeux - $uneligne->prix_jeux)/ $uneligne->prix_jeux*100;
								$_SESSION['solde']=$solde;
						$nom1 = $uneligne->nom_jeux;
						$prix = $uneligne->prix_jeux; 
				
if(isset($_POST['envoicomment'])){
if(isset($GET['titrecomment']) && isset($GET['messagecomment']))
{
	create($connexion,'commentaire',['id_commetaire'=>$_GET['titrecomment'],'contenu_commentaire'=>$_GET['messagecomment'], 'id_user'=>$_SESSION['id']]);
}
else
{
	echo "NON";
	die();

}}		
			?>


	
	<div class="container bgwhite p-t-35 p-b-80">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"></div>

					<div class="slick3">
						<div class="item-slick3" data-thumb="./public/<?= $uneligne->image_jeux ?>">
							<div class="wrap-pic-w">
								<img src="./public/<?= $uneligne->image_jeux ?>" alt="IMG-PRODUCT">
							</div>
						</div>

						<div class="item-slick3" data-thumb="images/thumb-item-02.jpg">
							<div class="wrap-pic-w">
								<img src="images/product-detail-02.jpg" alt="IMG-PRODUCT">
							</div>
						</div>

						<div class="item-slick3" data-thumb="images/thumb-item-03.jpg">
							<div class="wrap-pic-w">
								<img src="images/product-detail-03.jpg" alt="IMG-PRODUCT">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="w-size14 p-t-30 respon5">
				<h4 class="product-detail-name m-text16 p-b-13">
					 <?= $uneligne->nom_jeux ?> 
				</h4>

				<span class="m-text17">
					<?= round($uneligne->prix_vente_jeux,2,PHP_ROUND_HALF_UP).'€ '. round($solde,2,PHP_ROUND_HALF_UP).'%' 
					?>
				</span>

				<p class="s-text8 p-t-10">
					
				</p>

				<!--  -->
				<div class="p-t-33 p-b-60">
					


					<div class="flex-r-m flex-w p-t-10">
						<div class="w-size16 flex-m flex-w">
							<div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
								<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
								</button>
								<form type="POST" name="nbprod" >
								<input class="size8 m-text18 t-center num-product" type="number" name="num-product" value="1">
								</form>
								<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
								</button>
							</div>

							<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
								<!-- Button -->
								<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
									Add to Cart
								</button>
							</div>
						</div>
					</div> 
				</div>

				<div class="p-b-45">
					<span class="s-text8 m-r-35">SKU: MUG-01</span>
					<span class="s-text8">Categories: Mug, Design</span>
				</div>

				<!--  -->
				<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Description
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							<?= $uneligne->description_jeux ?>
						</p>
					</div>
				</div>

				
			</div>
		</div>
	</div>
<?php 
		} ?>


	<!-- Relate Product -->
	<section class="relateproduct bgwhite p-t-45 p-b-138">
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
					$lire2=read($connexion,'jeux','*',[1=>1],' ');
 
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