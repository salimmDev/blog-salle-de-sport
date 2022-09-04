<?php $title= "Page Contact" ?>

<?php require_once 'header.php'; ?>







    <!-------------------------Banner Img------------------------->
    <div>
        <img src="./images/visuel/visuel_2.jpg" class="img-fluid" alt="error :(">
    </div>

    <!-------------------------Formulaire------------------------->
    <section>

        <div class="container pt-5 pb-5">
            <div class="row ">
                <div class="col-md-4">
                    <h4>NOS COORDONNÉES</h4><div class="underline_gold_contact"></div>
                    <div class="txt-center">
                        <p><strong>Studio Sport & Coaching</strong><br>01 Allée Marie Politzer<br> 64200 Biarritz</p>
                        <p><strong>Téléphone</strong><br> 05 59 47 84 18</p>
                        <p><strong>Horaires</strong><br>Du lundi au vendredi<br>de 8h à 14h, de 16h à 21h<br>Le samedi<br>de 10h à 13h</p>
                        <p><strong>Email</strong><br>contact (at) lestudiobiarritz.com<br>ou via ce formulaire</p> 
                    </div>
                </div>
                <div class="col-md-8">
                    <h4>FORMULAIRE DE CONTACT</h4><div class="underline_gold_contact"></div>
                    <form method="post" id="myForm" action="view.php" > 
                     <?php if (isset($_GET["add"]) && $_GET["add"] == 1) : ?>
                        <div class="alert alert-success"> Formulaire envoyé avec success </div>
                        <?php  header("refresh:2; url= index.php"); ?>
                        <?php elseif (isset($_GET["add"]) &&  $_GET["add"] == 0) :  ?>
                        <div class="alert alert-danger"> Echec de l'envoye du Formulaire sorry :-( </div>
                    <?php endif; ?> 

                        <div class="row g-3 pt-2">
                            <div class="col-md-7">
                                <div class="form-outline">
                                    <input type="text" name="nom" id="nom" class="form-control bg-light" placeholder="VOTRE NOM"/>
                                    <span id="error_name" class="fs_mbl"></span>
                                </div>
                            </div> 

                            <div class="col-md-5">
                                <div class="form-outline fs_mbl">
                                    <input type="text" name="prenom" id="prenom" class="form-control bg-light " placeholder="VOTRE PRENOM"/>
                                    <span id="error_family" class="fs_mbl"></span>
                                </div>
                            </div>
                    
                            <div class="col-md-5">
                                <div class="form-outline">
                                    <input type="email" name="email" id="email" class="form-control bg-light" placeholder="VOTRE EMAIL"/>
                                    <span id="error_mail" class="fs_mbl"></span> 
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-outline">
                                    <input type="number" name="numeros" id="numeros" class="form-control bg-light" placeholder="VOTRE TELEPHONE"/>
                                    <span id="error_numeros" class="fs_mbl"></span>
                                </div>
                            </div>
                        
                            <div class="col-md-12">
                                <div class="form-outline">
                                    <input type="text" name="sujet" id="sujet" class="form-control bg-light" placeholder="SUJET"/>
                                    <span id="error_sujet" class="fs_mbl"></span>
                                </div>
                            </div>

                            <div class="col-md-12 pb-5">
                                <div class="form-outline">
                                    <textarea class="form-control bg-light" name="message" id="message" rows="3" placeholder="MESSAGE"></textarea>
                                    <span id="error_message" class="fs_mbl"></span>
                                </div>
                            </div>
                        </div>

                        <input type="submit" value=" Envoyer" class="col-md-3 btn btn-dark btn-block"/>
                    </form>
                </div>
            </div>
        </div>
    </section> 

    <!-------------------------Map Link-------------------------> 
    <div id="map-container-fluid-google-1">
        <iframe class="map w-100 pb-0" style="padding-bottom: 0; height: 500px;"
            src="https://maps.google.com/maps?q=1ssimplon+berre+l'etang&t=&z=13&ie=UTF8&iwloc=&output=embed">
        </iframe>
    </div>


    <?php require_once 'footer_2.php'; ?>