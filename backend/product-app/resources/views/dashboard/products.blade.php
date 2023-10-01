@extends('layout.app')
    <title>Product Management</title>
@section('content')


<div class="container mx-auto p-7">
    <!-- Add your main content here -->
    <div class="container mx-auto">
        <div class="flex justify-between items-center">
            <h1 class="text-xl font-semibold font-sans">Manajemen Produk</h1>
            <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"  type="button" class="text-white bg-blue-500 border border-blue-500 hover:bg-blue-800 focus:ring-4 focus:border-blue-400 focus:outline-none focus:ring-blue-300 font-medium text-sm px-4 py-2 text-center mr-3 md:mr-0">TAMBAH PRODUK</button>
        </div>
        @if (session('status'))
        <div class="w-full flex items-center mt-4 p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
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
        <div class="w-full flex items-center mt-4 p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
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
        @error('image')
        <div class="w-full flex items-center mt-4 p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">
                    {{ $message }}
                </span>
            </div>
        </div>
        @endif
    </div>
    <table id="example" class="display text-center py-4" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Gambar</th>
                <th>Harga</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($product as $i)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$i->nama}}</td>
                <td>{{$i->harga}}</td>
                <td><img src="{{ asset('storage/products/'.$i->gambar) }}" class="h-10 ml-9" alt="Product Image"></td>
                <td>
                    @if($i->status == 0)
                    <button type="button" class="px-2 w-1/2 text-white rounded-full" style="background-color: red;">Tidak Aktif</button type="button">
                    @else
                    <button type="button" class="px-2 w-1/2 text-white rounded-full" style="background-color: #15803d;">Aktif</button type="button">
                    @endif
                </td>
                <td class="flex justify-center items-center">
                    <div class="px-1">
                        <svg class="cursor-pointer w-6 h-6 text-white rounded-full p-1" data-modal-target="edit-modal" data-modal-toggle="edit-modal" type="button" data-target="#editModal" data-id="{{ $i->id }}" style="background-color: #d97706;" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                            <path d="M12.687 14.408a3.01 3.01 0 0 1-1.533.821l-3.566.713a3 3 0 0 1-3.53-3.53l.713-3.566a3.01 3.01 0 0 1 .821-1.533L10.905 2H2.167A2.169 2.169 0 0 0 0 4.167v11.666A2.169 2.169 0 0 0 2.167 18h11.666A2.169 2.169 0 0 0 16 15.833V11.1l-3.313 3.308Zm5.53-9.065.546-.546a2.518 2.518 0 0 0 0-3.56 2.576 2.576 0 0 0-3.559 0l-.547.547 3.56 3.56Z"/>
                            <path d="M13.243 3.2 7.359 9.081a.5.5 0 0 0-.136.256L6.51 12.9a.5.5 0 0 0 .59.59l3.566-.713a.5.5 0 0 0 .255-.136L16.8 6.757 13.243 3.2Z"/>
                        </svg>
                    </div>
                    <div class="px-1">
                        <svg class="cursor-pointer w-6 h-6 text-white rounded-full p-1" data-modal-target="small-modal" data-modal-toggle="small-modal" data-name="{{ $i->nama }}" data-id="{{ $i->id }}" type="button" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20" style="background-color: red;">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z"/>
                        </svg>
                    </div>
                </td>
            </tr>
        @endforeach
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>

<!-- ADD PRODUCT -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed inset-0 z-50 overflow-auto flex items-center justify-center hidden w-1/3 mx-auto">
    <div class="relative bg-white w-full max-w-md mx-auto rounded-lg shadow-lg">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-0 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="text-center mb-4 text-lg font-medium text-gray-900 dark:text-white">Tambah Produk</h3>
                <form action="create-product" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-2">
                        <label for="name" class="block mb-2 text-sm text-gray-400">Nama Produk</label>
                        <input type="text" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full" placeholder="Masukkan Nama Produk" required>
                    </div> 
                    <div class="mb-2">
                        <label for="harga" class="block mb-2 text-sm text-gray-400">Harga</label>
                        <input type="number" name="harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full" placeholder="Masukkan Harga" required>
                    </div>
                    <div class="my-3">
                        <div class="flex items-center">
                            <input checked id="checked-checkbox" name="status" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checked-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300">Is Active</label>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-center w-full">
                        <label for="gambar" class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <svg class="w-8 h-8 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                <path fill="currentColor" d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z"/>
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 1H2a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z"/>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Pilih gambar dengan ratio 9:16</p>
                            <input id="gambar"name="image" type="file" class="hidden" />
                        </label>
                    </div> 

                    <div class="mt-4">
                        <button type="submit" class="w-full text-white bg-cyan-500 border border-cyan-500 hover:bg-cyan-800 focus:ring-4 focus:border-cyan-400 focus:outline-none focus:ring-cyan-300 font-medium text-sm px-4 py-2 text-center mr-3 md:mr-0">SIMPAN</button>
                    </div> 
                    
                </form>
            </div>
        </div>
    </div>
</div> 

<!-- EDIT PRODUCT -->
<div id="edit-modal" tabindex="-1" aria-hidden="true" class="fixed inset-0 z-50 overflow-auto flex items-center justify-center hidden w-1/3 mx-auto">
    <div class="relative bg-white w-full max-w-md mx-auto rounded-lg shadow-lg">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-0 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="edit-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <div id="modalEdit"></div>
            </div>
        </div>
    </div>
</div>

<!-- DELETE PRODUCT -->
<div id="small-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal body -->
            <div class="flex flex-col justify-center items-center">
                <div class="p-6 space-y-6 text-center">
                    <span class="text-base text-lg leading-relaxed text-black font-semibold">
                        Konfirmasi Hapus
                    </span>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400" id="nameDelete"></p>
                </div>
            </div>
            <!-- Modal footer -->
            <hr class="w-full">
            <div class="flex items-end justify-end p-6 space-x-2 rounded-b dark:border-gray-600">
                <form id="formDelete" action="#" method="POST">
                <button data-modal-hide="small-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batal</button>
                @csrf
                @method("delete")
                    <button data-modal-hide="small-modal" type="submit" class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready( function () {
    $('#example').DataTable({
        paging: false,         // Enable pagination
        searching: false,      // Enable searching
        ordering: true,       // Enable column sorting
        responsive: true,     // Enable responsive design
        // Add more options as needed
    });
}).on('click', '[data-modal-toggle="edit-modal"]', function () {
    var itemId = $(this).data('id');
    var modal = $('#modalEdit');
    // Fetch item data using AJAX and populate the form fields in the modal
    $.ajax({
        url: '/edit-product/' + itemId,
        type: 'GET',
        success: function (response) {
            modal.html(response);
        }
    });
}).on('click', '[data-modal-toggle="small-modal"]', function () {
    var name = $(this).data('name');
    var id = $(this).data('id');
    $('#nameDelete').text(`Apakah kamu yakin menghapus ${name}`);
    $("#formDelete").attr("action", `delete-product/${id}?`);
});
</script>
@endsection

