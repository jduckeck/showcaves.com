document.addEventListener("DOMContentLoaded", () => {
    const images = document.querySelectorAll("img[usemap]");

    images.forEach((img) => {
        const mapName = img.getAttribute("usemap")
            .replace("#", "");
        const map = document.querySelector(`map[name="${mapName}"]`);
        if (!map) return;

        const wrapper = document.createElement("div");
        wrapper.style.position = "relative";
        wrapper.style.display = "inline-block";
        img.parentNode.insertBefore(wrapper, img);
        wrapper.appendChild(img);

        const svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
        svg.setAttribute("class", "svg-overlay");
        svg.style.position = "absolute";
        svg.style.top = "0";
        svg.style.left = "0";
        svg.style.width = "100%";
        svg.style.height = "100%";
        svg.style.pointerEvents = "none";

        // Set original image size as reference
        const imgWidth = img.naturalWidth || img.width;
        const imgHeight = img.naturalHeight || img.height;
        svg.setAttribute("viewBox", `0 0 ${imgWidth} ${imgHeight}`);

        map.querySelectorAll("area")
            .forEach(area => {
                if (!area.getAttribute("coords")) {
                    return;
                }

                const link = document.createElementNS("http://www.w3.org/2000/svg", "a");
                link.setAttributeNS("http://www.w3.org/1999/xlink", "href", area.getAttribute("href"));
                link.setAttribute("target", "_top");
                link.setAttribute("title", area.getAttribute("alt") || "");

                const shapeElement = createShape(area.getAttribute("shape"), area.getAttribute("coords")
                    .split(",")
                    .map(Number));
                if (!shapeElement) return;

                shapeElement.setAttribute("fill", "transparent");
                shapeElement.setAttribute("stroke", "none");
                shapeElement.style.pointerEvents = "auto";

                link.appendChild(shapeElement);
                svg.appendChild(link);
            });

        wrapper.appendChild(svg);
        map.remove(); // remove <map> to avoid interference
    });

    function createShape(shape, coords) {
        switch (shape.toLowerCase()) {
            case "rect":
                const [x1, y1, x2, y2] = coords;
                const rect = document.createElementNS("http://www.w3.org/2000/svg", "rect");
                rect.setAttribute("x", x1);
                rect.setAttribute("y", y1);
                rect.setAttribute("width", x2 - x1);
                rect.setAttribute("height", y2 - y1);
                return rect;
            case "circle":
                const [cx, cy, r] = coords;
                const circle = document.createElementNS("http://www.w3.org/2000/svg", "circle");
                circle.setAttribute("cx", cx);
                circle.setAttribute("cy", cy);
                circle.setAttribute("r", r);
                return circle;
            case "poly":
                const poly = document.createElementNS("http://www.w3.org/2000/svg", "polygon");
                const points = [];
                for (let i = 0; i < coords.length; i += 2) {
                    points.push(`${coords[i]},${coords[i + 1]}`);
                }
                poly.setAttribute("points", points.join(" "));
                return poly;
            default:
                return null;
        }
    }
});
