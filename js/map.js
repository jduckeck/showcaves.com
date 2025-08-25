function loadPois() {
    const bounds = map.getBounds();
    const bbox = bounds.toBBoxString();

    fetch(`https://www.showcaves.com/php/pois.php?bbox=${bbox}`)
        .then(r => r.json())
        .then(data => {
            poiLayer.clearLayers();
            data.forEach(p => {
                L.marker([p.Latitude, p.Longitude], { icon: getIcon(p.category) })
                    .bindPopup(`<a href="${p.file}" target="_blank">${p.name}</a>`)
                    .addTo(poiLayer);
            });
        });
}

/**
 * Get the category of a sight from the category in the database
 *
 * @param category string contains lowercase category
 * @return string with uppercase category for icon names
 */
function getIcon(category) {
    let icon;

    switch (category) {
        case 'showcaves':
            icon = "../../../graphics/symbol/Showcave.png";
            break;
        case 'caves':
            icon = "../../../graphics/symbol/Cave.png";
            break;
        case 'subterranea':
            icon = "../../../graphics/symbol/Subterranea.png";
            break;
        case 'mines':
            icon = "../../../graphics/symbol/Mine.png";
            break;
        case 'karst':
            icon = "../../../graphics/symbol/Karst.png";
            break;
        case 'springs':
            icon = "../../../graphics/symbol/Spring.png";
            break;
        case 'gorges':
            icon = "../../../graphics/symbol/Gorge.png";
            break;
        default:
            icon = "../../../graphics/symbol/Subterranea.png";
            break;
    }
    return L.icon({
        iconUrl: icon,
        iconSize: [12, 12],
        iconAnchor: [6, 12],
        popupAnchor: [0, -12]
    });
}

const map = L.map('map')
    .setView([51.0, 10.0], 6);

L.tileLayer('https://{s}.tile.openstreetmap.fr/{z}/{x}/{y}.png', {
    attribution: '&copy; OpenStreetMap'
})
    .addTo(map);

const poiLayer = L.layerGroup()
    .addTo(map);

map.on('moveend', loadPois);
loadPois();

map.invalidateSize();
