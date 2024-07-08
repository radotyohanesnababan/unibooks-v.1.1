document.getElementById("downloadCSV").addEventListener("click", function() {
    let table = document.getElementById("bookstable");
    let rows = table.querySelectorAll("tr");

    let csvData = [];
    let headers = [];

    let headerCells = rows[0].querySelectorAll("th");
    headerCells.forEach(function(headerCell) {
        headers.push(headerCell.innerText);
    });
    csvData.push(headers.join(',')); 

    for (let i = 1; i < rows.length; i++) {
        let cells = rows[i].querySelectorAll("td");
        let row = [];
        cells.forEach(function(cell) {
            row.push(cell.innerText);
        });
        csvData.push(row.join(','));  
    }

    let csvContent = csvData.join("\n");

    let blob = new Blob([csvContent], { type: 'text/csv' });
    let link = document.createElement('a');
    link.href = URL.createObjectURL(blob);
    link.download = 'data.csv';
    link.click();
});