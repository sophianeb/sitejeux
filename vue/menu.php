
<div class="container-menu-header">
			

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
								<a href="index.php">Accueil</a>
								
							</li>

							<li>
								Magazin
								<ul class="sub_menu">
									<li><a href="#">Console</a>
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
									
								</ul>
							</li>

							<li class="sale-noti">
								<a href="index.php?page=pagesolde">Soldes</a>
							</li>



							<li>
								<a href="index.php?page=contact">Contact</a>
							</li>
						</ul>
					</nav>
				</div>
				

				<!-- Header Icon -->
				<div class="header-icons">
					<div class="header-wrapicon2">
						<?php 
						if(isset($_SESSION['c_email']) && ($_SESSION['image_user'] != '')){ ?><img src="./public/imageuser/<?= $_SESSION['image_user']  ?>" class=" header-icon1 js-show-header-dropdown" alt="ICON"> 
						<?php
						
// pour image class -> roundedImage

						 }
						else{ ?>
						<img src="./public/images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
					<?php } ?>
						<div class="header-cart header-dropdown">
							
							<ul class="header-cart-wrapitem">
								
						<div class="header-cart-wrapbtn">
									

						<!-- Header cart noti -->
						<?php if (isset($_SESSION['c_email']) && $_SESSION['c_email'] != '' )
									{ 
$lire45=read($connexion,'panier_utilisateurs','SUM(quantite_panier_utilisateur) as m',[1=>1],' ');
										foreach ($lire45 as $unlire45) {
											$qtt=$unlire45->m;
											# code...
										}
               
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
									<?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1 )
									{ ?> <li class="header-cart-item">
									<div class="header-cart-item-txt">
										<a href="index.php?page=message" class="header-cart-item-name">
											Messages
										</a>

									</div>
									</li> <?php } ?> 

								<li class="header-cart-item">
									

									<div class="header-cart-item-txt">
										<a href="index.php?page=deconnexion">Deconnexion</a>
											
										
										
									</div>
								</li>
							</div>
						</div>
						

									<?php }else
									{ 
										?>

						</div>
									<form class="leave-comment"method="POST" id="fconnexion" name="fconnexion">
						
						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="email" name="c_email" placeholder="mmm@mm.com" required>
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="c_password" placeholder="Mot de passe" required>
						</div>


						
							
							<!-- Button -->
							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
							<button value="LOGIN" type="submit" name="fconnexion" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
								Connexion
							</button>
						</form>
			</div>
						<div class="header-cart-wrapbtn">
							<a href="index.php?page=inscription" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
										Inscription
									</a>
								</div>
						</div>	<!-- Button -->
									
									
				</div>
									<?php
                
            }
            ?>

								
									<!-- Button -->					
	</div>
					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<img src="./template/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<?php if(isset($_SESSION['c_email'])){ ?>
						<span class="header-icons-noti"><?= $qtt ?></span>
					<?php } ?>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
			<?php if(isset($_SESSION['c_email'])){ ?>					
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
<?php }else{?> Connecter-vous <br>
<?php  }?>
							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="index.php?page=pagepanier" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Voir panier
									</a>
								</div>

								
							</div>
						</div>
					
					</div>
				<!-- -->
				</div>
			</div>
		</div>
				<!-- Header Mobile -------------------------------------------------------------------------------------------------------------------------------------------------->
		<!-- Header Mobile -------------------------------------------------------------------------------------------------------------------------------------------------->
		<!-- Header Mobile -------------------------------------------------------------------------------------------------------------------------------------------------->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="./index.php" class="logo-mobile">
				<img src="./public/images/icons/logosite1.png" alt="IMG-LOGO">
			</a>
			



			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					
					
					<div class="header-wrapicon2">
						<?php 
						if(isset($_SESSION['c_email']) && ($_SESSION['image_user'] != '')){ ?><img src="./public/imageuser/<?= $_SESSION['image_user']  ?>" class=" header-icon1 js-show-header-dropdown" alt="ICON"> 
						<?php
						
// pour image class -> roundedImage

						 }
						else{ ?>
						<img src="./public/images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
					<?php } ?>
						<div class="header-cart header-dropdown">
							
							<ul class="header-cart-wrapitem">
								
						<div class="header-cart-wrapbtn">
									

						<!-- Header cart noti -->
						<?php if (isset($_SESSION['c_email']) && $_SESSION['c_email'] != '' )
									{ 
$lire45=read($connexion,'panier_utilisateurs','SUM(quantite_panier_utilisateur) as m',[1=>1],' ');
										foreach ($lire45 as $unlire45) {
											$qtt=$unlire45->m;
											# code...
										}
               
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
									<?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1 )
									{ ?> <li class="header-cart-item">
									<div class="header-cart-item-txt">
										<a href="index.php?page=message" class="header-cart-item-name">
											Messages
										</a>

									</div>
									</li> <?php } ?> 

								<li class="header-cart-item">
									

									<div class="header-cart-item-txt">
										<a href="index.php?page=deconnexion">Deconnexion</a>
											
										
										
									</div>
								</li>
							</div>
						
						

									<?php }else
									{ 
										?>

						</div>
									<form class="leave-comment"method="POST" id="fconnexion" name="fconnexion">
						
						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="email" name="c_email" placeholder="mmm@mm.com" required>
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="c_password" placeholder="Mot de passe" required>
						</div>


						
							
							<!-- Button -->
							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
							<button value="LOGIN" type="submit" name="fconnexion" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
								Connexion
							</button>
						</form>
			</div>
			<div class="header-cart-wrapbtn">
							<a href="index.php?page=inscription" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
										Inscription
									</a>
								</div>
									<?php
                
            }
            ?>
        </div></div></div>
<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<img src="./template/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<?php if(isset($_SESSION['c_email'])){ ?>
						<span class="header-icons-noti"><?= $qtt ?></span>
					<?php } ?>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
			<?php if(isset($_SESSION['c_email'])){ ?>					
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
<?php }else{?> Connectez vous <br>
<?php  }?>
							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="index.php?page=pagepanier" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Voir panier
									</a>
								</div>

								
							</div>
						</div>
					
					</div>
		

				
			</div>
		

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					

					

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
		