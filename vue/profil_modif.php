<?php if (isset($_FILES['fichier'])) 
        {
            if( $_FILES['fichier']['name'] != '')
                {       
                    $dossier = './public/';
                    $fichier = basename($_FILES['fichier']['name']);
                    $taille_maxi = 400000;
                    $taille = filesize($_FILES['fichier']['tmp_name']);
                    $extensions = array('.jpg');
                    $extension = strrchr($_FILES['fichier']['name'], '.'); 
                    //Début des vérifications de sécurité...
                    if (!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
                        {
                         $alert2 = message("danger", "<strong>Erreur! </strong>Vous devez uploader un fichier de type pdf");
                          $erreur = true;
                        }
                    if ($taille>$taille_maxi)
                        {
                          $alert2 = message("danger", "<strong>Erreur! </strong> Le fichier est trop gros... $taille");
                          $erreur = true;
                        }
                    if (!isset($erreur)) //S'il n'y a pas d'erreur, on upload
                        {
                           //On formate le nom du fichier ici...
                          $fichier = strtr($fichier, 
                                'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
                                'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
                          $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
                          if (move_uploaded_file($_FILES['fichier']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
                             {
                                  $alert2 = message("success", "<strong>OK! </strong>importation effectué avec succès !");
                             }
                          else //Sinon (la fonction renvoie FALSE).
                             {
                                $alert2 = message("danger", "<strong>Erreur! </strong>Echec de l'importation du PDF"); 
                             }
                        } 

                }
            else
                {
                  $alert2 = message("warning", "<strong>NB: </strong>Pas de PDF enregistré");
                }
        }
?>
<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="image-container">
                                    <?php if(isset($_SESSION['c_email'])){ if($_SESSION['image_user'] != ''){ ?><img src="./public/imageuser/<?= $_SESSION['image_user']  ?>" class="tailleimageM roundedImage header-icon1 js-show-header-dropdown" alt="ICON"> 
                        <?php }}else{
                       ?><img src="./public/images/icons/icon-header-01.png?>" class="tailleimageM roundedImage header-icon1 js-show-header-dropdown" alt="ICON"><?php } ?>
                                    <div class="middle">
                                        <input type="file" name="fichier" class="btn btn-secondary" value="changer" />
                                        
                                        
                                    </div>
                                </div>
                                <div class="userData ml-3">
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a href="javascript:void(0);">Some Name</a></h2>
                                    <h6 class="d-block"><a href="javascript:void(0)"><?= $_SESSION['money']  ?></a> Argent Porte-monnaie</h6>
                                    <h6 class="d-block"><a href="javascript:void(0)">300</a> Nombre article acheter</h6>
                                </div>
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Basic Info</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="connectedServices-tab" data-toggle="tab" href="#connectedServices" role="tab" aria-controls="connectedServices" aria-selected="false">Connected Services</a>
                                    </li>
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Nom</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?= $_SESSION['nom']  ?> <?= $_SESSION['prenom']  ?>
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Email</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?= $_SESSION['c_email']  ?>
                                            </div>
                                        </div>
                                        <hr />
                                        
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Adresse</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?= $_SESSION['adresse']  ?> <?= $_SESSION['ville']  ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Numero de téléphone</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?= $_SESSION['numtel']  ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Something</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                Something
                                            </div>
                                        </div>
                                        <hr />

                                    </div>
                                    <div class="tab-pane fade" id="connectedServices" role="tabpanel" aria-labelledby="ConnectedServices-tab">
                                        Facebook, Google, Twitter Account that are connected to this account
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
                <?php var_dump($_SESSION);?>
            </div>
        </div>
    </div>