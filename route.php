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
                  case 'mescommande':
                    include("./controleur/c_mescommandes.php");
                  break;
                  
                 
                  case 'contact':
                    include("./vue/contact.php");
                  break;
                  case 'inscription':
                    include("./controleur/c_inscription.php");
                  break;
                  case 'deconnexion':
                    include("./vue/deconnexion.php");
                  break;
                  case 'profil':
                    include("./vue/profil_modif.php");
                  break;
                  case 'pagejeux':
                    include("./vue/pagejeux.php");
                  break;
                  case 'pagesolde':
                    include("./vue/page_solde.php");
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

                   case 'pdfcom':
                    include("./controleur/c_PDFCom.php");
                  break;
                    case 'message':
                    include("./vue/message.php");
                  break;

                 
                   case 'login':
                    include("./controleur/c_connexion.php");
                  break;
                  

                  default:
                    echo "erreur switch";
                  break;
                }
            ?>