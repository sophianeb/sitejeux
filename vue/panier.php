<?php if (isset($_SESSION['c_email']))
{ ?>
              
<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1"></th>
							<th class="column-2">Product</th>
							<th class="column-3">Price</th>
							<th class="column-4 p-l-70">Quantity</th>
							<th class="column-5">Total</th>
						</tr>
<?php $lire2=read($connexion,'panier_utilisateurs','nom_article_panier,ref_commande ,prix_article_panier, quantite_panier_utilisateur,id_panier, image_article_panier',[0=>0],' ');
$_SESSION['total']=0;

$id =0;
foreach ($lire2 as $uneligne ) {
$id = $uneligne->ref_commande;
	echo '
						<tr class="table-row">
							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="./public/'.$uneligne->image_article_panier.'" alt="IMG-PRODUCT">
								</div>
							</td>
							<td class="column-2">'.$uneligne->nom_article_panier.'</td>
							<td class="column-3">'.$uneligne->prix_article_panier.'€</td>
							<td class="column-4">
								<div class="flex-w bo5 of-hidden w-size17">
									<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</button>

									<input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="'.$uneligne->quantite_panier_utilisateur.'">

									<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
									</button>
								</div>
							</td>
							<td class="column-5">'.$uneligne->prix_article_panier*$uneligne->quantite_panier_utilisateur.'€</td>
						</tr>
						';
						$_SESSION['total']= $_SESSION['total'] + ($uneligne->prix_article_panier * $uneligne->quantite_panier_utilisateur);
						
						} ?>

						
					</table>

				</div>
			</div>
			

			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div class="flex-w flex-m w-full-sm">
					

					<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
						<!-- Button -->
						
					</div>
				</div>

				<div class="size10 trans-0-4 m-t-10 m-b-10">
					<!-- Button -->
					<a class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" href="index.php?page=pagepaiment&amp;ref=<?= $id ?>">
						Payer
					</a>
				</div>
			</div>

			<!-- Total -->
			
		</div> 
		
	</section>
<?php 
}
else
{?>

	
	
								
									
								
									<a href="index.php?page=inscription" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Inscription
									</a>
<?php } ?>