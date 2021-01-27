<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initiale-scale=1">
        <meta http-equiv="X-UA-compatible" content="ie=edge">
        <link rel="icon" href="img/istockphoto-666003324-612x612.jpg">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
              crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
              integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
              crossorigin=""/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=IBM+Plex+Sans:wght@700&family=Pacifico&family=Space+Mono&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/31cfd28a45.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css">
        <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css">

        <link rel="stylesheet" href="styles/style.css">

        <title>GEEK GARAGE</title>
    </head>

    <body >
    <main>
        <section class="landing">
            <nav>
                <h1 id="logo">GEEK GARAGE</h1>

                <ul class="nav-links">
                    <li><a href="">SERVICES</a></li>
                    <li><a href="">NOS CENTRES</a></li>
                    <li><a href="">CONTACT</a></li>
                </ul>
                    <a class="cta" href="#"><button>Contact</button></a>
            </nav>

            <img class="tamps" src="img/logo.png" alt="">

        </section>
        <div class="corps">
            <section class="services">
                <h2>NOS SERVICES</h2>
                    <div class="container">
                        <img class="logiciel" src="img/logiciel.png" alt="">
                        <img class="phone" src="img/phone_vintage.png" alt="">
                        <img class="maint" src="img/maintenance.png" alt="">
                    </div>

                <p>Vous rencontrez des difficultés à gérer votre ordinateur ? Vous êtes au
                bon endroit ! Geek Garage effectue vos installations de logiciels, de la
                maintenance préventive et ou curative sur vos appareils</p>

                <h2 class="text-ser">NOUS SOMMES A VOTRE ECOUTE<br>
                CONTACTEZ-NOUS</h2>
            </section>

            <section class="centre">
                <h2 class="text-centre">TROUVEZ VOTRE CENTRE GEEK GARAGE</h2>

                <div id="maCarte">


                </div>

                <!-- photos du centre -->

                <div class="container">

                    <img class="happy" src="img/Happy_people.jpg" alt="">
                    <img class="geek" src="img/geek.jpg" alt="">

                </div>

            </section>
            <section class="contact">
                <h2>CONTACTEZ-NOUS</h2>

                <div id="container">

                <div class="mb-3">

                    <input type="text" class="form-control" id="name" placeholder="Nom">
                </div>
                <div class="mb-3">

                    <input type="email" class="form-control" id="email" placeholder="nom@exemple.com">
                </div>
                <div class="mb-3">

                    <textarea class="form-control" id="message" placeholder="Dites-nous tout..." rows="5"></textarea>
                </div>
                    <img class="contactgeek" src="img/contact-garage.png" alt="">
            </section>
        </div>

    </main>

</body>

    <footer class="bottom">

            <div class="container">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-pinterest"></i></a>

            </div>

        <p>All Right reserved by &copy;V-DesiGn.2021</p>
    </footer>
    <!--Fichiers Js -->
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
    <script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>
    <script src="app.js"></script>



</html>


