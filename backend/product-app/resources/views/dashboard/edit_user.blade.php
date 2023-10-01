
<h3 class="text-center mb-4 text-lg font-medium text-gray-900 dark:text-white">Edit User</h3>
<form action="edit-user/{{$data->id}}" method="POST">
    @method('patch')
    @csrf
    <div class="mb-2">
        <label for="name" class="block mb-2 text-sm text-gray-400">Nama Lengkap</label>
        <input type="text" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full" placeholder="Masukkan Nama Lengkap" value="{{old('name') ?? $data->name}}" required>
    </div> 
    <div class="mb-2">
        <label for="email" class="block mb-2 text-sm text-gray-400">Email</label>
        <input type="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-300 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full" placeholder="Masukkan Email" value="{{old('email') ?? $data->email}}" required readonly>
        @error('email')
            <span class="text-red-500 text-sm">{{$message}}</span>
        @enderror
    </div> 
    <div class="mb-2">
        <label for="telepon" class="block mb-2 text-sm text-gray-400 dark:text-white">Nomor Telepon</label>
        <input type="number" name="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan No Telepon" value="{{old('phone') ?? $data->phone}}" required>
        @error('email')
            <span class="text-red-500 text-sm">{{$message}}</span>
        @enderror
    </div> 
    <div class="my-3">
        <div class="flex items-center">
            <input  @if($data->status == 1) checked @endif id="checked-checkbox" name="status" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="checked-checkbox" class="ml-2 text-sm text-gray-900 dark:text-gray-300">Is Active</label>
        </div>
    </div>
    <div class="mt-4">
        <button type="submit" class="w-full text-white bg-cyan-500 border border-cyan-500 hover:bg-cyan-800 focus:ring-4 focus:border-cyan-400 focus:outline-none focus:ring-cyan-300 font-medium text-sm px-4 py-2 text-center mr-3 md:mr-0">SIMPAN</button>
    </div> 
    
</form>
