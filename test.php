<?php
?>

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

<div class="main-container">

    <nav class="main-nav">
        <ul class="ul_first">
            <li id="logo">
                <a href="#">GG</a>
            </li>

        </ul>

        <ul class="ul_second">
            <li id="border"><a href="#services">SERVICES</a></li>
            <li><a href="#centres">NOS CENTRES</a></li>
            <li><a href="#contact">CONTACT</a></li>
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
                    <h2>GEEK GARAGE</h2>
                    <p>
                        Pour tous les petis bobos de votre matériel informatique
                    </p>

                    <a href="#" class="btn">Contactez-nous</a>
                </div>
        </div>
        </section>

        <section id="services" class="services">

            <h2>NOS SERVICES</h2>
            <div class="image third--image">
                <img class="logiciel" src="img/logiciel.png" alt="">
                <img class="phone" src="img/phone_vintage.png" alt="">
                <img class="maint" src="img/maintenance.png" alt="">
            </div>

            <div class="content">

                <p>Vous rencontrez des difficultés à gérer votre ordinateur ? Vous êtes au
                    bon endroit ! Geek Garage effectue vos installations de logiciels, de la
                    maintenance préventive et ou curative sur vos appareils. Nous sommes à votre
                    écoute.</p>

                <a href="#" class="btn">Contactez-nous</a>
            </div>

        </section>

        <!-- photos du centre -->

        <section id="centres" class="centres">

            <div class="container">
                <img class="happy" src="img/Happy_people.jpg" alt="">
                <img class="geek" src="img/geek.jpg" alt="">
            </div>

            <div class="content">
                <h2 class="text-centre">TROUVEZ VOTRE CENTRE GEEK GARAGE</h2>
            </div>

            <div id="maCarte"></div>




        </section>

        <h2>CONTACTEZ-NOUS</h2>

        <div id="contact" class="contact">
            <img class="contact-geek" src="img/contact-garage.png" alt="">
            <div class="mb-3">

                <input type="text" class="form-control" id="name" placeholder="Nom">
            </div>
            <div class="mb-3">

                <input type="email" class="form-control" id="email" placeholder="nom@exemple.com">
            </div>
            <div class="mb-3">

                <textarea class="form-control" id="message" placeholder="Dites-nous tout..." rows="5"></textarea>
            </div>

            </section>
        </div>

    </div>







    <section class="contact">




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

<link>
    $backgroundcolor : #ffdf91;
    $textColor : #550a46;
    $fonth2 : 'Space Mono', monospace;

    body, html {
    height: 100%;
    background-color: #cae4db;
    }

    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }



    li {
    list-style: none;
    transition: all 0.4s;
    }

    li:hover {
    transform: scale(1.1);

    }

    a {
    text-decoration: none;
    text-transform: uppercase;
    color: #ffdf91;
    font-family: 'Concert One', cursive;

    }

    a:hover {
    color: #f88f01;
    }


    h2 {
    color: $textColor;
    font-family: $fonth2;
    letter-spacing: 10px;
    text-align: center;

    }

    h3 {
    font-size: 40px;
    color: $textColor;
    font-family: 'Pacifico', cursive;
    font-weight: lighter;

    }

    p {
    margin-top: 30px;
    font-size: 14px;
    color: #470938;
    font-family: 'Concert One', cursive;
    }

    .btn {
    margin-top: 5%;
    display: inline-block;
    padding: 10px 30px;
    background-color: #ffdf91;
    letter-spacing: 5px;
    }

    .btn:hover{
    transform: scale(0.97);
    background-color: #f6f4e6;
    }

    img {
    width: 100%;
    }



    #logo {
    border: 2px solid #ffdf91;
    padding: 0 5px;
    align-items: center;
    font-size: 1.7em;
    }

    .main-container {
    // width: 100vw;
    //height: 100vw;
    }



    .main-nav {
    position: fixed;
    display: flex;
    padding: 2em 4em;

    }

    .home {}

    .main-nav .ul_second {
    position: fixed;
    display: flex;
    right: 2em;
    }

    .main-nav .ul_second li {
    margin-left: 1.5em;
    font-size: 1.5em;

    }

    .main-nav .ul_second #border {
    border: 2px solid #ffdf91;
    padding: 0 15px;
    align-items: center;
    }

    .container {
    width: 400vw;
    display: flex;
    flex-direction: row;
    }

    .container .home {
    width: 80vw;
    height: 80vh;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 8em;
    margin-bottom: 5%;

    }

    .container .home .image {
    width: 400px;
    height: 600px;

    }

    .content {
    margin-top: 50px;
    margin-right: 100px;
    text-align: center;
    z-index: 10;
    }

    .third--image {

    display: inline;
    //vertical-align: center;
    //padding: 10px;
    margin-left: 17%;
    margin-top: 15%;

    }

    .third--image .logiciel {
    width: 14%;

    }

    .services .phone {
    width: 30%;

    }

    .services .maint {
    width: 28%;
    }

    #maCarte {
    height: 500px;
    width: 700px;
    border: 2px solid black;
    margin-left: 23%;
    margin-bottom: 5%;
    margin-top: 3%;

    }

    .centres .container  {

    width: 90%;
    margin-left: 29%;
    margin-bottom: 5%;
    margin-top: 15%;


    }
    .happy {
    width: 20%;

    }

    .geek {
    width: 20%;
    }

    .text-centre {
    text-align: center;
    margin-top: 10%;
    padding: 2%;
    font-family: $fonth2;
    color: $textColor;

    }



    .contact .contact-geek {
    width: 31%;
    margin-left: 34%;
    margin-bottom: 6%;
    }

    .contact #container {
    //margin-top: 25%;
    //padding: 0 30%;


    }

    .contact input {
    border: solid #ffdf91;



    }

    .contact  textarea {
    border: solid #ffdf91;


    }


    .contact h2 {
    font-family: $fonth2;
    color: $textColor;
    text-align: center;
    margin-top: 2%;
    margin-bottom: 10%;
    }

    footer {
    background-color: #ffdf91;
    }

    footer .container {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0;
    margin-top: 20px;


    }

    footer i {

    width: 30%;
    }

    footer a {
    color: #f88f01;
    padding: 10px 3px;
    top: 10px;
    }

    footer p{
    text-align: center;
    font-size: 10px;
    color: #f88f01;
    padding-bottom: 10px;
    }

    footer h5{

    font-size: 10px;
    color: #f88f01;
    }






    /*#logo {
    font-family: 'Space Mono', monospace;
    color: #ffdf91;
    }


    main {

    }

    .landing {
    min-height: 95vh;
    background: #d1c145;
    background-size: cover;
    padding: 0 5rem;
    }



    .nav-links {
    display: flex;
    list-style: none;
    }




    button {
    border: 3px solid #470938 ;
    background-color: #ffdf91;
    padding: 12px 10px;
    border-radius: 12px;
    font-family: 'Concert One', cursive;
    color: #470938;
    }

    .tamps {
    position: absolute;
    margin: 30% 70%;
    width: 20%;

    }

    main {
    background-color: $backgroundcolor;
    }









    .text-ser{
    text-align: center;

    }







</link>

/

/*L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
maxZoom: 18,
id: 'mapbox/streets-v11',
tileSize: 512,
zoomOffset: -1,
accessToken: 'pk.eyJ1IjoidmFsMnZhbCIsImEiOiJja2tmOTVpbXMxOHJyMnVvY2xjaGY0cTU2In0.EZkH23gR3k17JhVpdXfNlw'
}).addTo(maCarte);
console.log(villes);
for (ville in villes) {
var marker = L.marker([villes[ville].lat, ville[ville].lon]).addTo(maCarte);
//marker.binPopup("<p>Gray</p>")

}*/



//var marker = L.marker([47.756, 6.155]).addTo(maCarte);






/* Carte JS*/

// Nous initialisons une liste de marqueurs

/*function init() {

const hauteSaone = {
lat: 47.756981,
lng: 47.756981,
maCarte: null
}

const zoomlevel = 7;
const map = L.map('maCarte').setView([hauteSaone.lat, hauteSaone.lng], zoomlevel);

const mainLayer = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
maxZoom: 18,
id: 'mapbox/streets-v11',
tileSize: 512,
zoomOffset: -1,
accessToken: 'pk.eyJ1IjoidmFsMnZhbCIsImEiOiJja2tmOTVpbXMxOHJyMnVvY2xjaGY0cTU2In0.EZkH23gR3k17JhVpdXfNlw'
});

mainLayer.addTo(map);

}

init();*/