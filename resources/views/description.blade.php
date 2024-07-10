<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Buku </title>
</head>
<body>
    {{ $books->judul }}
    <br>
    {{ $books->penulis }}
    <br>
    {{ $books->penerbit }}
    <br>
    {{ $books->deskripsi }}
    <br>
    {{ $books->genre }}
    <br>
    {{ $books->isbn }}
</body>
</html>