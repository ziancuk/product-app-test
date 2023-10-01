<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>

<!-- Content Grid with 2 Columns -->
<div class="container mx-auto">
  <div class="grid grid-cols-2 h-screen">
    <!-- Grid items go here -->
    <div class="bg-sky-500 p-4 flex flex-col items-center justify-center h-screen">
        <div class="column-1 py-10">
            <span class="text-4xl font-bold">NAMA APLIKASI</span>
        </div>
        <div class="column-1 px-20 text-center">
            <span class="text-lg">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
        </div>
    </div>
    <div class="bg-white mx-36 p-4 flex flex-col items-start justify-center h-screen">
        @if (session('status'))
        <div class="w-96 flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">{{ session('status') }}</span>
            </div>
        </div>          
        @endif
        @if (session('error'))
        <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">
                    {{ session('error') }}
                </span>
            </div>
        </div>
        @endif
        <div class="column-1 py-5">
            <span class="text-xl font-semibold font-sans">Selamat Datang</span>
        </div>
        <div class="column-1 w-full">
            <span class="text-sm text-gray-500">Silahkan masukkan email dan password anda untuk mulai menggunakan aplikasi</span>
        </div>
        <div class="column-1 mt-6">
            <form action="/login" method="POST">
                @csrf
                <div class="mb-2">
                    <label for="email" class="block mb-2 text-sm text-gray-400">Email</label>
                    <input type="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-96" placeholder="Contoh: admin@gmaiil.com" required>
                </div> 
                <div class="mb-2">
                    <label for="password" class="block mb-2 text-sm text-gray-400 dark:text-white">Password</label>
                    <input type="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Password" required>
                </div> 
                <div class="mt-4">
                    <button type="submit" class="w-96 text-white bg-cyan-500 border border-cyan-500 hover:bg-cyan-800 focus:ring-4 focus:border-cyan-400 focus:outline-none focus:ring-cyan-300 font-medium text-sm px-4 py-2 text-center mr-3 md:mr-0">MASUK</button>
                </div> 
            </form>
        </div>
        <span class="py-2"> Belum Punya akun? <a href="/register" class="text-blue-500">Daftar Disini</a></span>
    </div>
    <!-- Add more grid items as needed -->
</div>

</body>
</html>
