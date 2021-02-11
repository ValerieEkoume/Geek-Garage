



// var villes = {
//     "Gray": { "lat": 47.45, "lon": 5.5833},
//     "Vienne": { "lat": 45.5167, "lon": 4.8667},
//     "Beynot": { "lat": 45.83332, "lon": 5.0}
//
// };


//var tableauMarqueurs = [];

// On initialise la carte
var carte = L.map('maCarte').setView([47.45, 5.5833], 6);

// On charge les "tuiles"
L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
    // Il est toujours bien de laisser le lien vers la source des données
    attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
    minZoom: 1,
    maxZoom: 20
}).addTo(carte);

let xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = () => {
    // La transaction est terminée ?
    if(xmlhttp.readyState == 4){
        // Si la transaction est un succès
        if(xmlhttp.status == 200){
            // On traite les données reçues
            let donnees = JSON.parse(xmlhttp.responseText)

            // On boucle sur les données (ES8)
            Object.entries(donnees.centres).forEach(centre => {
                // Ici j'ai une seule agence
                // On crée un marqueur pour l'agence
                let marker = L.marker([centre[1].latitude, centre[1].longitude]).addTo(carte)
                marker.bindPopup(centre[1].nom_centre + "<br>" + centre[1].adresse +  "<br>" + centre[1].ouverture + "<br>" + centre[1].fermeture +"<br>" +
                    "<button type='button' class='btn ' data-bs-toggle='modal' data-bs-target='#exampleModal' data-bs-whatever='@mdo'>Contact</button>");


            })
        }else{
            console.log(xmlhttp.statusText);
        }
    }
}
xmlhttp.open("GET", "http://127.0.0.1:1010/liste");

xmlhttp.send(null);


function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}

$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
})
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

//On crée un marqueur pour l'agence



//On ajoute la popup


// On personnalise le marqueur
/*var icone = L.icon({
    iconUrl: "images/icone.png",
    iconSize: [50, 50],
    iconAnchor: [25, 50],
    popupAnchor: [0, -50]
})*/

// On parcourt les différentes villes
// for(ville in villes){
//     // On crée le marqueur et on lui attribue une popup
//     var marqueur = L.marker([villes[ville].lat, villes[ville].lon] /*, {icon: icone}*/); //.addTo(carte); Inutile lors de l'utilisation des clusters
//     marqueur.bindPopup("<p>"+ville+"</p>");
//     marqueurs.addLayer(marqueur); // On ajoute le marqueur au groupe
//
//     // On ajoute le marqueur au tableau
//     tableauMarqueurs.push(marqueur);
// }
// // On regroupe les marqueurs dans un groupe Leaflet
// var groupe = new L.featureGroup(tableauMarqueurs);
//
// // On adapte le zoom au groupe
// carte.fitBounds(groupe.getBounds().pad(0.5));
//
// carte.addLayer(marqueurs);

//ANIMATION DE TEXT

// const text = document.querySelector(".home .content .fancy")
// const strText = text.textContent;
// const splitText = strText.split("")
//
// console.log(splitText);
//
// for(let i=0; i < splitText.lenght; i++) {
//
//     text.innerHTML += "<span>"+ splitText[i] + "</span>";
// }
// //
// // let char = 0;
// // let timer = setInterval(onTick, 50);
// //
// // function onTick(){
// //     const span =text.querySelector("span")[char];
// //     span.classList.add("fade");
// //     char++;
// //     if (char === splitText.length){
// //         complete();
// //
// //     }
// // }
// //
// // function complete(){
// //     clearInterval(timer);
// //     timer = null;
// // }





