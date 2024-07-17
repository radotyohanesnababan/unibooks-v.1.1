<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            color: #000080;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            padding: 20px;
        }

        .card {
            border: 1px solid #000080;
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
            width: 200px;
            background-color: #e0f7fe;
        }

        .card img {
            max-width: 100px;
            display: block;
            margin: 0 auto 10px;
            border-radius: 5px;
        }

        .card h2 {
            text-align: center;
            margin: 0;
            color: #000080;
        }

        .card p {
            margin: 5px 0;
            color: #000080;
        }
    </style>
</head>

<body>
    @forelse ($books as $item)
        <div class="card">
            <img src="{{ asset('storage/coverimages/' . $item->coverimage) }}" alt="{{ $item->judul }}">
            <h2>{{ $item->judul }}</h2>
            <p>Penulis: {{ $item->penulis }}</p>
            <p>Tahun Terbit: {{ $item->tahun_terbit }}</p>
            <p>{{ $item->deskripsi }}</p>
        </div>
    @empty
        <p class="text-center">No books found.</p>
    @endforelse
</body>

</html>
