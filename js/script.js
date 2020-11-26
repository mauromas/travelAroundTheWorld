document.addEventListener('DOMContentLoaded', function() {

    var map = L.map('map').setView([40.415064, -3.701706], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([40.415064, -3.701706]).addTo(map)
        .bindPopup('Recorre el mapa y busca tus ciudades!')
        .openPopup();
});