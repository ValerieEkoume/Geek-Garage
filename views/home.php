

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initiale-scale=1">
        <meta http-equiv="X-UA-compatible" content="ie=edge">
        <link rel="icon" href="../assets/icon/img/pexels-miguel-á-padriñán-3930094%20(1).jpg">
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

        <link rel="stylesheet" href="../assets/icon/styles/style.css">

        <title>REPARE ONLINE GARAGE</title>
    </head>

    <body >

        <div class="main-container">
            <section class="front">
            <nav class="main-nav">
                <ul class="ul_first">
                    <li id="logo">
                        <a class="home-logo" href="#home">ROG</a>
                    </li>

                </ul>

                <ul class="ul_second">
                    <li id="border"><a href="#services">SERVICES</a></li>
                    <li><a href="#centres">CENTRES</a></li>
                    <!--li><a href="login.php">GEEK-CONTACT</a></li-->
                </ul>
                    <!--a class="cta" href="#"><button>Contact</button></a>-->

            </nav>

            <!--img class="tamps" src="img/logo.png" alt=""-->

            <div class="container">
                    <div class="bien">
                <section id="home" class="home">

                    <div class="image">
                        <!--img src="img/robot.jpg" alt=""-->
                    </div>

                    <div class="content">
                        <h3>Bienvenue sur</h3>
                        <h2 class="fancy">REPARE ONLINE GARAGE</h2>
                        <p>
Pour tous les petis bobos de votre matériel informatique
</p>

                        <a href="login.php" class="btn">Contactez-nous</a>
                    </div>
                    </div>
                </section>

                <section id="services" class="services">

                    <h2>GEEK-SERVICES</h2>
                   <div class="image third--image">
                       <img class="logiciel" src="../assets/icon/img/logiciel.png" alt="">
                       <img class="phone" src="../assets/icon/img/phone_vintage.png" alt="">
                       <img class="maint" src="../assets/icon/img/maintenance.png" alt="">
                   </div>

                    <div class="content">

                           <p>Vous rencontrez des difficultés à gérer votre ordinateur ? Vous êtes au
                           bon endroit ! <br> Geek Garage effectue vos installations de logiciels, de la
                           maintenance préventive et ou curative sur vos appareils.<br> Nous sommes à votre
                           écoute.</p>

                           <a href="login.php" class="btn">Contactez-nous</a>
                    </div>

                </section>

                <!-- photos du centre -->

                <section id="centres" class="centres">

                    <div class="container">
                        <!--img class="happy" src="img/Happy_people.jpg" alt=""-->
                        <img class="geek" src="../assets/icon/img/geek.jpg" alt="">
                    </div>

                    <div class="content">
                        <h2 class="text-centre">GEEK-CENTRE</h2>
                    </div>

                    <div id="maCarte"></div>
                    <div class="content">

                        <p>Vous rencontrez des difficultés à gérer votre ordinateur ? Vous êtes au
                            bon endroit ! <br> Geek Garage effectue vos installations de logiciels, de la
                            maintenance préventive et ou curative sur vos appareils.<br> Nous sommes à votre
                            écoute.</p>

                    </div>

                </section>

                </div>


            <div class="header">
                    <h2>CONTACT</h2>
                <img class="contact-geek" src="../assets/icon/img/contact-garage.png" alt="">
                    <P>
Pour prendre rendez-vous n'hésitez pas à nous envoyer un message <br>

                    </P>
        <!--section id="contact" class="contact">
                <div class="form">
                    <form action="#">
                    <input type="text" placeholder="Nom" />
                    <input type="text" placeholder="Email" />
                    <input type="email" id="msg" placeholder="Dites-nous tout..." />
                        <button type="button">Envoyez</button>
                    </form>
                </div>
        </section-->





    </body>

    <footer class="footer">

            <div class="inner-footer">
                <div class="social-links">
                    <ul>
                        <li class="social-items"><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li class="social-items"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="social-items"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="social-items"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    </ul>
                </div>

            </div>
        <div class="outer-footer">

        All Right reserved by &copy;V-DesiGn.2021
        </div>
    </footer>
    <!--Fichiers Js -->
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
    <script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>
    <script src="../assets/app.js"></script>



</html>
