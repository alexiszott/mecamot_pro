<?php
session_start();
include 'src/header.php';
?>

    <section id='main_image'>
        <div class='col-md-12 bg-image'>
            <div id="bg_animated" style="width: 100%; height: 75vh; background-color: #0f5132">

                <!-- PC TEXT VERSION -->
                <div class='w-75 d-none d-md-block'>
                    <h1 class='text-light mohave-main-title shadow-big-txt text-center' id="first_title"
                        style='font-size: 6vw;'>
                        MECAMOT</h1>
                    <h3 class='mohave-main-title shadow-big-txt text-center' id="second_title"
                        style='font-size: 2vw; color: var(--dark-green)'>
                        <span><a onclick="goToAnchor('motoculture_section')" class="text-decoration-none"
                                 style='color: var(--dark-green)'>Motoculture</a></span>,
                        <span><a onclick="goToAnchor('moto_section')" class="text-decoration-none"
                                 style='color: var(--dark-green)'>moto</a></span>,
                        <span><a onclick="goToAnchor('ventes_section')" class="text-decoration-none"
                                 style='color: var(--dark-green)'>ventes de pièces</a></span>
                    </h3>
                </div>
                <!-- MOBILE TEXT VERSION -->
                <div class='pw-100 d-block d-sm-none'>
                    <h1 class='text-light mohave-main-title shadow-big-txt text-center' style='font-size: 16vw;'>
                        MECAMOT</h1>
                    <h3 class='mohave-main-title shadow-big-txt text-center'
                        style='font-size: 6vw; color: var(--dark-green)'>
                        <span><a class="text-decoration-none" style='color: var(--dark-green)'>Motoculture</a></span>,
                        <span><a class="text-decoration-none" style='color: var(--dark-green)'>moto</a></span>,
                        <span><a class="text-decoration-none"
                                 style='color: var(--dark-green)'>ventes de pièces</a></span>
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <!-- MOTOCULTURE -->
    <section id="motoculture_section" class="bg-dark">
        <div class='col-sm-12 p-5' style='height: auto'>
            <h1 class='text-center text-light' id="motoculture_title"><strong>MOTOCULTURE</strong>
            </h1>
        </div>
        <div class='col-md-12'>
            <div class="w-75 mx-auto" style="height: 1px; background: var(--light-green)"></div>
            <div class="container-fluid p-5">
                <div class="title">
                    <p class='card-title p-3 text-center d-none d-md-block h2' style="color: var(--dark-green)">
                        Achat, vente et réparation de matériel
                        d'entretien du jardin</p>
                    <p class='card-title p-3 text-center d-block d-md-none h3' style="color: var(--dark-green)">
                        Achat, vente et réparation de matériel
                        d'entretien du jardin</p>
                    <p class="card-subtitle my-3 text-center text-light d-none d-md-block col-6 mx-auto h3">
                        Tronçonneuse, débrouissailleuse, tondeuse, tracteur-tondeuse, motoculteur et autres équipements
                        de jardinage</p>
                    <p class="card-subtitle my-3 text-center text-light d-block d-md-none">
                        Tronçonneuse, débrouissailleuse, tondeuse, tracteur-tondeuse, motoculteur et autres équipements
                        de jardinage</p>
                </div>

                <div class='col-md-4 mx-auto my-5'>
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/motoculture/motoculture_1.jpg" class="d-block w-100 rounded-3" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/motoculture/motoculture_2.jpg" class="d-block w-100 rounded-3" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/motoculture/motoculture_3.jpg" class="d-block w-100 rounded-3" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MOTO -->
    <section id="moto_section" class="bg-light">
        <div class='col-12 p-5' style='height: auto'>
            <h1 class='text-center text-dark' id="moto_title">
                <strong>MOTO</strong></h1>
        </div>
        <div class='col-12 mb-5'>
            <div class="w-75 mx-auto" style="height: 1px; background: var(--light-green)"></div>
            <div class="container-fluid p-md-5">
                <div class="row d-flex flex-row justify-content-around flex-sm-wrap">
                    <div class="title col-md-4 d-flex flex-column justify-content-between " id="text_moto">
                        <p class='text-justify d-none my-auto d-md-block h2' id="justify">Nous sommes votre destination
                            de <span class="surligner">confiance</span> pour la <span
                                    class="surligner">réparation</span>, <span class="surligner">l'entretien</span> et
                            la <span class="surligner">vente de pièces détachées</span> pour votre moto.
                            <br></br>Trouvez <span class="surligner">tout ce dont vous avez besoin</span> pour garder
                            votre machine en <span class="surligner">parfait état</span> et prête à prendre la route.
                        </p>
                        <p class='text-justify pt-5 px-5 d-block d-md-none' id="justify">Nous sommes votre destination
                            de <span class="surligner">confiance</span> pour la <span
                                    class="surligner">réparation</span>, <span class="surligner">l'entretien</span> et
                            la <span class="surligner">vente de pièces détachées</span> pour votre moto.
                            <br></br>Trouvez <span class="surligner">tout ce dont vous avez besoin</span> pour garder
                            votre machine en <span class="surligner">parfait état</span> et prête à prendre la route.
                        </p>
                    </div>
                    <div class='col-md-4 px-5 y-auto justify-content-center'>
                        <img src="img/moto/moto_1.jpg" id="moto_img"
                             class="d-block w-100 shadow rounded-3"
                             alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- VENTES DE PIECES -->
    <section id="ventes_section" style="z-index: 5" class="bg-dark">
        <div class='col-12 p-5' style='height: auto'>
            <h1 class='text-center text-light'><strong>VENTES</strong></h1>
        </div>
        <div class='col-12'>
            <div class="w-75 mx-auto" style="height: 1px; background: var(--light-green)"></div>
            <div class="container-fluid p-5">
                <div class="title">
                    <p class='card-title p-3 text-center d-none d-md-block h1' style="color: var(--dark-green)">À venir
                        acheter directement au garage</p>
                    <p class="card-subtitle my-3 text-center text-light d-none d-md-block h3">Pièces détachées,
                        accessoires, matériels neufs ou d'occasions</p>

                    <p class='card-title p-3 text-center d-block d-md-none h3' style="color: var(--dark-green)">À venir
                        acheter directement au garage</p>
                    <p class="card-subtitle my-3 text-center text-light d-block d-md-none">Pièces détachées,
                        accessoires, matériels neufs ou d'occasions</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="bg-light">
        <div class='col-12 p-5' style='height: auto'>
            <h1 class='text-center text-dark' id="moto_title">
                <strong>CONTACT</strong></h1>
        </div>
        <div class='col-8 d-flex flex-column mt-auto mx-auto p-md-5 p-0'>
            <div class="d-flex flex-md-row flex-column">
                <div class='col-md'>
                    <table class='w-75 mx-auto mt-5'>
                        <thead>
                        <tr>
                            <th class='text-md-center text-center'><h2>Nous contacter</h2></th>
                        </tr>
                        </thead>

                        <form action='src/send_email.php' method='post'>

                            <tr>
                                <th><input class='m-2 form-control' type='text' placeholder='Nom'
                                           name='name_contact' id="name_contact"></th>
                            </tr>

                            <tr>
                                <th><input class='m-2 form-control' type='email' placeholder='Email *'
                                           name='email_contact' id="email_contact" required></th>
                            </tr>

                            <tr>
                                <th><textarea class='m-2 form-control' type='text' placeholder='Message *' rows='7'
                                              name='texte_contact' id="texte_contact" required></textarea></th>
                            </tr>
                            <?php
                            if (isset($_SESSION['error_message'])) {
                                echo "
                                    <tr>
                                        <th>{$_SESSION['error_message']}</th>
                                    </tr>";
                                unset($_SESSION['error_message']);
                            }
                            ?>
                            <tr>
                                <th class='text-center m-2'><input class='m-2 btn btn-success btn-lg'
                                                                   style='background: var(--dark-green);'
                                                                   type='submit' name='send_email' id="send_email"
                                                                   value='Envoyer'>
                                </th>
                            </tr>

                    </table>
                </div>
                <div class='col-md'>
                    <div class='w-75 mx-auto mt-5'>
                        <div class='text-center'><h2>Informations</h2></div>
                        <div class="my-5 text-md-start text-center"><h4>Mecamot</h4></div>
                        <div class="my-5 text-md-start text-center"><p>5001F Rle Chevalier, 54540 BADONVILLER</p></div>
                        <div class="my-5 text-md-start text-center"><a href="tel:0609853934">+33 6 09 85 39 34</a></div>
                    </div>
                </div>
            </div>
            <div class="my-5 mx-auto col-10">
                <div class="map-container" id="mapContainer">
                    <iframe
                            data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d660.9379065146783!2d6.892035604813096!3d48.4996545164294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47938ab11086f615%3A0xbd57f49881ba9733!2s5001F%20Rle%20Chevalier%2C%2054540%20Badonviller!5e0!3m2!1sfr!2sfr!4v1715243086672!5m2!1sfr!2sfr"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollToPlugin.min.js" defer></script>
    <script src="dist/js/floatingUi/core.js" defer></script>
    <script src="dist/js/floatingUi/dom.js" defer></script>
    <script src="dist/js/carousel.js" defer></script>
    <script src="dist/js/anim_element.js" defer></script>

    <script>
        document.getElementById('mapContainer').addEventListener('click', function () {
            let iframe = this.querySelector('iframe');
            iframe.src = iframe.getAttribute('data-src');
            iframe.style.display = 'block';
            this.style.backgroundImage = 'none';
        });
    </script>

<?php
include 'src/footer.php';
?>