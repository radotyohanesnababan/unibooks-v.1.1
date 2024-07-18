<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian Buku</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link rel="stylesheet" href="<?php echo asset('css/style.css'); ?>" type="text/css">
    <style>
        #gallery {
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
    <div id = "header" class="flex justify-between items-center m-6 font-bold">
        Hasil Pencarian Buku dengan kata kunci {{ $query }}
        <div class="flex items-center">
            <a href="/usersearch">
                <div class="ml-7">
                    <button type="submit"
                        class="inline-flex items-center px-5 py-1.5 text-sm font-medium text-center text-white bg-red-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-red-900">
                        Back
                    </button>
                </div>
            </a>
        </div>
    </div>
    @if ($books->isEmpty())
        <div class="text-center my-4">
            <p class="text-lg font-bold">Tidak ada buku dengan kata kunci "{{ $query }}".</p>
            <p class="text-lg">Buku Lainnya:</p>
        </div>
    @endif

    <div id="gallery">
        @forelse ($books as $item)
            <div class="card">

                <img src="{{ asset('storage/coverimage/' . $item->coverimage) }}" alt="{{ $item->judul }}">
                <h2>{{ $item->judul }}</h2>
                <p>Penulis: {{ $item->penulis }}</p>
                <p>Tahun Terbit: {{ $item->tahun_terbit }}</p>
                <a href="{{ url('books/' . $item->id_buku) }}">
                    <div
                        class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-2.5 py-1.5  dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                        Selengkapnya
                    </div>
                </a>
            </div>
        @empty

            @php
                $otherbooks = \App\Models\books::inRandomOrder()->take(10)->get();
            @endphp

            @foreach ($otherbooks as $book)
                <div class="card">
                    <a href="{{ url('books/' . $book->id_buku) }}">
                        <img src="{{ asset('storage/coverimage/' . $book->coverimage) }}" alt="{{ $book->judul }}">
                        <h2>{{ $book->judul }}</h2>
                        <p>Penulis: {{ $book->penulis }}</p>
                        <p>Tahun Terbit: {{ $book->tahun_terbit }}</p>
                    </a>
                </div>
            @endforeach

        @endforelse
    </div>

</body>

</html>
