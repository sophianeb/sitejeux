
<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-b-30">
					<div class="p-r-20 p-r-0-lg">
						<div class="contact-map size21" id="google_map" data-map-x="40.614439" data-map-y="-73.926781" data-pin="images/icons/icon-position-map.png" data-scrollwhell="0" data-draggable="1"></div>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<form class="leave-comment"method="POST" id="fconnexion" name="fconnexion">
						<h4 class="m-text26 p-b-36 p-t-15">
						Connexion
							
						</h4>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="email" name="c_email" placeholder="mmm@mm.com" required>
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="c_password" placeholder="Mot de passe" required>
						</div>


						<div class="w-size25">
							<!-- Button -->
							<button value="LOGIN" type="submit" name="fconnexion" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
								Connexion
							</button>
						</div>
						 <?php

                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
					</form>

				</div>
			</div>
		</div>
	</section>