function convertAreaToSVG(area) {
    const coords = area.coords.split(',')
        .map(Number);
    const shape = area.shape.toLowerCase();
    const href = area.href;
    let element = null;

    if (shape === "rect") {
        const [x1, y1, x2, y2] = coords;
        element = `<a href="${href}"><rect x="${x1}" y="${y1}" width="${x2 - x1}" height="${y2 - y1}" fill="transparent" stroke="red"/></a>`;
    }
    else if (shape === "circle") {
        const [cx, cy, r] = coords;
        element = `<a href="${href}"><circle cx="${cx}" cy="${cy}" r="${r}" fill="transparent" stroke="blue"/></a>`;
    }
    else if (shape === "poly") {
        const points = coords.join(' ');
        element = `<a href="${href}"><polygon points="${points}" fill="transparent" stroke="green"/></a>`;
    }

    return element;
}