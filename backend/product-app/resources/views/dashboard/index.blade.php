@extends('layout.app')
    <title>Dashboard</title>
@section('content')


<div class="container mx-auto p-7">
    <!-- Add your main content here -->
    <h1 class="text-xl font-semibold font-sans">Dashboard</h1>

    <div class="py-5 grid grid-cols-4 gap-3">
        <div class="w-full max-w-sm bg-indigo-300 hover:border hover:border-gray-200 rounded-lg hover:shadow dark:bg-gray-800 dark:border-gray-700 p-7 px-6">
            <span class="text-gray-500">Jumlah User</span>
            <div class="pt-1">
                <span class="text-4xl font-medium">{{$data['totalUser']}}</span><span> User</span>
            </div>
        </div>
        <div class="w-full max-w-sm bg-indigo-300 hover:border hover:border-gray-200 rounded-lg hover:shadow dark:bg-gray-800 dark:border-gray-700 p-7 px-6">
            <span class="text-gray-500">Jumlah User Aktif</span>
            <div class="pt-1">
                <span class="text-4xl font-medium">{{$data['totalUserAktif']}}</span><span> User</span>
            </div>
        </div>
        <div class="w-full max-w-sm bg-indigo-300 hover:border hover:border-gray-200 rounded-lg hover:shadow dark:bg-gray-800 dark:border-gray-700 p-7 px-6">
            <span class="text-gray-500">Jumlah Produk</span>
            <div class="pt-1">
                <span class="text-4xl font-medium">{{$data['totalProduct']}}</span><span> Produk</span>
            </div>
        </div>
        <div class="w-full max-w-sm bg-indigo-300 hover:border hover:border-gray-200 rounded-lg hover:shadow dark:bg-gray-800 dark:border-gray-700 p-7 px-6">
            <span class="text-gray-500">Jumlah Produk Aktif</span>
            <div class="pt-1">
                <span class="text-4xl font-medium">{{$data['totalProductAktif']}}</span><span> Produk</span>
            </div>
        </div>
    </div>
    <div class="container p-7 bg-white w-2/3 rounded-lg">
        <h1 class="text-lg font-semibold font-sans pb-4">Produk Terbaru</h1>
        
        <div class="relative overflow-x-auto sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-blue-500 rounded-lg">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Product
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal Dibuat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga (Rp)
                        </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data['dataProduct'] as $data)
                    <tr class="bg-white hover:bg-gray-50">
                        <th scope="row" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$data->nama}}
                        </th>
                        <td class="px-6 py-3">
                            {{$data->created_at}}
                        </td>
                        <td class="px-6 py-3">
                        {{ 'Rp ' . number_format($data->harga, 0, ',', '.') }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>

@endsection

