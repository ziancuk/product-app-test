
<h3 class="text-center mb-4 text-lg font-medium text-gray-900 dark:text-white">Edit Product</h3>
<form action="{{ route('updateProduct', $data->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="mb-2">
        <label for="name" class="block mb-2 text-sm text-gray-400">Nama Produk</label>
        <input type="text" name="nama" value="{{old('nama') ?? $data->nama}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full" placeholder="Masukkan Nama Produk" required>
    </div> 
    <div class="mb-2">
        <label for="harga" class="block mb-2 text-sm text-gray-400">Harga</label>
        <input type="number" name="harga" value="{{old('harga') ?? $data->harga}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full" placeholder="Masukkan Harga" required>
    </div> 
    <div class="my-3">
        <div class="flex items-center">
            <input  @if($data->status == 1) checked @endif id="checked-checkbox" name="status" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="checked-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300">Is Active</label>
        </div>
    </div>
    <div class="flex items-center justify-center w-full">
        <label for="gambar_update" class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
            <svg class="w-8 h-8 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                <path fill="currentColor" d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z"/>
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 1H2a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z"/>
                </svg>
                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Pilih gambar dengan ratio 9:16</p>
            <input id="gambar_update"name="image" type="file" class="hidden" />
        </label>
    </div> 

    <div class="mt-4">
        <button type="submit" class="w-full text-white bg-cyan-500 border border-cyan-500 hover:bg-cyan-800 focus:ring-4 focus:border-cyan-400 focus:outline-none focus:ring-cyan-300 font-medium text-sm px-4 py-2 text-center mr-3 md:mr-0">SIMPAN</button>
    </div> 
    
</form>
