document.getElementById("downloadCSV").addEventListener("click", function() {
    fetch('{{route("exportcsv")}}')
    .then (response => response.json())
    .then(books=>{
        let csvData=[];
        let headers = ["Judul","ID Buku", "Penulis", "Penerbit", "Tahun Terbit", "Genre", "Deskripsi", "Stok", "ISBN"];

        csvData.push(headers.join(','));

        books.forEach(function(books) {
            let row = [judul, id_buku, penulis, penerbit, tahun_terbit, genre, deskripsi, stok, isbn];
            csvData.push(row.join(','));
        })

        let csvContent = csvData.join('\n');

        let blob = new Blob([csvContent], {type: 'text/csv;charset=utf-8;'});
        let link = document.createElement("a");
        link.href = URL.createObjectURL(blob);
        link.download = "data.csv";
        link.click();
    }
    )
});