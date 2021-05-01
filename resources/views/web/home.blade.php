<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Leaflet Css --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <style>
        #map {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
        }
    </style>
    <title>Welcome Bujang</title>
</head>

<body>
    <div id="map"></div>

    <script>
        var map = L.map('map').setView([51.5, -0.09], 13);

        L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=iVwxS42CVMlobjgLaPRM',
        {attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',}).addTo(map);

        var marker = L.marker([51.5, -0.09]).addTo(map);
    </script>
</body>

</html>