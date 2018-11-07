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
                   case 'test':
                    include("./vue/test1234.php");
                  break;
                  

                  default:
                    echo "erreur switch";
                  break;
                }
            ?>