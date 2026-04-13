const sortState = {};

function sortTable(tableId, colIndex) {
    const table = document.querySelector("#" + tableId);
    const tbody = table.querySelector("tbody");
    const rows = Array.from(tbody.querySelectorAll("tr"));

    // Richtung wechseln
    const key = tableId + "_" + colIndex;
    sortState[key] = !sortState[key]; // true = asc, false = desc
    const asc = sortState[key];

    const isNumeric = rows.every(row => {
        const val = row.cells[colIndex]?.textContent.trim()
            .replace(",", ".");
        return val !== "" && !isNaN(val);
    });

    rows.sort((a, b) => {
        let A = a.cells[colIndex]?.textContent.trim();
        let B = b.cells[colIndex]?.textContent.trim();

        if (isNumeric) {
            A = Math.abs(parseFloat(A.replace(",", ".")));
            B = Math.abs(parseFloat(B.replace(",", ".")));
        }
        else {
            A = A || "";
            B = B || "";
            A = A.toLowerCase();
            B = B.toLowerCase();
        }

        let result;
        if (isNumeric) {
            result = A - B;
        }
        else {
            result = A.localeCompare(B, "de", { numeric: true });
        }

        return asc ? result : -result;
    });

    rows.forEach(row => tbody.appendChild(row));
}