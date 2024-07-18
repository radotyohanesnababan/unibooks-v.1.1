<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Buku {{ $books->judul }} </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo asset('css/style.css'); ?>" type="text/css">
</head>

<body>
    <nav class="absolute top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <a href="https://flowbite.com" class="flex ms-2 md:me-24">
                        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" />
                        <span
                            class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Unibooks</span>
                    </a>
                </div>
                <div class="flex items-center">
                    <a href="/userhome">
                        <div class="ml-7">
                            <button type="submit"
                                class="inline-flex items-center px-5 py-1.5 text-sm font-medium text-center text-white bg-red-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-red-900">
                                Back to Home
                            </button>

                        </div>
                    </a>
                    @auth
                        <a href="/">
                            <div class="ml-7">
                                <button type="submit"
                                    class="inline-flex items-center px-5 py-1.5 text-sm font-medium text-center text-white bg-red-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-red-900">
                                    Back to Admin
                                </button>
                            </div>
                        </a>
                    @endauth
                </div>
            </div>
        </div>
        </div>
    </nav>
    <div class="max-w-6xl mx-auto bg-white p-6 rounded-lg shadow-lg flex mt-20">
        <div class="w-3/4 pr-6">
            <div class="flex items-center mb-6">
                <img src="{{ asset('storage/coverimage/' . $books->coverimage) }}" alt="{{ $books->judul }}"
                    class="w-32 h-48 mr-6">
                <div>
                    <h1 class="text-2xl font-bold">{{ $books->judul }}</h1>
                    <p class="mt-4 text-gray-700">{{ $books->deskripsi }}</p>
                </div>
            </div>
            <div>
                <h2 class="text-xl font-semibold mb-4">Deskripsi Buku</h2>
                <table class="min-w-full bg-white border border-gray-200">
                    <tbody>
                        <tr class="bg-gray-50">
                            <td class="py-2 px-4 border-b border-gray-200 font-semibold">Judul</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $books->judul }}</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200 font-semibold">Penulis</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $books->penulis }}</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="py-2 px-4 border-b border-gray-200 font-semibold">Penerbit</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $books->publisher->nama_penerbit }}</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-200 font-semibold">ISBN</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $books->isbn }}</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="py-2 px-4 border-b border-gray-200 font-semibold">Genre</td>
                            <td class="py-2 px-4 border-b border-gray-200">{{ $books->genre }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <div>
            <h2 class="text-xl font-semibold mb-4">Buku Lainnya</h2>
            <ul>
                @foreach ($booksrandom as $random)
                    <li class="mb-4 flex hover:bg-gray-200">
                        <button onclick="window.location.href='/books/{{ $random->id_buku }}'">
                    <li class="mb-1 flex">
                        <img src="{{ asset('storage/coverimage/' . $random->coverimage) }}" alt="{{ $books->judul }}"
                            class="w-12 h-16 mr-2">
                        <div class="flex text-left">
                            <a href="/books/{{ $random->id_buku }}">{{ $random->judul }}</a>
                        </div>
                    </li>
                    </button>
                    </li>
                @endforeach


            </ul>
        </div>
    </div>
    </div>
</body>

<body>
