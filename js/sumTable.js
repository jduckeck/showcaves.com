function sumTable() {
    const table = document.querySelector("#myTable");
    const rows = table.querySelectorAll("tbody tr");
    const cols = table.querySelectorAll("thead th.sum-col").length;

    const sums = Array(cols)
        .fill(0);

    rows.forEach(row => {
        const cells = row.querySelectorAll("td");

        for (let i = 0; i < cols; i++) {
            const val = parseFloat(cells[i + 1].textContent) || 0; // +1 wegen Name-Spalte
            sums[i] += val;
        }
    });

    const outputs = table.querySelectorAll("tfoot td.sum-out");
    outputs.forEach((cell, i) => {
        cell.textContent = sums[i] ?? 0;
    });
}

window.addEventListener("DOMContentLoaded", sumTable);