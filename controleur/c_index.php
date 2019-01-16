<?php
             if (isset($_GET['page'])) 
                {
                  $urlpage = $_GET['page'];
                }
            else
                {
                  $urlpage = 'accueil';
                }

            switch ($urlpage)
                {
                  case 'accueil':
                    include("./vue/accueil.php");
                  break;
                  case 'liste_articles':
                    include("./vue/liste_articles.php");
                  break;
                  case 'contact':
                    include("./vue/contact.php");
                  break;
                  case 'inscription':
                    include("./vue/inscription.php");
                  break;
                  case 'deconnexion':
                    include("./vue/deconnexion.php");
                  break;
                  case 'profil':
                    include("./vue/profil_modif.php");
                  break;
                  case 'jeuxPS4':
                    include("./vue/j_ps4.php");
                  break;
                  case 'jeuxXBOX':
                    include("./vue/j_xbox.php");
                  break;
                  case 'jeuxSteam':
                    include("./vue/j_steam.php");
                  break;
                  case 'jeuxOrigine':
                    include("./vue/j_origine.php");
                  break;
                  case 'jeuxUplay':
                    include("./vue/j_uplay.php");
                  break;
                  case 'pageproduit':
                    include("./vue/detail_produit.php");
                  break;
                  case 'pagepanier':
                    include("./vue/panier.php");
                  break;
                  case 'pagepaiment':
                    include("./vue/paiment.php");
                  break;

                 
                   case 'login':
                    include("./vue/connexion.php");
                  break;
                  

                  default:
                    echo "erreur switch";
                  break;
                }
            ?>