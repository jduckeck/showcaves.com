function initPanoramas() {

    document.querySelectorAll(".panorama")
        .forEach(img => {
            const container = img.closest(".panorama-container");
            if (!container) return;

            const panzoom = Panzoom(img, {
                contain: 'outside',
                maxScale: 5,
                minScale: 1
            });
            panzoom.pan(10, 10)
            panzoom.zoom(2, { animate: true })

            container.addEventListener("wheel", function(event) {
                event.preventDefault();
                panzoom.zoomWithWheel(event);
            }, { passive: false });
        });
}

document.addEventListener("DOMContentLoaded", () => {
    initPanoramas(); // startet automatisch für alle .panorama
});