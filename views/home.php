

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
<!--                    <li id="logo">-->
<!--                        <a class="home-logo" href="#home">ROG</a>-->
<!--                    </li>-->
                    <li >
                        <a class="lien" href="#home"><img class="logo_online" src="../assets/icon/img/online_logo.jpg" id="logo_online" alt=""></a>
                    </li>

                </ul>

                <ul class="ul_second">
                    <li id="border"><a class="lien1" href="#services">SERVICES</a></li>
                    <li><a class="lien2" href="#centres">CENTRES</a></li>
                    <!--li><a href="login.php">GEEK-CONTACT</a></li-->
                </ul>
                    <!--a class="cta" href="#"><button>Contact</button></a>-->

            </nav>

            <!--img class="tamps" src="img/logo.png" alt=""-->

            <div class="container">
                    <div class="bien">
                <section id="home" class="home">


                    <div class="content">
                        <h3 class="welcome">Bienvenue sur</h3>
                        <h2 class="fancy">REPARE ONLINE GARAGE</h2>
                        <p class="topo">
                        Pour tous les petits bobos de votre matériel informatique
                        </p>
<!--                        <img class="logo_online" src="../assets/icon/img/online_logo.jpg" id="logo_online" alt="">-->

<!--                        <a href="login.php" class="btn">Contactez-nous</a>-->
                    </div>
                    </div>
                </section>

                <section id="services" class="services">

                    <h2 class="titre">NOS SERVICES</h2>
                   <div class="image third--image">
                       <img class="logiciel" src="../assets/icon/img/logiciel.png" alt="">
                       <img class="phone" src="../assets/icon/img/phone_vintage.png" alt="">
                       <img class="maint" src="../assets/icon/img/maintenance.png" alt="">
                   </div>

                    <div class="content">

                           <p class="topo">Vous rencontrez des difficultés à gérer votre ordinateur ? Vous êtes au
                           bon endroit ! <br> Geek Garage effectue vos installations de logiciels, de la
                           maintenance préventive et ou curative sur vos appareils.<br> Nous sommes à votre
                           écoute.</p>
                    </div>

                </section>

                <!-- photos du centre -->

                <section id="centres" class="centres">

                    <div class="container">

                        <img class="geek" src="../assets/icon/img/geek.jpg" alt="">
                    </div>

                    <div class="content">
                        <h2 class="titre">NOS CENTRES</h2>
                    </div>

                    <div id="maCarte"></div>
                    <div class="content">

                        <p class="topo">Vous rencontrez des difficultés à gérer votre ordinateur ? Vous êtes au
                            bon endroit ! <br> Geek Garage effectue vos installations de logiciels, de la
                            maintenance préventive et ou curative sur vos appareils.<br> Nous sommes à votre
                            écoute.</p>

                    </div>

                </section>

                </div>


            <div class="header">
                    <h2 class="titre">CONTACT</h2>
                <img class="contact-geek" src="../assets/icon/img/contact-garage.png"  alt="">
                    <P class="topo">
                    Pour prendre rendez-vous n'hésitez pas à nous envoyer un message en cliquant sur la carte.<br>
                    </P>

</div>


        <!-- Modal -->
        <div class="contain_modal">
            <?php if ( isset($_GET['success']) && $_GET['success'] == true): echo $msg = "<div class='alert alert-success 
        alert-dismissible fade show my-3' role='alert'>
        <strong>Votre message a été envoyé avec succès!</strong> Nous sommes déjà en train de le lire.
         <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>     
    </div>" ?>
            <?php  endif  ?>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header ">
                            <h5 class="modal-title" id="exampleModalLabel">Contact</h5>
                        </div>
                        <div style="margin-left: 10px" class="modal-body">
                            <form class="w-100" method="post" action="/mail">
                                <div class="form-group pt-3" class="msgError form-group" onsubmit="return validateForm()" method="POST">
                                    <input type="email" required class="form-control"  id="exampleInputEmail1"
                                           aria-describedby="emailHelp" placeholder="Adresse Email" name="email">
                                </div>
                                <div class="form-group pt-3">
                                    <input type="text" pattern="^[a-zA-Z" required class="form-control" id="exampleInputPassword1"
                                           placeholder="Nom, Prénom, Raison social" name="name"<span class="error" id="errorname"></span><br>
                                    <span title="Veuillez entrer uniquement des lettres"></span>
                                </div>
                                <div class="form-group pt-3">
                                    <input type="text" class="form-control" id="exampleInputPassword1"
                                           placeholder="Adresse" name="adresse">
                                </div>
                                <div class="form-group pt-3">
                                    <input required type="text"  class="form-control" id="exampleInputPassword1"
                                           placeholder="Numéro de téléphone" name="tel">
                                </div>
                                <div class="input-group pt-3">
                                    <textarea required class="form-control"  aria-label="With textarea"
                                              placeholder="Explication de votre problème" name="message"></textarea>
                                </div>

                        </div>
                        <div class="modal-footer">

                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>

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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>



</html>
