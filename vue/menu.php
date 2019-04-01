<?php include("./controleur/c_connexion.php"); ?> 
<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<span class="topbar-child1">
					Free shipping for standard order over $100
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
					</span>

					<div class="topbar-language rs1-select2">
						<select class="selection-1" name="time">
							<option>USD</option>
							<option>EUR</option>
						</select>
					</div>
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.php" class="logo">
					<img src="./public/images/icons/logosite1.png" style="width:50px; height:60px" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="index.php">Home</a>
								
							</li>

							<li>
								<a href="index.php?page=liste_articles">Magazin</a>
								<ul class="sub_menu">
									<li><a href="index.html">Console</a>
										<ul class="sub_menu">
											<li><a href="index.php?page=pagejeux&amp;platforme=jeuxps4"><img src="./public/images/icons/ps4_logo.png" style="width:50px; height:40px;">Playstion 4</a></li>
											<li><a href="index.php?page=pagejeux&amp;platforme=jeuxxbox"><img src="./public/images/icons/xboxone_logo.png" style="width:50px; height:40px;">Xbox One</a></li>
											
										</ul>
							</li>
									<li><a href="#">PC</a>
										<ul class="sub_menu">
												<li><a href="index.php?page=pagejeux&amp;platforme=jeuxea"><img src="./public/images/icons/origine_logo.png" style="width:50px; height:40px;">Origine</a></li>
												<li><a href="index.php?page=pagejeux&amp;platforme=jeuxsteam"><img src="./public/images/icons/steam_logo.png" style="width:50px; height:40px;">Steam</a></li>
												<li><a href="index.php?page=pagejeux&amp;platforme=jeuxuplay"><img src="./public/images/icons/uplay_logo.jpg" style="width:50px; height:40px;">Uplay</a></li>
										</ul>
									</li>
									<li><a href="home-03.html">Accessoire</a></li>
								</ul>
							</li>

							<li class="sale-noti">
								<a href="product.html">Soldes</a>
							</li>

							<li>
								<a href="blog.html">Blog</a>
							</li>

							<li>
								<a href="about.html">À propos</a>
							</li>

							<li>
								<a href="index.php?page=contact">Contact</a>
							</li>
						</ul>
					</nav>
				</div>
				<div class="search-product pos-relative bo4 of-hidden">
							<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search Products...">

							<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>

				<!-- Header Icon -->
				<div class="header-icons">
					<div class="header-wrapicon2">
						<?php if(isset($_SESSION['c_email']) && ($_SESSION['image_user'] != '')){ ?><img src="./public/imageuser/<?= $_SESSION['image_user']  ?>" class="tailleimageP roundedImage header-icon1 js-show-header-dropdown" alt="ICON"> 
						<?php }
						else{ ?>
						<img src="./public/images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
					<?php } ?>
						<div class="header-cart header-dropdown">
							
							<ul class="header-cart-wrapitem">
								
						<div class="header-cart-wrapbtn">
									

						<!-- Header cart noti -->
						<?php if (isset($_SESSION['c_email']))
									{ 
               
                ?>

						<!-- Header cart noti -->
						
							
								<li class="header-cart-item">
									

									<div class="header-cart-item-txt">
										<a href="index.php?page=profil" class="header-cart-item-name">
											Mon compte
										</a>

									</div>
									
								</li>
								<li class="header-cart-item">
								<div class="header-cart-item-txt">
										<a href="index.php?page=mescommande" class="header-cart-item-name">
											Mes commande
										</a>

									</div>
									</li>

								<li class="header-cart-item">
									

									<div class="header-cart-item-txt">
										<a href="index.php?page=deconnexion" class="header-cart-item-name">
											Deconnexion
										</a>

									</div>
								</li>
							</div>
						</div>
						

									<?php }else
									{ 
										?>
									</div>	<!-- Button -->
									<a href="index.php?page=login" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Connexion
									</a>
								
									<a href="index.php?page=inscription" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Inscription
									</a>
				</div>
									<?php
                
            }
            ?>

								
									<!-- Button -->					
	</div>
					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<img src="./template/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								
<?php $lire2=read($connexion,'panier_utilisateurs','nom_article_panier, prix_article_panier, quantite_panier_utilisateur, image_article_panier',[0=>0], ' ');
$total=0;
foreach ($lire2 as $uneligne ) {
	
	echo '<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="./public/'.$uneligne->image_article_panier.'" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											'.$uneligne->nom_article_panier.'
										</a>

										<span class="header-cart-item-info">
											'.$uneligne->prix_article_panier.'€
										</span>
										<span class="header-cart-item-info">
											x'.$uneligne->quantite_panier_utilisateur.'
										</span>
									</div>
								</li>';
								$total= $total + ($uneligne->prix_article_panier * $uneligne->quantite_panier_utilisateur);
								
 	# code...
 } ?>
									
									
							</ul>

							<div class="header-cart-total">
								Total:<?= $total ?>€ 
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="index.php?page=pagepanier" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					
					</div>
				<!-- -->
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="./index.php" class="logo-mobile">
				<img src="./public/images/icons/logosite1.png" alt="IMG-LOGO">
			</a>
			<div class="search-product pos-relative bo4 of-hidden">
							<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search Products...">

							<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>



			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					
					<div class="header-wrapicon2">
						<?php if(isset($_SESSION['c_email']) && ($_SESSION['image_user'] != '')){ ?><img src="./public/imageuser/<?= $_SESSION['image_user']  ?>" class="tailleimageP roundedImage header-icon1 js-show-header-dropdown" alt="ICON"> 
						<?php }
						else{ ?>
						<img src="./public/images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
					<?php } ?>
						<div class="header-cart header-dropdown">
							
							<ul class="header-cart-wrapitem">
								
						<div class="header-cart-wrapbtn">
									

						<!-- Header cart noti -->
						<?php if (isset($_SESSION['c_email']))
									{ 
               
                ?>

						<!-- Header cart noti -->
						
							
								<li class="header-cart-item">
									

									<div class="header-cart-item-txt">
										<a href="index.php?page=profil" class="header-cart-item-name">
											Mon compte
										</a>

									</div>
									
								</li>
								<li class="header-cart-item">
								<div class="header-cart-item-txt">
										<a href="index.php?page=mescommande" class="header-cart-item-name">
											Mes commande
										</a>

									</div>
									</li>

								<li class="header-cart-item">
									

									<div class="header-cart-item-txt">
										<a href="index.php?page=deconnexion" class="header-cart-item-name">
											Deconnexion
										</a>

									</div>
								</li>
							</div>
						</div>
						

									<?php }else
									{ 
										?>
									</div>	<!-- Button -->
									<a href="index.php?page=login" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Connexion
									</a>
								
									<a href="index.php?page=inscription" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Inscription
									</a>
				</div>
									<?php
                
            }
            ?>

</div>
<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<img src="./template/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								
<?php $lire2=read($connexion,'panier_utilisateurs','nom_article_panier, prix_article_panier, quantite_panier_utilisateur, image_article_panier');
$total=0;
foreach ($lire2 as $uneligne ) {
	echo '<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="./public/'.$uneligne->image_article_panier.'" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											'.$uneligne->nom_article_panier.'
										</a>

										<span class="header-cart-item-info">
											'.$uneligne->prix_article_panier.'€
										</span>
										<span class="header-cart-item-info">
											x'.$uneligne->quantite_panier_utilisateur.'
										</span>
									</div>
								</li>';
								$total= $total + ($uneligne->prix_article_panier * $uneligne->quantite_panier_utilisateur);
 	# code...
 } ?>
									
									
							</ul>

							<div class="header-cart-total">
								Total:<?= $total ?>€
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="index.php?page=pagepanier" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					
					</div>
		

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								contact@kingg.com
							</span>

							
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
							<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
							<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
							<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="index.html">Home</a>
						<ul class="sub-menu">
							<li><a href="index.html">Homepage V1</a></li>
							<li><a href="home-02.html">Homepage V2</a></li>
							<li><a href="home-03.html">Homepage V3</a></li>
						</ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
								<a href="index.php?page=liste_articles">Magazin</a>
								<ul class="sub_menu">
									<li><a href="index.html">Console</a>
										<ul class="sub_menu">
											<li><a href="index.html"><img src="./template/images/icons/ps4_logo.png" style="width:50px; height:40px;"> PS4</a></li>
											<li><a href="home-02.html"><img src="./template/images/icons/xboxone_logo.png" style="width:50px; height:40px;"> XBOX ONE</a></li>
											<li><a href="home-03.html"><img src="./template/images/icons/ninswitch_logo.png" style="width:50px; height:40px;"> Nintendo Swich</a></li>
										</ul>
							</li>
									<li><a href="#">PC</a>
										<ul class="sub_menu">
												<li>Origine</a></li>
												<li><a href="home-02.html">Steam</a></li>
												<li><a href="home-03.html">Ubisoft</a></li>
										</ul>
									</li>
									<li><a href="home-03.html">Accessoire</a></li>
								</ul>
							</li>

					<li class="item-menu-mobile">
						<a href="product.html">Sale</a>
					</li>

					<li class="item-menu-mobile">
						<a href="cart.html">Features</a>
					</li>

					<li class="item-menu-mobile">
						<a href="blog.html">Blog</a>
					</li>

					<li class="item-menu-mobile">
						<a href="about.html">About</a>
					</li>

					<li class="item-menu-mobile">
						<a href="contact.html">Contact</a>
					</li>
				</ul>
			</nav>
		</div>
		