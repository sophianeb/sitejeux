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
                  case 'principale':
                    include("./vue/contact.php");
                  break;

                 
                   case 'login':
                    include("./vue/connexion.php");
                  break;
                  

                  default:
                    echo "erreur switch";
                  break;
                }
            ?>