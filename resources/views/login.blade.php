<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</head>
<body>
    <!-- component -->
<div class="bg-gray-100 flex justify-center items-center h-screen">
    <!-- Left: Image -->
<div class=" w-full h-full hidden lg:flex items-center justify-center flex-1 bg-white text-black">
  <div class="w-1/2 h-1/2">
    <img src="https://i.ibb.co.com/fxv9QPL/Desain-tanpa-judul-2.png" alt="">
  </div>
    
</div>
<!-- Right: Login Form -->
<div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
  <h1 class="text-2xl font-semibold mb-4">Login</h1>

  @if (session('error'))
    <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2"><b>Opps!</b>{{ session('error') }}</div>
  @endif
  <form action="{{ route('actionlogin') }}" method="POST">
    @csrf
    <!-- Email Input -->
    <div class="mb-4">
      <label for="email" class="block text-gray-600">Email</label>
      <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-gray-500" autocomplete="off" placeholder="Email" required="">
    </div>
    <!-- Password Input -->
    <div class="mb-4">
      <label for="password" class="block text-gray-600">Password</label>
      <input type="password" id="password" name="password" class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-gray-500" autocomplete="off">
    </div>
    <!-- Login Button -->
    <button type="submit" class="bg-gray-500 hover:bg-gray-600 text-white font-semibold rounded-md py-2 px-4 w-full">Login</button>
  </form>
  <!-- Sign up  Link -->
  <div class="mt-6 text-gray-800 text-center">
    <a href="/register" class="hover:underline">Daftar Disini</a>
  </div>
</div>
</div>
</body>
</html>