<?php $title= "Page Présentation de ma Salle de Biaritz " ?>

<?php require_once 'header.php'; ?>

    <!-------------------------Banner Img------------------------->
    <div>
        <img src="./images/visuel/visuel_3.jpg" class="img-fluid" alt="error :(">
    </div>

    <!-------------------------Texte------------------------->
    <section>
        <h2 class="text-center pt-5 size-text">LE TRAINING FONCTIONNEL</h2><div class="underline_gold"></div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="box-b fs-5 txt-center">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet magni incidunt 
                            perspiciatis cumque eveniet? Explicabo quam, magni similique sint sed, maiores esse aliquid commodi 
                            ratione optio non perspiciatis officiis velit?</p>
                                
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet magni incidunt 
                            perspiciatis cumque eveniet? Explicabo quam, magni similique sint sed, maiores esse aliquid commodi 
                            ratione optio non perspiciatis officiis velit?</p>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet magni incidunt 
                            perspiciatis cumque eveniet? Explicabo quam, magni similique sint sed, maiores esse aliquid commodi 
                            ratione optio non perspiciatis officiis velit?</p>
                    </div>
                    
                    <div class="d-grid gap-3 d-md-flex justify-content-md-center">
                        <a href="./eroor404.html" class="col-md-5 btn btn-dark btn-block mb-4">VOIR NOS OFFRES<br> ET FORMULES</a>
                        <a href="./eroor404.html" class="col-md-5 btn btn-dark btn-block mb-4">CONTACT<br> ET RESÉRVATION</a>
                    </div>
                </div>

                <!-------------------------Slider 2------------------------->
                <div class="col-md-6">
                    <div class="box-a mt-5">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./images/instagram/infos.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./images/instagram/photos.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./images/instagram/promos.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-------------------------Card Sport------------------------->
    <section class="galery">
        <h2 class="text-center pt-5 size-text">LE ATELIERS PRESENTS DANS LE TRAINING FONCTIONNEL</h2><div class="underline_gold"></div>
        <div class="container mt-5">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-4">
                <div class="col">
                    <img src="./images/news-defaut.jpg" class="galery-item" alt="...">
                    <div class="card-body">
                        <h5 class="text-center" >TRX CORE</h5>
                            <p class="card-text">Entrainement rapide et complet focus sur la sangle abdominale. Le TRX est l'unique équipement d'entraînement qui utilise la gravité et le poids du corps pour effectuer de nombreux exercices.</p>
                            <p><strong>Durée :</strong> 45 minutes</p>
                    </div>
                </div>
                <div class="col">
                    <img src="./images/news-defaut.jpg" class="galery-item" alt="...">
                    <div class="card-body">
                        <h5 class="text-center" >BOXE</h5>
                            <p class="card-text">La boxe, notamment la « boxe anglaise » règlementée de manière moderne, est un sport de combat pratiqué depuis le XVIIIᵉ siècle à un contre un, qui recourt à des frappes de percussion à l'aide de gants matelassés.</p>
                            <p><strong>Durée :</strong> 30 minutes</p>
                    </div>
                </div>
                <div class="col">
                    <img src="./images/news-defaut.jpg" class="galery-item" alt="...">
                    <div class="card-body">
                        <h5 class="text-center" >HIIT</h5>
                            <p class="card-text">L' entraînement fractionné de haute intensité est un mode d'entraînement fractionné qui vise un renforcement de la condition physique par de brèves séances d'exercices en anaérobie. </p>
                            <p><strong>Durée :</strong> 30 minutes</p>
                    </div>
                </div>
                <div class="col">
                    <img src="./images/news-defaut.jpg" class="galery-item" alt="...">
                    <div class="card-body">
                        <h5 class="text-center" >TRX FUSION</h5>
                            <p class="card-text">C'est le programme fitness idéal pour transpirer à grosses gouttes, travailler tous les muscles du corps et perdre du poids. Avec de nombreux exercices d'intensité variable, vous allez vous tonifier et ressortir de l'atelier avec une forme physique athlétique !</p>
                            <p><strong>Durée :</strong> 30 minutes</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-------------------------Grey Line + Tittle------------------------->
    <div class="underline_grey"></div>
    <h2 class="text-center pt-5 size-text">LE ACTIVITES PROPOSEES DANS AU STUDIO DE SPORT BIARRITZ</h2><div class="underline_gold"></div>

    <?php require_once 'footer_2.php'; ?>