<?php ?>
<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1"></th>
							<th class="column-2">Product</th>
							<th class="column-3">Prix</th>
							<th class="column-5">Référence</th>
							<th class="column-4 p-l-70">Clé</th>
							<th class="column-4 p-l-70">Bon de Commande</th>

<img src="">
						</tr>
<?php 

$total = 0;

$lire3 = read($connexion,'historiquecommande','*', ['id_user'=>$_SESSION['iduser']],'');




foreach ($lire3 as $uneligne ) {
	
{
	
	echo '
						<tr class="table-row">
							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="./public/'.$uneligne->image_article_hist.'" alt="IMG-PRODUCT">
								</div>
							</td>
							<td class="column-2">'.$uneligne->nom_article_hist.'</td>
							<td class="column-3">'.$uneligne->prix_article_hist.'€</td>
							<td class="column-4">H'.$uneligne->ref_commande.'</td>
								
								<td class="column-4">H'.$uneligne->cle_jeux.'</td>
								<td class="column-4"><a href="http://btsinfo-rousseau53.fr:11017/2017-kingg/pdfcom.php?id='.$uneligne->id_user.'&date='.$uneligne->date_commande.'"><img src="./public/images/icons/icon_fpdf.png"></a>
							</td>
							
						</tr>
						';

					
				}}
						?>

						
					</table>
					<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						
					</span>
					
				</div>


				</div>
			</div>
