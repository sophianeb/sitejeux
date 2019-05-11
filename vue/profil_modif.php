<?php 

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
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Information Profil</a>
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
                                       
                                        <hr />

                                    </div>
                                    
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
               
            </div>
        </div>
    </div>