function loadPois() {
    const bounds = map.getBounds();
    const bbox = bounds.toBBoxString();

    fetch(`pois.php?bbox=${bbox}`)
        .then(r => r.json())
        .then(data => {
            poiLayer.clearLayers();
            data.forEach(p => {

                const customIcon = L.icon({
                    iconUrl: getIcon(p.category) || 'marker.png',
                    iconSize: [32, 32],
                    iconAnchor: [16, 32],
                    popupAnchor: [0, -32]
                });
                L.marker([p.Latitude, p.Langitude], { icon: customIcon })
                    .bindPopup(`<a href="${p.file}" target="_blank">${p.name}</a>`)
                    .addTo(poiLayer);
            });
        });
}

/**
 * Get the category of a sight from the category in the database
 *
 * @param $category string contains lowercase category
 * @return string with uppercase category for icon names
 */
function getIcon($category) {
    switch ($category) {
        case 'showcaves':
            $Category = "Showcave";
            break;
        case 'caves':
            $Category = "Cave";
            break;
        case 'subterranea':
            $Category = "Subterranea";
            break;
        case 'mines':
            $Category = "Mine";
            break;
        case 'karst':
            $Category = "Karst";
            break;
        case 'springs':
            $Category = "Spring";
            break;
        case 'gorges':
            $Category = "Gorge";
            break;
        default:
            $Category = "Subterranea";
            break;
    }
    return $Category;
}

const map = L.map('map')
    .setView([51.0, 10.0], 6);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; OpenStreetMap'
})
    .addTo(map);

const poiIcon = L.icon({
    iconUrl: 'marker.png',
    iconSize: [32, 32],
    iconAnchor: [16, 32],
    popupAnchor: [0, -32]
});

const poiLayer = L.layerGroup()
    .addTo(map);

map.on('moveend', loadPois);
loadPois();

map.invalidateSize();
