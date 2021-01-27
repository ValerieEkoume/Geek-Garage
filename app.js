
var villes = {
    "Gray": { "lat": 47.45, "lon": 5.5833},
    "Vienne": { "lat": 45.5167, "lon": 4.8667},
    "Beynot": { "lat": 45.83332, "lon": 5.0}

};


var tableauMarqueurs = [];

// On initialise la carte
var carte = L.map('maCarte').setView([47.45, 5.5833], 13);

// On charge les "tuiles"
L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
    // Il est toujours bien de laisser le lien vers la source des données
    attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
    minZoom: 1,
    maxZoom: 20
}).addTo(carte);

var marqueurs = L.markerClusterGroup();

// On personnalise le marqueur
/*var icone = L.icon({
    iconUrl: "images/icone.png",
    iconSize: [50, 50],
    iconAnchor: [25, 50],
    popupAnchor: [0, -50]
})*/

// On parcourt les différentes villes
for(ville in villes){
    // On crée le marqueur et on lui attribue une popup
    var marqueur = L.marker([villes[ville].lat, villes[ville].lon] /*, {icon: icone}*/); //.addTo(carte); Inutile lors de l'utilisation des clusters
    marqueur.bindPopup("<p>"+ville+"</p>");
    marqueurs.addLayer(marqueur); // On ajoute le marqueur au groupe

    // On ajoute le marqueur au tableau
    tableauMarqueurs.push(marqueur);
}
// On regroupe les marqueurs dans un groupe Leaflet
var groupe = new L.featureGroup(tableauMarqueurs);

// On adapte le zoom au groupe
carte.fitBounds(groupe.getBounds().pad(0.5));

carte.addLayer(marqueurs);







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

