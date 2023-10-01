<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>

<!-- Content Grid with 2 Columns -->
<div class="container mx-auto">
  <div class="grid grid-cols-2 h-screen">
    <!-- Grid items go here -->
    <div class="bg-sky-500 p-4 flex flex-col items-center justify-center h-screen">
        <div class="column-1 py-10">
            <span class="text-4xl font-bold">PRODUCT APPS</span>
        </div>
        <div class="column-1 px-20 text-center">
            <span class="text-lg">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
        </div>
    </div>
    <div class="bg-white mx-36 p-4 flex flex-col items-start justify-center h-screen">
        <div class="column-1 py-5">
            <span class="text-xl font-semibold font-sans">Selamat Datang</span>
        </div>
        <div class="column-1 w-full">
            <span class="text-sm text-gray-500">Silahkan isi data dibawah ini untuk melakukan registrasi</span>
        </div>
        <div class="column-1 mt-6">
            <form action="/register" method="POST">
                @csrf
                <div class="mb-2">
                    <label for="name" class="block mb-2 text-sm text-gray-400 dark:text-white">Nama Lengkap</label>
                    <input type="text" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Nama Lengkap" required>
                </div> 
                <div class="mb-2">
                    <label for="email" class="block mb-2 text-sm text-gray-400">Email</label>
                    <input type="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-96" placeholder="Contoh: admin@gmaiil.com" required>
                    @error('email')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div> 
                <div class="mb-2">
                    <label for="phone" class="block mb-2 text-sm text-gray-400">No Telepon</label>
                    <input type="number" name="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-96" placeholder="Masukkan Nomor Telepon" required>
                </div> 
                <div class="mt-4">
                    <button type="submit" class="w-96 text-white bg-cyan-500 border border-cyan-500 hover:bg-cyan-800 focus:ring-4 focus:border-cyan-400 focus:outline-none focus:ring-cyan-300 font-medium text-sm px-4 py-2 text-center mr-3 md:mr-0">DAFTAR</button>
                </div> 
            </form>
        </div>
        <span class="py-2"> Sudah Punya akun? <a href="/login" class="text-blue-500">Login Disini</a></span>
    </div>
    <!-- Add more grid items as needed -->
</div>

</body>
</html>
