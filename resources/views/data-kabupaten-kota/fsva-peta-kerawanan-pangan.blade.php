
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaflet Map with GeoJSON</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map {
            height: 1000px;
        }
    </style>
</head>
<body>
    <div id="map"></div>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        var map = L.map('map').setView([0.4019653470596302, 127.07256632121755], 8);
    
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
    
        // Define a function to style each feature based on its properties
        function style(feature) {
            return {
                fillColor: getColor(feature.properties.name), // Get color based on city name
                weight: 2,
                opacity: 1,
                color: 'white',
                dashArray: '3',
                fillOpacity: 0.7
            };
        }
    
        // Define a function to get color based on city name
        function getColor(cityName) {
    // Assign colors based on city name
    switch (cityName) {
        case 'KABUPATEN HALMAHERA SELATAN':
            return 'red';
        case 'KABUPATEN KEPULAUAN SULA':
            return 'blue';
        case 'KOTA TIDORE KEPULAUAN':
            return 'green';
        case 'KABUPATEN HALMAHERA TENGAH':
            return 'orange';
        case 'KABUPATEN HALMAHERA TIMUR':
            return 'purple';
        case 'KOTA TERNATE':
            return 'yellow';
        case 'KABUPATEN HALMAHERA BARAT': 
            return 'cyan';
        case 'KABUPATEN HALMAHERA UTARA':
            return 'magenta';
        case 'KABUPATEN PULAU MOROTAI':
            return 'lime';
        case 'City10':
            return 'pink';
        default:
            return 'gray'; // Default color
    }
}

    
        // Fetch GeoJSON data and add it to the map with custom styling
        fetch('http://127.0.0.1:8000/geojson/maluku.geojson')
            .then(response => response.json())
            .then(data => {
                // Add GeoJSON layer with custom styling
                L.geoJSON(data, {
                    style: style, // Apply custom style function
                    onEachFeature: function (feature, layer) {
                        // Add popup to each feature
                        var cityName = feature.properties.name;
                        layer.bindPopup('Kota: ' + cityName);
                    }
                }).addTo(map);
            });
    </script>
</body>
</html>
